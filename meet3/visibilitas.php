<!-- 
public: bisa diakses dari mana saja
protected: bisa diakses dari kelas yang sama dan kelas turunan
private: hanya bisa diakses dari kelas yang sama 
-->

<?php
class Profile
{
    public $nama;
    protected $nim;

    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    private function sayHello()
    {
        echo "Halo, nama saya " . $this->nama;
    }
}

class Mahasiswa extends Profile
{
    public function __construct($nama, $nim)
    {
        parent::__construct($nama, $nim);
    }

    public function getNIM()
    {
        return $this->nim;
    }

    public function getSayHello()
    {
        $this->sayHello();
    }
}

$azfa = new Mahasiswa("Yudistira Azfa", "24.12.3274");

echo $azfa->nama;
echo "<br>";

$azfa->nama = "Yudistira Azfa Dani Wibowo";
echo $azfa->nama;
echo "<br>";

echo $azfa->getNIM();
echo "<br>";

$azfa->getSayHello();
