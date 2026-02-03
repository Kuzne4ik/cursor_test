<?php
// Scenario: Get various information about a PDF file including metadata, page count, and properties

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Input data
$filePath = "test/test.pdf";

// Example 1: Get PDF title
echo("\n\nExample 1. Get PDF title: ");
$title = SYSTEM::$pdffile->get_info($filePath, "title");
echo($title);

// Example 2: Get PDF subject
echo("\n\nExample 2. Get PDF subject: ");
$subject = SYSTEM::$pdffile->get_info($filePath, "subject");
echo($subject);

// Example 3: Get PDF author
echo("\n\nExample 3. Get PDF author: ");
$author = SYSTEM::$pdffile->get_info($filePath, "author");
echo($author);

// Example 4: Get PDF producer
echo("\n\nExample 4. Get PDF producer: ");
$producer = SYSTEM::$pdffile->get_info($filePath, "producer");
echo($producer);

// Example 5: Get PDF creator
echo("\n\nExample 5. Get PDF creator: ");
$creator = SYSTEM::$pdffile->get_info($filePath, "creator");
echo($creator);

// Example 6: Get PDF creation date
echo("\n\nExample 6. Get PDF creation date: ");
$creationDate = SYSTEM::$pdffile->get_info($filePath, "creation_date");
echo($creationDate);

// Example 7: Get PDF modification date
echo("\n\nExample 7. Get PDF modification date: ");
$modificationDate = SYSTEM::$pdffile->get_info($filePath, "modification_date");
echo($modificationDate);

// Example 8: Get PDF keywords
echo("\n\nExample 8. Get PDF keywords: ");
$keywords = SYSTEM::$pdffile->get_info($filePath, "keywords");
echo($keywords);

// Example 9: Get PDF pages count
echo("\n\nExample 9. Get PDF pages count: ");
$pages = SYSTEM::$pdffile->get_info($filePath, "pages");
echo($pages);

// Example 10: Get number of additional info keys
echo("\n\nExample 10. Get number of additional info keys: ");
$count = SYSTEM::$pdffile->get_info($filePath, "count");
echo($count);

// Example 11: Check if PDF is readonly
echo("\n\nExample 11. Check if PDF is readonly: ");
$isReadonly = SYSTEM::$pdffile->get_info($filePath, "is_readonly");
echo($isReadonly);

// Quit the application
WINDOW::$app->quit();
?>