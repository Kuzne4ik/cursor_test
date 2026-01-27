<?php
// Scenario: Recognize digits from audio files and solve CAPTCHA with audio challenge

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>sound->" . basename (__FILE__) . "</font>\n";

// Example 1: Recognize file with English digits (0-9)
// Input data
$audioFile1 = "test/mp3/4196092774.mp3";

echo("\n\nExample 1. Recognize file with English digits (0-9): ");
$digits1 = SYSTEM::$sound->recognize_file_with_digits($audioFile1);

if ($digits1) {
    echo("true: " . $digits1 . "\n");
} else {
    echo("false\n");
}

// Example 2: Recognize another file with English digits (0-9)
// Input data
$audioFile2 = "test/mp3/80692.mp3";

echo("\n\nExample 2. Recognize another file with English digits (0-9): ");
$digits2 = SYSTEM::$sound->recognize_file_with_digits($audioFile2);

if ($digits2) {
    echo("true: " . $digits2 . "\n");
} else {
    echo("false\n");
}

// Example 3: Download file with Recaptcha V2
echo("\n\nExample 3. Download file with Recaptcha V2\n");
echo("<center><h5>Download file with Recaptcha V2</h5></center>\n");

// Example 4: Navigate to polygon
// Input data
$recaptchaUrl = "https://www.google.com/recaptcha/api2/demo";

echo("\n\nExample 4. Navigate to polygon: ");
$navigateResult = WEB::$browser->navigate($recaptchaUrl);

if ($navigateResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 5: Click "I'm not a robot" checkbox
echo("\n\nExample 5. Click 'I'm not a robot' checkbox: ");
while (!DOM::$div->get_by_attribute("class", "recaptcha-checkbox-checkmark", false, 0)->is_visibled()) {
    sleep(1);
}

$clickResult = DOM::$div->get_by_attribute("class", "recaptcha-checkbox-checkmark", false, 0)->send_mouse_click(4, 4);

if ($clickResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 6: Click audio CAPTCHA option
echo("\n\nExample 6. Click audio CAPTCHA option: ");
while (!DOM::$button->get_by_name("recaptcha-audio-button", 1)->is_visibled()) {
    DOM::$div->get_by_attribute("class", "recaptcha-checkbox-checkmark", false, 0)->send_mouse_click(4, 4);
    sleep(1);
}

$audioClickResult = DOM::$button->get_by_name("recaptcha-audio-button", 1)->send_mouse_click(5, 5);

if ($audioClickResult) {
    echo("true\n");
} else {
    echo("false\n");
}

sleep(4);

// Example 7: Click download
echo("\n\nExample 7. Click download: ");
WINDOW::$window->execute_download_file();
WEB::$browser->set_default_download("download");
WEB::$browser->enable_download_file_dialog(true);
SYSTEM::$file_os->delete("download/audio.mp3");

while (!DOM::$anchor->get_by_href("api2/payload/audio.mp3", false, 1)->is_visibled()) {
    DOM::$button->get_by_name("recaptcha-audio-button", 1)->send_mouse_click(5, 5);
    sleep(1);
}

$downloadClickResult = DOM::$anchor->get_by_href("api2/payload/audio.mp3", false, 1)->send_mouse_click(5, 5);

if ($downloadClickResult) {
    echo("true\n");
} else {
    echo("false\n");
}

sleep(3);

// Wait for download to complete
while (!SYSTEM::$file_os->is_exist("download/audio.mp3")) {
    sleep(1);
}

// Example 8: Recognize downloaded audio file with English digits (0-9)
// Input data
$downloadedFile = "download/audio.mp3";

echo("\n\nExample 8. Recognize downloaded audio file with English digits (0-9): ");
$digits = SYSTEM::$sound->recognize_file_with_digits($downloadedFile);

sleep(1);

if ($digits == false) {
    echo("false: No audio file in correct format. (Possibly requesting audio file too frequently. Try again later.)\n");
    WINDOW::$app->quit();
} else {
    echo("true: " . $digits . "\n");
}

// Example 9: Enter the result
echo("\n\nExample 9. Enter the result: ");
WEB::$browser->set_active_browser(0);
$inputResult = DOM::$input->get_by_name("audio-response", 1)->send_input($digits);

if ($inputResult) {
    echo("true\n");
} else {
    echo("false\n");
}

DOM::$button->get_by_id("recaptcha-verify-button", false, 1)->send_mouse_click();

// Quit the application
WINDOW::$app->quit();
?>