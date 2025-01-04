<?php
echo "<h1 style='text-align: center;'>Looping</h1>";

echo "<h1>For Loop</h1>";
echo "<br>";

for ($i = 1; $i < 3; $i++) {
    echo "Pertemuan ke-" . $i;
    echo "<br>";
}

echo "<h1>Foreach Loop</h1>";

$names = ["Kak Ros", "Opah", "Tok Dalang", "Uncle Muthu", "Sepi"];
$fruits = [
    "manis" => ["mangga", "salak"],
    "asam" => ["jeruk", "sirsak"]
];
echo "<br>";
foreach ($fruits as $key => $fruit) {
    var_dump($fruit);
}
echo "<br>";
echo "<br>";

foreach ($names as $key => $name) {
    echo "Index : " . $key;
    echo "<br>";
    echo "Nama : " . $name;
    echo "<br>";
}

//while loop
echo "<h1>While Loop</h1>";

$isNotElligible = true;
$score = 75;

while ($isNotElligible) {
    if ($score >= 80) {
        echo "Selamat Anda Lulus";
        echo "<br>";
        $isNotElligible = false;
    } else {
        echo "Maaf Anda Tidak Lulus";
        echo "<br>";
    }
    $score++;
}
