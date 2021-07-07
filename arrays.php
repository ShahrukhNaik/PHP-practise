<?php
    #arrays -vars that hold multipule values..
    /**
     * Indexed
     * Associative
     * multi-dimensional
     */
    #indexed
    $people=array('kevin','jim','jhon');
    $ids=array(23,55,12);
    $cars=['honda','toyota','ford'];
    $cars[3]='chevy';
    $cars[]='BMW';

    // echo count($cars);
    // echo $ids[2];
    // echo $cars[4];
    // print_r($cars);
    // var_dump($cars);

    #assosiative array
    $people=array('b'=>35,'j'=>2);
    // echo $people['b'];
    $ids=array(1=>'s',2=>'d');
    // echo $ids[1];
    // var_dump($ids);

    #mulit-dimensional array
    $cars=array(
        array('honda',23,12),
        array('hero',22,12),
        array('suzuki',21,12)
    );
    // var_dump($cars);
    echo $cars[0][1];
    ?>