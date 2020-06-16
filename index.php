<?php

define('ROOT', dirname(__FILE__));
require_once ROOT.'/Classes/ControllerWeekday.php';

$objControllerWeekday = new ControllerWeekday();
echo $objControllerWeekday->today;
echo $objControllerWeekday->getToday();
echo $controllerWeekday->getNameToday();

