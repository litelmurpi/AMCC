<?php

namespace Kendaraan;

class Mobil
{
    public $merk;
    public $warna;

    public function __construct($warnaMobil, $merkMobil)
    {
        $this->warna = $warnaMobil;
        $this->merk = $merkMobil;
    }

    public function gas()
    {
        echo "Mobil Maju";
    }

    public function rem()
    {
        echo "Mobil Berhenti";
    }
}

$mobil = new Mobil("Hitam", "Toyota");

// $mobil->warna = "Biru";
// $mobil->merk = "BMW";

echo "Mobil saya warna " . $mobil->warna;
echo "<br>";
echo "Mobil saya merk " . $mobil->merk;
echo "<br>";
$mobil->gas();
echo "<br>";
$mobil->rem();
