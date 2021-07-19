<?php
    $loggedin=false;

    // if($loggedin){
    //     echo 'you are logged in';
    // }else{
    //     echo 'you are not logged in';
    // }
    // echo ($loggedin)?"you are logged in ": "you are not logged in";

    // $isregistered=($loggedin==true)?true:false;
    // echo $isregistered;

    $score=12;
    $age=7;

    echo 'your score is:'.($score>10 ?($age>10?'average':'Exceptional'):($age>10?'horrible':'average'));


?>