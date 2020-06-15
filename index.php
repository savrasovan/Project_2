<?php

define('ROOT', dirname(__FILE__));
require_once ROOT.'/Classes/ClassWeekday.php';

$object = new Weekday();
echo $object->today;
echo $object->getToday();
echo $object->getNameToday();

