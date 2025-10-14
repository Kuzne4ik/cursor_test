<?php
declare(strict_types=1);

// Generator: Create AI documentation PHP files for each .php file in `interface`
// Usage (from project root): php generate_ai_docs.php

// Robust error reporting for CLI runs
error_reporting(E_ALL);
ini_set('display_errors', '1');

function printLine(string $message): void {
    // Avoid extra spaces or indentation; print plainly for Windows PowerShell compatibility
    echo $message, PHP_EOL;
}

function requireDirectory(string $path): void {
    if (!is_dir($path)) {
        if (!mkdir($path, 0777, true) && !is_dir($path)) {
            throw new RuntimeException('Failed to create directory: ' . $path);
        }
    }
}

function findPhpFiles(string $directory): array {
    if (!is_dir($directory)) {
        return [];
    }
    $files = [];
    $dirIter = new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS);
    $iter = new RecursiveIteratorIterator($dirIter);
    foreach ($iter as $fileInfo) {
        if (!$fileInfo instanceof SplFileInfo) {
            continue;
        }
        if (!$fileInfo->isFile()) {
            continue;
        }
        if (strtolower($fileInfo->getExtension()) !== 'php') {
            continue;
        }
        $files[] = $fileInfo->getPathname();
    }
    sort($files);
    return $files;
}

/**
 * Parse a PHP file and extract a lightweight index of declarations.
 * This avoids loading user code; it operates purely on tokens.
 */
function analyzePhpFile(string $sourcePath): array {
    $code = file_get_contents($sourcePath);
    if ($code === false) {
        throw new RuntimeException('Unable to read file: ' . $sourcePath);
    }

    $tokens = token_get_all($code);
    $namespace = '';
    $uses = [];
    $classes = [];
    $interfaces = [];
    $traits = [];
    $functions = [];
    $constants = [];

    $i = 0;
    $count = count($tokens);
    $captureNamespace = function (int &$i) use (&$tokens): string {
        $nsParts = [];
        $i++; // move past T_NAMESPACE
        while ($i < count($tokens)) {
            $t = $tokens[$i];
            if (is_array($t)) {
                if ($t[0] === T_STRING || $t[0] === T_NAME_QUALIFIED || $t[0] === T_NS_SEPARATOR) {
                    $nsParts[] = $t[1];
                }
            } else {
                if ($t === ';' || $t === '{') {
                    break;
                }
            }
            $i++;
        }
        return trim(implode('', $nsParts), "\\");
    };

    $captureNameAfterToken = function (int &$i) use (&$tokens): string {
        // advance to next T_STRING for name
        while ($i < count($tokens)) {
            $t = $tokens[$i];
            if (is_array($t) && ($t[0] === T_STRING || (defined('T_NAME_QUALIFIED') && $t[0] === T_NAME_QUALIFIED))) {
                return (string)$t[1];
            }
            if ($t === '{' || $t === '(' || $t === ';') {
                return '';
            }
            $i++;
        }
        return '';
    };

    while ($i < $count) {
        $t = $tokens[$i];
        if (is_array($t)) {
            switch ($t[0]) {
                case T_NAMESPACE:
                    $namespace = $captureNamespace($i);
                    break;
                case T_USE:
                    // capture simple use statements on one line
                    $use = '';
                    $j = $i + 1;
                    while ($j < $count) {
                        $tj = $tokens[$j];
                        if (is_array($tj)) {
                            if ($tj[0] === T_STRING || (defined('T_NAME_QUALIFIED') && $tj[0] === T_NAME_QUALIFIED) || $tj[0] === T_NS_SEPARATOR) {
                                $use .= $tj[1];
                            }
                        } else {
                            if ($tj === ';') {
                                break;
                            }
                        }
                        $j++;
                    }
                    if ($use !== '') {
                        $uses[] = $use;
                    }
                    $i = $j;
                    break;
                case T_CLASS:
                    $name = $captureNameAfterToken(++$i);
                    if ($name !== '') {
                        $classes[] = $name;
                    }
                    break;
                case T_INTERFACE:
                    $name = $captureNameAfterToken(++$i);
                    if ($name !== '') {
                        $interfaces[] = $name;
                    }
                    break;
                case T_TRAIT:
                    $name = $captureNameAfterToken(++$i);
                    if ($name !== '') {
                        $traits[] = $name;
                    }
                    break;
                case T_FUNCTION:
                    // skip closures (function without name)
                    $peek = $tokens[$i + 1] ?? null;
                    $name = '';
                    $k = $i + 1;
                    while ($k < $count) {
                        $tk = $tokens[$k];
                        if (is_array($tk) && $tk[0] === T_STRING) {
                            $name = $tk[1];
                            break;
                        }
                        if ($tk === '(' || $tk === '{' || $tk === ';') {
                            break;
                        }
                        $k++;
                    }
                    if ($name !== '') {
                        $functions[] = $name;
                    }
                    break;
                case T_CONST:
                    // attempt to capture simple constant declarations: const NAME = ...;
                    $k = $i + 1;
                    $constName = '';
                    while ($k < $count) {
                        $tk = $tokens[$k];
                        if (is_array($tk) && $tk[0] === T_STRING) {
                            $constName = $tk[1];
                            break;
                        }
                        if ($tk === ';') {
                            break;
                        }
                        $k++;
                    }
                    if ($constName !== '') {
                        $constants[] = $constName;
                    }
                    break;
            }
        }
        $i++;
    }

    return [
        'namespace' => $namespace,
        'uses' => $uses,
        'classes' => $classes,
        'interfaces' => $interfaces,
        'traits' => $traits,
        'functions' => $functions,
        'constants' => $constants,
        'bytes' => strlen($code),
        'lines' => substr_count($code, "\n") + 1,
        'sha1' => sha1($code),
    ];
}

function relativePath(string $baseDir, string $path): string {
    $baseDir = rtrim(str_replace('\\', '/', $baseDir), '/') . '/';
    $path = str_replace('\\', '/', $path);
    if (strpos($path, $baseDir) === 0) {
        return substr($path, strlen($baseDir));
    }
    return $path;
}

function buildDocPhp(string $sourcePath, string $relative, array $analysis): string {
    $generatedAt = date('c');
    $doc = [];
    $doc[] = '/**';
    $doc[] = ' * AI Documentation for: ' . $relative;
    $doc[] = ' * Generated: ' . $generatedAt;
    $doc[] = ' *';
    $doc[] = ' * Обзор:';
    $doc[] = ' * - Пространство имен: ' . ($analysis['namespace'] !== '' ? $analysis['namespace'] : '(нет)');
    $doc[] = ' * - use: ' . (empty($analysis['uses']) ? '(нет)' : implode(', ', $analysis['uses']));
    $doc[] = ' * - Классы: ' . (empty($analysis['classes']) ? '(нет)' : implode(', ', $analysis['classes']));
    $doc[] = ' * - Интерфейсы: ' . (empty($analysis['interfaces']) ? '(нет)' : implode(', ', $analysis['interfaces']));
    $doc[] = ' * - Трейты: ' . (empty($analysis['traits']) ? '(нет)' : implode(', ', $analysis['traits']));
    $doc[] = ' * - Функции: ' . (empty($analysis['functions']) ? '(нет)' : implode(', ', $analysis['functions']));
    $doc[] = ' * - Константы: ' . (empty($analysis['constants']) ? '(нет)' : implode(', ', $analysis['constants']));
    $doc[] = ' * - Размер: ' . $analysis['bytes'] . ' байт; Строк: ' . $analysis['lines'];
    $doc[] = ' * - SHA1: ' . $analysis['sha1'];
    $doc[] = ' *';
    $doc[] = ' * Инструкция:';
    $doc[] = ' * Этот файл можно запускать напрямую. Он не выполняет код из исходного файла';
    $doc[] = ' * и безопасен для выполнения. Содержит сводку структуры для ИИ и людей.';
    $doc[] = ' */';

    $header = implode("\n", $doc);

    // Produce minimal runnable script printing summary
    $php = [];
    $php[] = '<?php';
    $php[] = 'declare(strict_types=1);';
    $php[] = $header;
    $php[] = '';
    $php[] = "echo 'AI doc for ' . " . var_export($relative, true) . " . " . "' generated at ' . " . var_export($generatedAt, true) . " . PHP_EOL;";
    $php[] = 'echo ' . var_export('Namespace: ', true) . ' . ' . var_export((string)($analysis['namespace'] ?? ''), true) . ' . PHP_EOL;';
    $php[] = 'echo ' . var_export('Classes: ', true) . ' . ' . var_export(implode(', ', $analysis['classes']), true) . ' . PHP_EOL;';
    $php[] = 'echo ' . var_export('Interfaces: ', true) . ' . ' . var_export(implode(', ', $analysis['interfaces']), true) . ' . PHP_EOL;';
    $php[] = 'echo ' . var_export('Functions: ', true) . ' . ' . var_export(implode(', ', $analysis['functions']), true) . ' . PHP_EOL;';
    $php[] = 'echo ' . var_export('Constants: ', true) . ' . ' . var_export(implode(', ', $analysis['constants']), true) . ' . PHP_EOL;';
    $php[] = 'echo ' . var_export('Source: ', true) . ' . ' . var_export($sourcePath, true) . ' . PHP_EOL;';
    $php[] = '';
    $php[] = '/* Исходник не исполняется. Для подробного анализа используйте IDE/парсер. */';

    return implode("\n", $php) . "\n";
}

// Entrypoint
$run = function (): int {
    $root = __DIR__;
    $sourceDir = $root . DIRECTORY_SEPARATOR . 'interface';
    $targetDir = $root . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'examples' . DIRECTORY_SEPARATOR . 'interface';

    printLine('Source dir: ' . $sourceDir);
    printLine('Target dir: ' . $targetDir);

    requireDirectory($targetDir);
    $files = findPhpFiles($sourceDir);
    if (empty($files)) {
        printLine('No PHP files found under interface/. Nothing to do.');
        return 0;
    }

    $generated = 0;
    foreach ($files as $sourcePath) {
        $relative = relativePath($sourceDir, $sourcePath);
        $analysis = analyzePhpFile($sourcePath);

        $targetSubDir = dirname($relative);
        $finalDir = rtrim($targetDir . DIRECTORY_SEPARATOR . $targetSubDir, DIRECTORY_SEPARATOR);
        requireDirectory($finalDir);

        $base = pathinfo($sourcePath, PATHINFO_FILENAME);
        $outPath = $finalDir . DIRECTORY_SEPARATOR . $base . '.ai.doc.php';

        $content = buildDocPhp($sourcePath, $relative, $analysis);
        if (file_put_contents($outPath, $content) === false) {
            throw new RuntimeException('Failed to write: ' . $outPath);
        }
        $generated++;
        printLine('Generated: ' . $outPath);
    }

    printLine('Done. Generated files: ' . $generated);
    return 0;
};

$exitCode = $run();
exit($exitCode);


