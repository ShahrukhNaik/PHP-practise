<?php
    #substr()
    #Returns a portion of a string
    // $output=substr('Hellfo',1,3);
    // echo $output;

    #strlen()
    #retruns length of a string
    // $output=strlen('Hello World');
    // echo $output;

    #strpos()
    #finds the position of the first occurenece of a sub string
    // $output=strpos('Hello World','o');
    // echo $output;

    #strrpos()
    #finds the position of the last occurenece of a sub string
    // $output=strrpos('Hello World','o');
    // echo $output;

    #trim()
    #strips whitespaces..
    // $text='Hello world        ';
    // var_dump($text);

    // $trimmed=trim($text);
    // var_dump($trimmed);

    #strtoupper
    #makes everthing uppercase
    // $output=strtoupper('hello world');
    // echo $output;

     #strtolower
    #makes everthing uppercase
    // $output=strtolower("HELLO WORLD");
    // echo $output;

    #ucwords()
    #captialize every initial word
    // $output=ucwords('hello world');
    // echo $output;

    #str_replace()
    #Replace all the words
    // $output="Hello World";
    // $output=str_replace("World",'Every One',$output);
    // echo $output;

    #is_string()
    #check if String
    // $values=array(true,false,null,'abc',33,'33');
    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo $value."<br>";
    //     }
    // }
    #gzcompress()
    #compress a stirng
        $str='Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam optio voluptate ab, debitis quo neque quibusdam dicta amet odio vitae fugit voluptatem excepturi cupiditate ut iure explicabo cumque soluta ipsa.';
        $compress=gzcompress($str);
        echo $compress;
#gzuncompress()
    #uncompress a stirng
        $uncompress=gzuncompress($compress);
        echo "<\br>";
        echo $uncompress;
?>