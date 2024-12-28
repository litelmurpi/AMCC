<!-- 
Tabel AND
A	B	A AND B
TRUE	TRUE	TRUE
TRUE	FALSE	FALSE
FALSE	TRUE	FALSE
FALSE	FALSE	FALSE

Tabel OR
A	B	A OR B
TRUE	TRUE	TRUE
TRUE	FALSE	TRUE
FALSE	TRUE	TRUE
FALSE	FALSE	FALSE

Tabel NOT
A	NOT A
TRUE	FALSE
FALSE	TRUE 
-->

<!-- https://byjus.com/maths/mathematical-logic/ -->

<?php
$a = true;
$b = false;

//jadi, apakah $a sama dengan $b? jika sama, maka "Ya", jika tidak sama, maka "Tidak"
echo $a && $b ? "Ya" : "Tidak";
echo "<br>";
echo $a || $b ? "Ya" : "Tidak";
echo "<br>";
echo !$a ? "Ya" : "Tidak";
echo "<br>";
echo $a xor $b ? "Ya" : "Tidak";
