<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $semester;

    public function __construct() {
        echo "Mahasiswa baru telah di buat ! <br>";
    }
}

$wahyu = new Mahasiswa();
$wahyu->nama = "Wahyu Ahmad Dhani";

$salman = new Mahasiswa();
$salman->nama = "Salman Maulana Uye";

echo $wahyu -> nama . "<br>";
echo $salman -> nama;
