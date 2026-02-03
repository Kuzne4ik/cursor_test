<?php
// Scenario: Demonstrates database connection, table creation, data insertion, query execution with array results, and disconnection using SQLite
$xhe_host = "127.0.0.1:7010";

if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Connect to SQLite database and execute queries with array results
echo "\n<span >db->" . basename (__FILE__) . "</span>\n";

//$connectionStr = "SERVER=localhost;DATABASE=my_db;USER=root;PASSWORD=big2006fozzy2001;";
//$bBtype = "mysql";

//$connectionStr = "Data Source=DESKTOP-GVVF2H3\SQLEXPRESS;database=test;integrated Security=SSPI;";
//$bBtype = "mssql";
  
// Example 1.0: Create a copy of the database file
$projectFolderPath = WINDOW::$debug->get_cur_script_folder();
$originalDbPath = $projectFolderPath . "/test/test.db";
$dbPath = $projectFolderPath . "/test/test_copy.db";
echo("DB file path: " . $dbPath . "\n");
$connectionStr = "Data Source=$dbPath";
$connectionId = "local";
$tablesStore = "sqlite_master";
$dbType = "sqlite";

// Check exists original DB file
if (file_exists($originalDbPath)) {

	// Copy the original database file to work with a copy
    echo("\n0. Check exists database file: $dbPath");
    if (SYSTEM::$file_os->is_exist($dbPath)) {
		echo("\n0. Database file is exists : $dbPath");
        //echo("\n0. Delete exists database file: $dbPath");
        //SYSTEM::$file_os->delete($dbPath);
    }
    else {
		echo("\n0. Create copy of database file: $originalDbPath -> $dbPath");
		SYSTEM::$file_os->copy($originalDbPath, $dbPath);
		echo("\n0. Created copy of database file: $dbPath");
     }
    echo SYSTEM::$bd->disconnect($connectionId);
}
else {
    echo("\n0. Original database file not found: $dbPath. Quit.");
    // Quit
    WINDOW::$app->quit();
}

// Example 1.1: Connect to database
echo("1. Connect to database: ");
echo SYSTEM::$bd->connect($connectionId, $connectionStr, $dbType);

// Example 1.2: Create table
$tableName = "tutorials_tbl";

// Check if table exists
$checkTableQuery = "SELECT name FROM $tablesStore WHERE type='table' AND name='$tableName'";
$tableExists = SYSTEM::$bd->query($connectionId, $checkTableQuery);

if (!$tableExists) {
    $createTableQuery = "CREATE TABLE $tableName( " .
        "tutorial_id INT, " .
        "tutorial_title VARCHAR(100), " .
        "tutorialAuthor VARCHAR(40) )";
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
$insertQuery1 = "INSERT INTO $tableName " .
    "(tutorial_id,tutorial_title,tutorialAuthor) " . "VALUES " .
    "($tutorialId, '$tutorialTitle' , '$tutorialAuthor' )";
echo("\n3. Insert first record: ");
echo(SYSTEM::$bd->query($connectionId, $insertQuery1));

// Example 1.4: Insert second record
$tutorialTitle = "title2";
$tutorialAuthor = "author2";
$tutorialId = 2;
$insertQuery2 = "INSERT INTO $tableName " .
    "(tutorial_id,tutorial_title,tutorialAuthor) " . "VALUES " .
    "($tutorialId, '$tutorialTitle' , '$tutorialAuthor' )";
echo("\n4. Insert second record: ");
echo(SYSTEM::$bd->query($connectionId, $insertQuery2));

// Example 1.5: Select and display all records as arrays
$selectQuery = "SELECT * FROM $tableName ";
echo("\n5. Select and display all records as arrays: ");
$result = SYSTEM::$bd->query_arrays($connectionId, $selectQuery);
var_export($result);

// Example 1.6: Disconnect from database
echo("\n6. Disconnect from database: ");

// End
echo "\n";

// Quit
WINDOW::$app->quit();
?>