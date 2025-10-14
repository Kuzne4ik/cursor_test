<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "canvas.html")."<br>";

// JS
$js =@"
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

// 2 
echo "2. Отрисуем картинку на элменте по номеру (нарисуем на холсте) : ";
echo $canvas->get_by_number(0)->run_js($js)."\n";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>