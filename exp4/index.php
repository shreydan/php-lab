<!--take user input till user wants and count neg,pos,zero numbers -->
<!--
THIS DOESNT WORK ON XAMPP *sad php noises*
-->
<?php

$neg = 0;
$pos = 0;
$zero = 0;

while (true) {
    $digit = (int)readline("enter a digit: ");
    if ($digit < 0) $neg++;
    else if ($digit > 0) $pos++;
    else $zero++;
    $want = readline("Want to continue? y/n: ");
    if ($want == "Y" || $want == 'y') continue;
    else    break;
}
echo "\n\nPositive: $pos, Negative: $neg, Zeroes: $zero";
?>