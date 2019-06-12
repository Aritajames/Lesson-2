<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 5/31/19
 * Time: 9:52 AM
 */

//Variables in php
//variables are containers for information

$name = "JAMES ARITA";
echo $name;

$text = "Php is awesome";
echo $text;

$num1 = "100";
$num2 = "50";
echo $num1+$num2;

#How to add html into php

echo "<header>
<h1>Welcome</h1>
</header>";

//php is loosely types
$float_number = 10.23; #float are numbers that have decimal points
$integer_number = 1023;
$text = "Php is awesome";
$isHappy = false; #boolean
$isSad = true; #boolean

//Php variable scope
//variables can be declared anywhere in php
//the scope of a variable can be used/referenced\

#local
#global
#static

$x=5; //global variable to be used anywhere

function myText(){
    global $x;
    $sentence = "Welcome to php class";
    echo "Hello world $x";
}
myText();

#Php data types
//variables store different types of data types
        #1. String (a sequence of characters)
        #2. Integer
        #3. Float
        #4. Boolean
        #5. Array
        #6. Object
        #7. NULL
        #8. Resource

#Php string
$name = "Developer";
echo "<hr>";
var_dump($name);
echo "<br>";
echo strlen($name);

echo "<hr>";
echo str_word_count( "Hello world!");
echo "<hr>";
echo strrev( "Hello world!");

echo "<hr>";
echo str_replace("world", "Kenya", "Hello world!");