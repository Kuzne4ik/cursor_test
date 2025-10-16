<?php

// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";

// Путь к файлу init.php
if (!isset($path))
{
    // Путь к файлу init.php для подключения к API XHE
    $path = "../../Templates/init.php";
    // При подключении файла init.php, будет доступен весь функционал классов для работы с API XHE
    require($path);
}

// Перейти на страницу полигона, если ранее не был переход на эту страницу
//WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");


/*


	// Ввести номер ЛС и запустить поиск, затем проверить появление строки в таблице
	$accountNumber = "5500019625";

	// Найти поле ввода по метке "Номер договора"
	$label = DOM::$label->get_by_inner_text("Номер договора", false);
	$inputInterface = null;
	if ($label && $label->is_exist())
	{
		$forId = $label->get_attribute("for");
		if (!empty($forId))
		{
			$inputInterface = DOM::$input->get_by_id($forId, true);
		}
		if (!$inputInterface || !$inputInterface->is_exist())
		{
			// Попытка найти input рядом с меткой
			$inputInterface = $label->get_child_by_xpath(".//input");
			if (!$inputInterface || !$inputInterface->is_exist())
			{
				$parent = $label->get_parent();
				if ($parent && $parent->is_exist())
				{
					$inputInterface = $parent->get_child_by_xpath(".//input");
				}
			}
		}
	}

	if ($inputInterface && $inputInterface->is_exist())
	{
		$inputInterface->focus();
		$inputInterface->set_value($accountNumber);
	}
	else
	{
		WINDOW::$debug->set_tab_content("Консоль", "Не удалось найти поле ввода для метки 'Номер лицевого счета'", true);
	}

	// Найти и нажать кнопку "Поиск"
	$searchBtn = null;
	// Попробовать общий элемент по тексту
	$searchBtn = DOM::$element->get_by_inner_text("Поиск", true);
	if (!$searchBtn || !$searchBtn->is_exist())
	{
		// Попробовать кнопки разных типов
		$searchBtn = DOM::$btn->get_by_inner_text("Поиск", true);
	}
	if (!$searchBtn || !$searchBtn->is_exist())
	{
		$searchBtn = DOM::$button->get_by_value("Поиск", true);
	}
	if ($searchBtn && $searchBtn->is_exist())
	{
		$searchBtn->click(true);
	}
	else
	{
		WINDOW::$debug->set_tab_content("Консоль", "Не найдена кнопка 'Поиск'", true);
	}

	// Ожидать появления строки с номером в таблице
	$found = false;
	for ($i = 0; $i < 60; $i++)
	{
		if (DOM::$tr->is_exist_by_inner_text($accountNumber, false) || DOM::$table->is_exist_by_inner_text($accountNumber, false))
		{
			$found = true;
			break;
		}
		usleep(250000);
	}

	if ($found)
	{
		WINDOW::$debug->set_tab_content("Консоль", "Загрузка произошла. Найден номер: " . $accountNumber, true);
	}
	else
	{
		WINDOW::$debug->set_tab_content("Консоль", "Не удалось обнаружить номер в таблице: " . $accountNumber, true);
	}
*/

// Остановить работу
WINDOW::$app->quit();
?>