<?php
// Scenario: Send keyboard input event to DOM element by inner HTML
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен !!!
if (!isset($path)){
$path = "../../../Templates/init.php";
  require($path);
}

// начало
echo "\n<span>textarea->".basename (__FILE__)."</span>\n";

// 1
echo("1. Navigate to test page: ");
echo(WEB::$browser->navigate(TEST_POLYGON_URL . "textarea.html") . "\n");

// 2
echo("\n2. Send keyboard input to textarea by inner HTML 'а вот и текст':\n\n");
$innerHtmlText = "а вот и текст";
echo("Get textarea by inner HTML: '$innerHtmlText'\n");
echo(DOM::$textarea->send_keyboard_input_by_inner_html($innerHtmlText,true,"\n")."\n");

// 3
echo("\n3. Send keyboard input to textarea by inner HTML 'тут вот текст а может и нет' in frame 0:\n\n");
$innerHtmlTextFrame = "тут вот текст а может и нет";
$frameNumber = 0;
echo("Get textarea by inner HTML: '$innerHtmlTextFrame' in frame $frameNumber\n");
echo(DOM::$textarea->send_keyboard_input_by_inner_html($innerHtmlTextFrame,true,"\n",$frameNumber)."\n");

// Quit
WINDOW::$app->quit();
?>