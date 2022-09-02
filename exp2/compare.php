<?php

$a = $_POST["num1"];
$b = $_POST["num2"];
$c = $_POST["num3"];

if ( $a > $b && $a > $c )
    echo "the largest is  $a";
else if ( $b > $a && $b > $c )
    echo "the largest is  $b";
else if ( $c > $a && $c > $b )
    echo "the largest is  $c";

?>