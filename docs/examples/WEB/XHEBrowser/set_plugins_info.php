<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_plugins_info function

// First, navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "Navigated to: " . $url;

// Set plugins info for Chrome
$plugins_info = "[{ name: 'Chrome PDF Plugin1111', filename: 'internal-pdf-viewer', description: 'Portable Document Format' },    { name: 'Chrome PDF Viewer', filename: 'mhjfbmdgcfjbbpaeojofohoefgiehjai', description: '' },    { name: 'Native Client', filename: 'internal-nacl-plugin', description: '' }]";
$mime_types = "[{type: 'application/pdf',suffixes: 'pdf',description: '',__pluginName: 'Chrome PDF Viewer11111' },{type: 'application/x-google-chrome-pdf',suffixes: 'pdf',description: 'Portable Document Format',__pluginName: 'Chrome PDF Plugin'},{type: 'application/x-nacl',suffixes: '',description: 'Native Client Executable',enabledPlugin: Plugin,__pluginName: 'Native Client'},{type: 'application/x-pnacl',suffixes: '',description: 'Portable Native Client Executable',__pluginName: 'Native Client'}]";

$result = WEB::$browser->set_plugins_info($plugins_info, $mime_types);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set plugins info";
    echo "\nPlugins: " . $plugins_info;
    echo "\nMIME Types: " . $mime_types;
} else {
    echo "\n\nFailed to set plugins info";
}

// Остановить работу
WINDOW::$app->quit();
?>