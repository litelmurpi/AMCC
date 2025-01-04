<?php
$students = [
    ["name" => "Yudistira Azfa", "nim" => "3274"],
    ["name" => "Arya Robby", "nim" => "3275"],
];

//show both name and nim
echo $students[0]["name"] . " " . $students[0]["nim"];
echo "<br>";
echo $students[1]["name"] . " " . $students[1]["nim"];
echo "<br>";
echo "<br>";

$books = [
    ["Expert PHP with Laravel", 2020, "Yudistira Azfa"],
    ["Figma for Beginner", 2020, "Adam Siswantoro"],
    ["Python for Beginner", 2021, "Paulus Pebrianto"],
];

echo " The book " . $books[0][0] . " was written by " . $books[0][2] . " in " . $books[0][1];
echo "<br>";
echo "<br>";
echo " The book " . $books[1][0] . " was written by " . $books[1][2] . " in " . $books[1][1];
echo "<br>";
echo "<br>";
echo " The book " . $books[2][0] . " was written by " . $books[2][2] . " in " . $books[2][1];
