<?php
// Scenario: Extract text blocks from an ODT document, all at once or in chunks

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// начало
echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: Get all text blocks from the ODT file
echo "\n\nExample 1: Getting all text blocks\n";
$filePath = "test/test_style.odt";
$blocks = SYSTEM::$libreOffice->get_text_blocks_odt($filePath);
if ($blocks) {
    $blocksCount = count($blocks);
    echo("\n Получено блоков штук: " . $blocksCount);
    for ($k = 0; $k < $blocksCount; $k++) {
        $text = $blocks[$k];
        echo("\n" . $text);
    }
}
else{
    echo("\nПроизошла ошибка");
}

echo("\n\n");

// Example 2

// Порция текстовых блоков для чтения в одну итерацию
$chunkSize = 5;

$filePath = "test/test_style.odt";

// Сколько порций блоков нужно прочитать
$chunkCount = 10;
echo("\n\nExample 2. Прочитать содержимое файла odt порциями. Всего $chunkCount порций по $chunkSize штук текстовых блоков в порции.");

// Индекс стартовый
$offset = 0;
for ($m = 0; $m < $chunkCount; $m++) {
    echo("\n Порция текстовых блоков #" . ($m  + 1) . ":  $chunkSize штук стартовый индекс $offset");

    $chunkBlocks = SYSTEM::$libreOffice->get_text_blocks_odt($filePath, $offset, $chunkSize);
    if ($chunkBlocks) {
        $blocksCount = count($chunkBlocks);
        echo("\n");
		echo("\n Получено штук: " . $blocksCount);
		echo("\n\n");
        for ($k = 0; $k < $blocksCount; $k++) {
            // Обрезать блок для вывода в консоль
            $text = $chunkBlocks[$k];
            echo("\n" . $text);
        }
    }
    else{
		echo("\nБлоки кончились или произошла ошибка");
		break;
    }
    $offset += $chunkSize;
    echo("\n\n");
}

// Example 3: Read all text blocks in chunks of 50 until the end
echo("\n\nExample 3: Read all text blocks in chunks of 50 until the end\n");
$filePath = "test/test_style.odt";
$chunkSize = 50;
$offset = 0;
$totalBlocksRead = 0;
$chunkNumber = 1;

echo("Reading all text blocks with chunk size: $chunkSize\n");

while (true) {
    echo("\nProcessing chunk #$chunkNumber with offset: $offset\n");
    
    $chunkBlocks = SYSTEM::$libreOffice->get_text_blocks_odt($filePath, $offset, $chunkSize);
    
    if ($chunkBlocks && count($chunkBlocks) > 0) {
        $blocksInChunk = count($chunkBlocks);
        $totalBlocksRead += $blocksInChunk;
        
        echo("Received $blocksInChunk blocks in chunk #$chunkNumber\n");
        echo("Total blocks read so far: $totalBlocksRead\n");
        
        // Display first and last block of the chunk
        if ($blocksInChunk > 0) {
            echo("First block in chunk: " . $chunkBlocks[0] . "\n");
            if ($blocksInChunk > 1) {
                echo("Last block in chunk: " . $chunkBlocks[$blocksInChunk - 1] . "\n");
            }
        }
        
        // If we received fewer blocks than the chunk size, we've reached the end
        if ($blocksInChunk < $chunkSize) {
            echo("\nReached the end of document. Last chunk had $blocksInChunk blocks.\n");
            break;
        }
        
        $offset += $chunkSize;
        $chunkNumber++;
    } else {
        echo("\nNo more blocks found or error occurred.\n");
        break;
    }
    
    echo("\n");
}

echo("\nFinished reading all text blocks. Total blocks read: $totalBlocksRead\n");

// Quit the application
WINDOW::$app->quit();
?>