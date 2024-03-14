<?php
/*
inheritance atau pewarisan sifat merupakan class turunan dari class lainnya,
inheritance dibuat dengan membuat class baru dengan tujuan dihubungkan dengan class yang lain yang di inginkan,
dengan tujuan untuk mendpaatkan informasi atau data dari class yang dihubungkan tersebut.

class yang baru ini disebut dengan sub class atau child class.

parent class = class yang dihubungkan
sub class / child class = class turunan

*/

// parent class 
class manusia
{
    public $nama_saya;

    function beri_nama($saya)
    {
        $this->nama_saya = $saya;
    }

}

// child class
class teman extends manusia
{
    public $nama_teman;

    function beri_nama_teman($teman)
    {
        $this->nama_teman = $teman;
    }
}

// instansiasi class teman
$teman = new teman;

/* function beri_nama() adalah function yang ada pada class manusia, namun dapat kita akses  dari class teman,
 */
$teman->beri_nama("wyxli");
$teman->beri_nama_teman("andreas");

// tampilkan nama
echo "Nama saya adalah $teman->nama_saya <br>";
echo "Nama teman saya adalah $teman->nama_teman";

?>