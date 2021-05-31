<?php
//Associative Array
//key = value
//Method 1
$a[0] = 10;
$a['C'] = "Computer";
$a['PHP'] = "Web Development";
$a[10] = "Ten";
$a[50] = 50.50;
//Method 2
//Always use this method to create an array
$a = array(
    0 => 10,
    "C" => "Computer",
    "PHP" => "Web Development",
    10 => "Ten",
    50 => 50.50
);

//print value
echo "C for ".$a['C'];
foreach ($a as $value) {
    echo "<br>Value is $value";
}
foreach ($a as $key => $value) {
     echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";   
}
//3 Inbuilt Functions todebug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";



