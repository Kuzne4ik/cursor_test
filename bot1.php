<?php
$xhe_host = "127.0.0.1:7010";

if (!isset($path))
{
    $path = "../../Templates/init.php";
    require($path);
}

require_once("../../Templates/MemoryLog.php");

$memLog = new MemoryLog();
$memLogFilePath = __DIR__ . '.memory/memory.log';
$memLog->updateMemoryLog($memLogFilePath);

/*
function get_all_hrefs()
{
    WEB::$browser->navigate("https://rpa-bot.ru/");
    $hrefs = DOM::$anchor->get_all("\n")->get_href();

    foreach ($hrefs as $href){
        echo ($href . PHP_EOL);
    }
}

get_all_hrefs();
*/

/*
//echo("<hr><font color=blue>anchor->get_all_hrefs.php</font><hr>");

// Переход на страницу полигона
echo ("\n\n0. Перейдем на полигон: ");
$test_url = TEST_SITE_FILES_LOCAL_FOLDER_URL . "anchor.html";
// Вывод
echo (WEB::$browser->navigate($test_url));

// --- Позитивные проверки ---
echo("\n--- Позитивные проверки ---\n");

// 1. Все href на странице (основной документ)
echo("\n1. Все href на anchor.html (основной документ):\n");
$res = DOM::$anchor->get_all_hrefs("<br>", "-1");
echo($res . "\n");

// 2. Все href во фрейме 0
echo("\n2. Все href во фрейме 0:\n");
$res = DOM::$anchor->get_all_hrefs("<br>", "0");
echo($res . "\n");

// 3. Все href во фрейме 1
echo("\n3. Все href во фрейме 1:\n");
$res = DOM::$anchor->get_all_hrefs("<br>", "1");
echo($res . "\n");

// 4. Все href во фрейме 2
echo("\n4. Все href во фрейме 2:\n");
$res = DOM::$anchor->get_all_hrefs("<br>", "2");
echo($res . "\n");

// 5. Проверка другого разделителя (\n)
echo("\n5. Все href с разделителем \\n:\n");
$res = DOM::$anchor->get_all_hrefs("\n", "-1");
echo($res . "\n");

// --- Негативные проверки ---
echo("\n--- Негативные проверки ---\n");

try
{
    // 1. Несуществующий фрейм
    echo("\n1. Несуществующий фрейм (номер 99):\n");
    $res = DOM::$anchor->get_all_hrefs("<br>", "99");
    echo($res . "\n");
}
catch (Throwable $e)
{
    echo("Исключение: " . htmlspecialchars($e->getMessage()) . "\n");
}

try
{
    // 2. Пустой разделитель
    echo("\n2. Пустой разделитель:\n");
    $res = DOM::$anchor->get_all_hrefs("", "-1");
    echo($res . "\n");
}
catch (Throwable $e)
{
    echo("Исключение: " . htmlspecialchars($e->getMessage()) . "\n");
}

try
{
    // 3. Некорректный тип параметра (число вместо строки)
    echo("\n3. Некорректный тип параметра (число вместо строки):\n");
    $res = DOM::$anchor->get_all_hrefs(123, "-1");
    echo($res . "\n");
}
catch (Throwable $e)
{
    echo("Исключение: " . htmlspecialchars($e->getMessage()) . "\n");
}

echo("\nТест завершён.\n");
*/
WINDOW::$app->quit();
?>