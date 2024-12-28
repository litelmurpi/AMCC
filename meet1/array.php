<?php
//versi 2
$fruits = ["apple", "banana", "cherry", "durian", "elderberry"];

//versi 1
$angka = array(1, 2, 3, 4, 5);

echo "I like " . $fruits[0] . ", " . $fruits[1] . ", " . $fruits[2] . ", " . $fruits[3] . ", and " . $fruits[4] . ".";
echo "<br><br>";
echo "This array contains " . $angka[0] . ", " . $angka[1] . ", " . $angka[2] . ", " . $angka[3] . ", and " . $angka[4] . ".";

//add data to array
$fruits[] = "grape";
echo "<br><br>";
echo "I like " . $fruits[0] . ", " . $fruits[1] . ", " . $fruits[2] . ", " . $fruits[3] . ", " . $fruits[4] . ", and " . $fruits[5] . ".";

// erase data from array
unset($fruits[5]);

//print array
echo "<br><br>";
print_r($fruits);
// or using vardump()
echo "<br><br>";
var_dump($fruits);
