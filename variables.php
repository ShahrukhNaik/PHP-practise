<?php 
//single line commnet
#single line comment
/**
 * multi line commnets
 */
#variables
/**
 * - prefix $
 * -start with a letter or underscore
 * -only letters,numbers and uderscores
 * -case sensitive.
 */
#data Types
/**
 * Strings
 * Int
 * floasts
 * Booleans
 * Arrays
 * objects
 * null
 * resource
 */

 $output="Hello world";

 $num1=4;
 $num2=10;
 $sum=$num1+$num2;
 echo "$sum</br>";

 $string1="Hello";
 $string2="World";
 $greeting=$string1.' '.$string2;
 echo "$greeting</br>";

 $string3="They\"re here";
 $float=4.4;
 $bool1=true;

 echo "$string3</br>";

 #creating a constant var
 define("GREETING","Hello Everyone");
 echo GREETING."</br>";

?>