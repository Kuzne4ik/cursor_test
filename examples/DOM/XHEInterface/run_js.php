<?php

// Scenario: Run JavaScript on a DOM element
// Description: For current page, find a DOM element and run JavaScript code on it
// Classes used: XHECanvas, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Run JavaScript on a canvas element to draw on it

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "canvas.html");

// JavaScript code to draw on canvas
$js = @"
var context = element.getContext('2d');
      var centerX = element.width / 2;
      var centerY = element.height / 2;
      var radius = element.height / 2-10;

	  var i;
	  for (i=0;i<5;i++)
	  {
		context.beginPath();
		context.arc(centerX, centerY, radius-i*8, Math.PI/2, 4 * Math.PI/2, false);
		if (i%2==0)
			context.fillStyle = 'green';
		else if (i%3==0)
			context.fillStyle = 'red';
		else
			context.fillStyle = 'blue';
		context.fill();
		context.lineWidth = 1;
		context.strokeStyle = '#003300';
		context.stroke();
	  }
	  i
";

// Get DOM element <canvas> by number 0
$targetCanvas = DOM::$canvas->get_by_number(0);

// Check that DOM element was found
if ($targetCanvas->inner_number != -1) {
    // Run JavaScript on the canvas element to draw on it
    echo $targetCanvas->run_js($js);
}

// Stop the application
WINDOW::$app->quit();
?>