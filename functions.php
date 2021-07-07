<?php
    #function block of code reapeatedly called..
    /**
     * camel case - myFunction()
     * lower case - my_function()
     * pascal case - MyFunction() //generally used to define classes..
     */
    #creating functions..
    function simpleFunction($name = 'World'){
        echo "Hello $name";
    }
    #calling function.
    // simpleFunction("Shahrukh");
    #add by val
    $mynum=5;
    function addfive($num){
        $num+=5;
    }
    addfive($mynum);
    echo "Call by value </br>";
    echo "Value: $mynum </br>";
    function addten(&$num) 
    {
        # code...
        $num+=10;
    }
    addten($mynum);
    echo "Call by Reference </br>";
    echo "Value: $mynum </br>";
?>