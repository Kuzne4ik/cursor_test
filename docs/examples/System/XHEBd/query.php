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

// MSSQL connection
$connectionMasterStr = "SERVER=localhost,1433;User Id=sa;Database=master;Password=MyStr0ng@Passw0rd!;TrustServerCertificate=True;";
$connectionStr = "SERVER=localhost,1433;User Id=sa;Database=my_db;Password=MyStr0ng@Passw0rd!;TrustServerCertificate=True;";
$dbName = "my_db";
$tablesStore = "INFORMATION_SCHEMA.TABLES";
$dbType = "mssql";
$connectionId = "local";

// Init MSSQL docker container manually by steps:
// Step 1:  Create file `docker-compose.yml` with content:
// # docker-compose.yml
// version: '3.8'
//
// services:
//  mssql:
//    image: mcr.microsoft.com/mssql/server:2022-latest
//    container_name: mssql_my_db
//    environment:
//      ACCEPT_EULA: "Y"
//      SA_PASSWORD: "MyStr0ng@Passw0rd!"
//      MSSQL_PID: Express
//    ports:
//      - "1433:1433"
//    volumes:
//      - mssql_data:/var/opt/mssql
//    restart: unless-stopped
//
// volumes:
//  mssql_data:

// Step 2: Run command in terminal:
// $ docker-compose up -d



// 0. Connect to database 'master' to check exists test DB. If DB is not exists create one
echo("\n0. Connect to database 'master': ");
echo SYSTEM::$bd->connect('master', $connectionMasterStr, $dbType);

echo("\n0. Check database exists '$dbName': ");
$getDbByName = SYSTEM::$bd->query('master', "SELECT name FROM sys.databases WHERE name = '$dbName';");
if (str_contains($getDbByName , $dbName)){
    echo ("\nDB '$dbName' exists");
}
else{
    echo ("\nDB '$dbName' is not exists. Create DB: ");
    echo SYSTEM::$bd->query('master', "CREATE DATABASE $dbName;");
}

echo("\n0. Disconnect to database 'master': ");
echo SYSTEM::$bd->disconnect('master');


echo("\n1. Connect to database: ");
echo SYSTEM::$bd->connect($connectionId, $connectionMasterStr, $dbType);

// Example 1.2: Create table
$tableName = "tutorials_tbl";

$checkTableQuery = "SELECT COUNT(*) FROM $tablesStore WHERE TABLE_SCHEMA='dbo' AND TABLE_NAME='$tableName'";
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