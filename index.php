<?php

$class = new stdClass();
$class2 = new stdClass();

$class->name = "Anfal";

$class2->name = "Hello";
$class2->message = "World";

foreach ($class2 as $key => $value) {

    $class->$key = $value;

}

var_dump($class);