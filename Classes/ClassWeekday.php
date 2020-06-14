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

    public function __construct()
    {
        $date = getdate();
        $today = $date["wday"];
        $this->today = $today;
        $arrayToday = [
            "Sunday", 
            "Monday", 
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"];
        //var_dump($arrayToday);
        echo $arrayToday['2'];
    }

    public function setToday($today)
    {
        $this->today = $today;
    }
    
    public function getToday($today) 
    {
        $this->today = $today;
    }
}
