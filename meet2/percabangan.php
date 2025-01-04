<?php
echo "<h1 style='text-align: center;'>Percabangan</h1>";
echo "<br>";

// Percabangan

// operator perbandingan 
// >, <, >=, <=, ==, !=, ===, !==

// operator logika
// &&(antara), ||(atau), !(tidak)
echo "<h1>If Else</h1>";
$age = 18;

if ($age >= 18) {
    $ifelse = "Anda boleh mendaftar akun amcc";
} else {
    $ifelse = "Anda belum boleh mendaftar akun amcc";
}

echo 'codingan berjalan';
echo "<br>";

echo $ifelse;

echo "<br>";
echo "<h1>if else if</h1>";

$age = 30;

if ($age <= 5) {
    $elseif = "Masih Balita";
} elseif ($age <= 12) {
    $elseif = "Masih Anak-anak";
} elseif ($age <= 18) {
    $elseif = "Masih Remaja";
} else {
    $elseif = "Sudah Tua";
}

echo $elseif;

//soal
// echo "<br>";
// $age = 10;

// if ($age >= 5 && $age <= 12) {
//     echo "anak-anak";
// } else {
//     echo "tidak anak-anak";
// }

echo "<br>";
echo "<h1>switch case</h1>";
$price = 10000;

switch ($price) {
    case 10000:
        echo "dapat nasi telur";
        break;
    case 2000:
        echo "dapat esteh";
        break;
    case 4000:
        echo "dapat le minerale";
        break;
    default:
        echo "menu tidak tersedia";
        break;
}

echo "<br>";
echo "<h1>ternary operator</h1>";

$value = 81;
$status = "";
$status = $value >= 81 ? "dapat A" : "dapat B";
echo $status;
