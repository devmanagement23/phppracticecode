<?php
/* 
Q.1 Write a PHP script to : - 

a) transform a string all uppercase letters. 
b) transform a string all lowercase letters. 
c) make a string's first character uppercase. 
d) make a string's first character of all the words uppercase. 
 */
$string1 = "Education is a process of wasting half of your life to learn how to waste remaining half of your life.";
echo strtoupper($string1);
echo "<br>";

$string2 = "Education is a process of wasting half of your life to learn how to waste remaining half of your life.";
echo strtolower($string2);
echo "<br>";

$string3 = "Education is a process of wasting half of your life to learn how to waste remaining half of your life.";
echo ucfirst($string3);
echo "<br>";

$string4 = "Education is a process of wasting half of your life to learn how to waste remaining half of your life.";
echo ucwords($string4);
echo "<br>";

$string4 = "Education is a process of wasting half of your life to learn how to waste remaining half of your life.";
echo ucwords($string4);
echo "<br>";

/* 
Q.2 Write a PHP script to split string :
*/

$string5 = ["apple","mango","oranges"];
print_r($string5);
echo "<br>-----------<br>";
$result = print_r($string5,true);
echo $result;


?>