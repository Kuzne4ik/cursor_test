<?php
// Scenario: Create a new QR code image with specified text and dimensions
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path for the resulting QR code image
$qrCodePath = "images/generated_qr.png";

// Text to encode in the QR code
$qrText = "https://example.com";

// Create QR code with default dimensions (300x300)
echo "Creating QR code with default dimensions (300x300)...\n";
$result1 = DOM::$image->create_qr_code($qrCodePath, $qrText);

if ($result1) {
    echo "QR code created successfully!\n";
    echo "QR code image saved to: " . $qrCodePath . "\n";
    
    // Verify the new image was created
    if (file_exists($qrCodePath)) {
        echo "QR code image file exists and has been saved\n";
        
        // Get file size of the new image
        $fileSize1 = filesize($qrCodePath);
        echo "QR code image file size: " . $fileSize1 . " bytes\n";
    } else {
        echo "Warning: QR code image file was not created\n";
    }
} else {
    echo "Failed to create QR code\n";
}

// Example 2: Create QR code with custom dimensions
$qrCodePath2 = "images/generated_qr_custom.png";
$qrText2 = "Hello, World!";
$width2 = 400;
$height2 = 400;

echo "\nCreating QR code with custom dimensions (" . $width2 . "x" . $height2 . ")...\n";
$result2 = DOM::$image->create_qr_code($qrCodePath2, $qrText2, $width2, $height2);

if ($result2) {
    echo "QR code with custom dimensions created successfully!\n";
    echo "Custom QR code image saved to: " . $qrCodePath2 . "\n";
    
    // Verify the new image was created
    if (file_exists($qrCodePath2)) {
        $fileSize2 = filesize($qrCodePath2);
        echo "Custom QR code image file size: " . $fileSize2 . " bytes\n";
    } else {
        echo "Warning: Custom QR code image file was not created\n";
    }
} else {
    echo "Failed to create QR code with custom dimensions\n";
}

// Example 3: Create QR code with email address
$qrCodePath3 = "images/generated_qr_email.png";
$qrText3 = "mailto:contact@example.com";
$width3 = 250;
$height3 = 250;

echo "\nCreating QR code with email address...\n";
$result3 = DOM::$image->create_qr_code($qrCodePath3, $qrText3, $width3, $height3);

if ($result3) {
    echo "QR code with email address created successfully!\n";
    echo "Email QR code image saved to: " . $qrCodePath3 . "\n";
} else {
    echo "Failed to create QR code with email address\n";
}

// Example 4: Create QR code with WiFi credentials
$qrCodePath4 = "images/generated_qr_wifi.png";
$qrText4 = "WIFI:T:WPA;S:MyNetwork;P:MyPassword;;";
$width4 = 350;
$height4 = 350;

echo "\nCreating QR code with WiFi credentials...\n";
$result4 = DOM::$image->create_qr_code($qrCodePath4, $qrText4, $width4, $height4);

if ($result4) {
    echo "QR code with WiFi credentials created successfully!\n";
    echo "WiFi QR code image saved to: " . $qrCodePath4 . "\n";
} else {
    echo "Failed to create QR code with WiFi credentials\n";
}

// Остановить работу
WINDOW::$app->quit();