<?php
// Scenario: Demonstrates database connection, table creation, data insertion, query execution, and disconnection using SQLite
$xhe_host = "127.0.0.1:7010";

if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Connect to SQLite database and execute queries
echo "\n<font color=blue>db->" . basename (__FILE__) . "</font>\n";

// MySQL connection
$connectionStr = "SERVER=localhost;Port=3306;DATABASE=my_db;Uid=root;PASSWORD=password1;";
$dbName = "my_db";
$tablesStore = "INFORMATION_SCHEMA.TABLES";
$dbType = "mysql";
$connectionId = "local";

// Init MySQL docker container manually by steps:
// Step 1:  Create file `docker-compose.yml` with content:
//
// version: '3.8'
// services:
//  mysql:
//    image: mysql:8.0
//    container_name: mysql_my_db
//    environment:
//      MYSQL_ROOT_PASSWORD: password1
//      MYSQL_DATABASE: my_db
//    ports:
//      - "3306:3306"
//    restart: unless-stopped
//
// Step 2: Run command in terminal:
// $ docker-compose up -d

// Example 1.1: Connect to database
echo("1. Connect to database: ");
echo SYSTEM::$bd->connect($connectionId, $connectionStr, $dbType);

// Example 1.2: Create table
$tableName = "tutorials_tbl";
$checkTableQuery = "SELECT COUNT(*) FROM $tablesStore WHERE TABLE_SCHEMA='$dbName' AND TABLE_NAME='$tableName' LIMIT 1";
$tableExists = SYSTEM::$bd->query($connectionId, $checkTableQuery);
if ($tableExists){
    $tableExists = json_decode($tableExists);
    if ($tableExists && is_array($tableExists) && count($tableExists) > 0 )
    {
        $tableExists = $tableExists[0];
        if ($tableExists && is_array($tableExists) && count($tableExists) > 0 ){
            $tableExists = $tableExists[0];
        }
    }
}

if (!$tableExists) {
    $createTableQuery = "CREATE TABLE $tableName( ".
            "tutorial_id INT, ".
            "tutorial_title VARCHAR(100), ".
            "tutorial_author VARCHAR(40) )";
    echo("\n2. Create table: ");
    echo SYSTEM::$bd->query($connectionId, $createTableQuery);
} else {
    echo("\n2. Table already exists, skipping creation: ");
    echo "Table '$tableName' exists";
}

// Example 1.3: Insert first record
$tutorialTitle = "title1";
$tutorialAuthor = "author1";
$tutorialId = 1;
$insertQuery1 = "INSERT INTO $tableName ".
               "(tutorial_id,tutorial_title,tutorial_author) "."VALUES ".
               "('$tutorialId', '$tutorialTitle' , '$tutorialAuthor' )";
echo("\n3. Insert first record: ");
echo(SYSTEM::$bd->query($connectionId, $insertQuery1));

// Example 1.4: Insert second record
$tutorialTitle = "title2";
$tutorialAuthor = "author2";
$tutorialId = 2;
$insertQuery2 = "INSERT INTO $tableName ".
               "(tutorial_id,tutorial_title,tutorial_author) "."VALUES ".
               "('$tutorialId', '$tutorialTitle' , '$tutorialAuthor' )";
echo("\n4. Insert second record: ");
echo(SYSTEM::$bd->query($connectionId, $insertQuery2));

// Example 1.5: Select and display all records
$selectQuery = "SELECT * FROM $tableName ";
echo("\n5. Select and display all records: ");
echo(SYSTEM::$bd->query($connectionId, $selectQuery));

// Example 1.6: Disconnect from database
echo("\n6. Disconnect from database: ");
echo SYSTEM::$bd->disconnect($connectionId);

// End
echo "\n";

// Quit
WINDOW::$app->quit();
?>