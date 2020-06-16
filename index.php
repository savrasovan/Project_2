<?php

define('ROOT', dirname(__FILE__));
require_once ROOT.'/Classes/ControllerToday.php';

$objControllerToday = new ControllerToday();
//echo $objControllerToday->today;
echo $objControllerToday->getToday();
echo $objControllerToday->getNameToday();

