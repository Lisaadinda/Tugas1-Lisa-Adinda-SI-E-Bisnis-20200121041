<?php

class mesinsawah {

    public  $nama, $merk, $warna, $berat, $type, $harga;

    public function __construct( $nama = "nama", $merk = "merk", $warna = "warna", $berat = 0, $type = "type", $harga = 0) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->berat = $berat;
        $this->type = $type;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->merk, $this->warna";

    }

    public function getTipemesinsawah() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Traktor {

    public  $merk, $model, $mesin, $rpm, $bahanbakar , $harga;

    public function __construct( $merk = "merk", $model = "model", $mesin = "mesin", $rpm = "rpm", $bahanbakar = "bahanbakar", $harga = 0) {

        $this->merk = $merk;
        $this->model = $model;
        $this->mesin = $mesin;
        $this->rpm = $rpm;
        $this->bahanbakar = $bahanbakar;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->model, $this->mesin, $this->rpm, $this->bahanbakar";

    }

    public function getTipeTraktor() {

        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class Traktorsawah extends mesinsawah  {

    public function getInfomesin() {
        $str = "Traktorsawah    = {$this->nama} , {$this->getlabel()} , {$this->model} , {$this->rpm} , Rp. {$this->harga} ";
        return $str; 
    }

}

class mesin_pengiling extends mesinsawah {

    public function getInfomesin() {
        $str = "mesin_pengiling = {$this->nama} , {$this->getlabel()} , {$this->model} , {$this->rpm} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Mesin_padi extends Traktor {

    public function getInfoTraktor() {
        $str = "Mesin_padi = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Mesin_air extends Traktor {

    public function getInfoMesin() {
        $str = "Mesin_air = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfoMesin {

    public function cetak(Mesinsawah $Mesinsawah){
        $str = "{$Mesinsawah->nama} {$Mesinsawah->getlabel()} , Rp. {$Mesinsawah->harga} ";
        return $str;
    }

}

class CetakInfoTraktor {

    public function cetak(traktor $traktor){
        $str = "{$traktor->merk} {$traktor->getlabel()} (Rp. {$traktor->harga})";
        return $str;
    }

}

$mesinsawah1 = new mesin_pengiling("Kubota", "G1000", "Kubota", "35", "solar", 26000000);
$mesinsawah2 = new mesin_pengiling("Quuick", "G3000", "Quick", "56", "solar", 27500000);
$mesinsawah3 = new Traktorsawah("kubota", "M1000", "kubota", "78", "solar", 2100000);
$mesinsawah4 = new Traktorsawah("quick", "M300", "quick", "90", "solar", 1500000);

$Traktor1 = new Mesin_padi("Acer", "Intel i3", "Silver", "Windows 10", "4 GB", 6000000);
$Traktor2 = new Mesin_padi("Acer", "Intel Pentium", "Hitam", "Windows 7", "2 GB", 4500000);
$Traktor3 = new Mesin_air("Samsung", "Intel i5", "Putih", "Windows 10", "6 GB", 10000000);
$Traktor4 = new Mesin_air("Hp", "Amd 4", "Gold", "Windows 10", "4 GB", 5000000);

echo $mesinsawah1->getInfomesin();
echo "<br>";
echo $mesinsawah2->getInfomesinsawah();
echo "<br>";
echo $mesinsawah3->getInfomesinsawah();
echo "<br>";
echo $mesinsawah4->getInfomesinsawah();
echo "<hr>";
echo $Traktor1->getInfoTraktor();
echo "<br>";
echo $Traktor2->getInfoTraktor();
echo "<br>";
echo $Traktor3->getInfoTraktor();
echo "<br>";
echo $Traktor4->getInfoTraktor();
echo "<hr>";


?>