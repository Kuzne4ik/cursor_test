<?php
// Scenario: Create a median image from all images in a specified folder. The median image is created by taking the median pixel value at each position across all images in the folder.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Check if the source folder exists
$sourceFolder = "images/sample";
if (is_dir($sourceFolder)) {

    // Check source images count in source folder
    $srcImagesCount = SYSTEM::$folder->get_all_files($sourceFolder, false, "*.jpg");
    echo "Source folder has $srcImagesCount image files\n";

    // Source images count is  more the 0
    if ($srcImagesCount != 0) {
        // Create output directory if it doesn't exist
        $outputDir = "output";
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0777, true);
            echo "Created output directory: $outputDir\n";
        }

        // Create median image from all images in the folder
        $outputPath = "$outputDir/median_image.jpg";
        echo "Creating median image from folder: $sourceFolder\n";

        $result = DOM::$image->create_median_image_by_folder_of_images($sourceFolder, $outputPath);

        if ($result) {
            echo "Median image created successfully at: $outputPath\n";

            // Check if the file was actually created
            if (file_exists($outputPath)) {
                echo "File size: " . filesize($outputPath) . " bytes\n";
            } else {
                echo "Warning: File was not created despite success return value\n";
            }
        } else {
            echo "Failed to create median image\n";
        }
    }
}
else{
    echo "Source folder does not exist: $sourceFolder\n";
}


// Остановить работу
WINDOW::$app->quit();
?>