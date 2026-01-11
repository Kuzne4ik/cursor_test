<?php
// Scenario: Recognize QR code from an image file
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Create QR code with email address
$qrCodePath = "images/generated_qr_email.png";
$qrText = "mailto:contact@example.com";
$width = 250;
$height = 250;

echo "\nCreating QR code with email address...\n";
$result = DOM::$image->create_qr_code($qrCodePath, $qrText, $width, $height);

if ($result) {
    echo "QR code with email address created successfully!\n";
    echo "Email QR code image saved to: " . $qrCodePath . "\n";
} else {
    echo "Failed to create QR code with email address\n";
}

// Example 1: Recognize the created QR code to verify it works
if (file_exists($qrCodePath)) {
    echo "\nVerifying created QR code by recognizing it...\n";
    $recognizedText = DOM::$image->recognize_qr_code($qrCodePath);

    if ($recognizedText) {
        echo "QR code recognized successfully!\n";
        echo "Recognized text: " . $recognizedText . "\n";

        // Check if recognized text matches original
        if ($recognizedText === $qrText) {
            echo "Recognized text matches original text: " . $qrText . "\n";
        } else {
            echo "Warning: Recognized text does not match original text\n";
            echo "Original: " . $qrText . "\n";
            echo "Recognized: " . $recognizedText . "\n";
        }
    } else {
        echo "Failed to recognize created QR code\n";
    }
}

// Остановить работу
WINDOW::$app->quit();