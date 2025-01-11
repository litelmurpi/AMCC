<?php
class Binatang
{
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function infoBinatang()
    {
        echo "Nama: {$this->nama}, Jenis: {$this->jenis}";
    }
}

class Kucing extends Binatang
{
    public $suara;

    public function __construct($nama, $jenis, $suara)
    {
        parent::__construct($nama, $jenis);
        $this->suara = $suara;
    }

    public function suaraKucing()
    {
        echo "Kucing saya namanya {$this->nama} dan suaranya {$this->suara}";
    }
}

echo "<h1 style='text-align: center;'>Pewarisan</h1>";
$binatang = new Binatang("Kucing", "Mamalia");
$binatang->infoBinatang();
echo "<br>";
echo "<br>";

$kucing = new Kucing("Akmal", "Mamalia", "U II A I U III A");
$kucing->infoBinatang();
echo "<br>";
echo "<br>";

$kucing->suaraKucing();
