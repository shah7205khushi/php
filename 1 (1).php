<?php

echo "hello world";
echo "<hr>";

echo "hello world  how are you";

echo "<hr>";

$a=45;
echo "a = $a";

/*
PHP Data Types

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$x = 5;
var_dump($x);

echo "<hr>";

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

echo "<hr>";

$x = 5985;
var_dump($x);

echo "<hr>";

$x = 10.365;
var_dump($x);

echo "<hr>";

$x = true;
var_dump($x);

echo "<hr>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<hr>";

$x = "Hello world!";
$x = null;
var_dump($x);

echo "<hr>";

$x = 5;
var_dump($x);

echo "<br>";

$x = "Hello";
var_dump($x);

echo "<hr>";

$x = 5;
$x = (string) $x;
var_dump($x);
echo "<hr>";


?>