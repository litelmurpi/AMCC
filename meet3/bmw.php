<?php

namespace BMW;

require_once "class.php";

use \Kendaraan;

$bmw = new Kendaraan\Mobil("Hitam", "BMW");
echo "<br>";
echo $bmw->warna;
