<?php
echo "<h1 style='text-align: center;'>Function</h1>";

function sayHello($name)
{
    echo "Hello " . $name;
    echo "<br>";
}

function sayHello2($name)
{
    return "Halooo " . $name;
}

$sayHello = sayHello2("Yudistira Azfa");
echo $sayHello;
echo "<br>";

sayHello("Yudistira Azfa");
sayHello("Arya Robby");
echo "<br>";
echo "<br>";

//built-in function
echo "<h1>Built-in Function</h1>";
$names = ["Kak Ros", "Opah", "Tok Dalang", "Uncle Muthu", "Sepi"];
var_dump($names);
array_push($names, "Raju");
echo "<br>";
var_dump($names);
echo "<br>";

echo "Cek Variabel : " . !isset($names);
print_r(isset($names));
