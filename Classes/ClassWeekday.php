<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassWeekday
 *
 * @author Андрей
 */
class Weekday
{
    public $today;
    public $arrayToday;
    public $nameToday;

    public function __construct()
    {
        $date = getdate();
        $today = $date["wday"];
        $arrayToday = [
            "Sunday", 
            "Monday", 
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"];
        $nameToday = $arrayToday[$today];
        
        $this->today = $today;
        $this->arrayToday = $arrayToday;
        $this->nameToday = $nameToday;
        //var_dump($arrayToday);
    }

    public function setToday($today)
    {
        $this->today = $today;
    }
    
    public function getToday() 
    {
        return $this->today;
    }
    public function getNameToday() {
        return $this->nameToday;
    }
}
