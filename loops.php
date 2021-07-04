<?php
    #while
    // $i=0;
    // while($i<10){
    //     echo $i;
    //     echo "</br>";
    //     $i++;
    // }
    #for
    for($i=0;$i<10;$i++){
        echo $i;
        echo "</br>";
    }
    #foreach
    $names=array('shahrukh'=>'shahnaik3@gmail.com','Shaibaz'=>'shaibaz@gmail.com','Raeed'=>'raeed@gmail.com');
    foreach($names as $name => $mail){
        echo $name.'='.$mail;
        echo "</br>";
    }
    #do while
    $j=0;
    do{
        echo $j;
        $j++;
        echo "</br>";                
    }while($j<5);
    

?>