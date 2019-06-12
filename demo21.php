<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/3/19
 * Time: 9:44 AM
 */

#constants are like variables except that once given they cannot be changed
#constants start with a letter or an underscore
#no dollar sign before the constant name
#To define a constant use define()
#syntax
        //define(name, value, case-insensitive)

define("coordinates", 90, false);
echo coordinates;

echo "<br>";

define("height", 5.7, true);
echo height;

echo "<br>";

echo HEIGHT;

echo "<br>";

#Constant Arrays

$fruits = array(["Banana", "Mango", "Apple"]);

define("fruits",["Banana", "Mango", "Apple"]);

echo fruits[0];

echo "<br>";

echo fruits[1];

echo "<br>";

echo fruits[2];

echo "<br>"

?>