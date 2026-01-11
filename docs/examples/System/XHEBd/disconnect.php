<?php
// Scenario: Demonstrates database connection, table creation, data insertion, and disconnection using MySQL
$xhe_host = "127.0.0.1:7010";

if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Connect to MySQL database
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

// Example 1.6: Disconnect from database
echo("\n6. Disconnect from database: ");
echo SYSTEM::$bd->disconnect($connectionId);

// End
echo "\n";

// Quit
WINDOW::$app->quit();
?>