<?php
    // echo date('d'); //Day
    // echo date('m'); //Month
    // echo date('Y'); //Year
    // echo date('l'); //Day of the week

    // echo date('Y/m/d');
    // echo date('m-d-Y');   
    
    // echo date('h'); //hour 
    // echo date('i');//minutes
    // echo date('s');//seconds
    // echo date('a');//AM OR PM

    //set Time zone..
    // date_default_timezone_set('America/New_York');
    // echo date('h:i:sa');

    /**
     * Unix timestamp is a long integer containing the number of seconds between 
     * the unix epoch 
     */
    $timestamp=mktime(10,14,54,9,10,1984);

    echo date('m/d/Y h:i:sa',$timestamp);

    $timestamp2 =strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');

    echo date('m/d/Y h:i:sa',$timestamp2);
    echo date('m/d/Y h:i:sa',$timestamp3);
?>