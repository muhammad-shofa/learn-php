<?php

// cara penulisan class
class mobil
{
    /* property pada php ditulis dengan awalan 'var'
    dan mirip seperti penulisan variable biasa
    */
    var $warna;
    var $merek;
    var $ukuran;

    // cara penulisan method pada class oop
    function maju()
    {
        // isi method
    }
    function berhenti()
    {
        // isi method
    }
}

/* object adalah 'output' dari 'class', dan object dapat menampilkan atau
mengelola isi class */
// contoh penulisan object  
$mobil = new mobil();
// var_dump($mobil);

//
//
//
//
//

// class
class manusia
{
    // property
    var $nama;
    var $alamat;

    // method
    function tampilkan_nama()
    {
        return "Nama saya Muhammad Shofa <br>";
    }

    function alamat()
    {
        return "Alamat saya adalah Desa Jatisari, Kecamatan Senori, Kabupaten Tuban<br>";
    }
}

// instansiasi class 
$manusia = new manusia();
// memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama(); /* pemanggilan method dari object menggunakan tanda ->,
'tampilkan_nama' adalah method */
echo $manusia->alamat();

//
//
//
//
//

// construct dan destruct
// cara penulisan construct
class construct_and_destruct
{

    var $belajar_oop;
    //construct
    function __construct() // (double underscore dan construct)
    // method pertama kali di jalankan bahkan ketika tidak di panggil
    // method construct akan dijalankan otomatis jika class dipanggil
    {
        // isi function construct
        echo "Ini adalah string dari construct<br>";
    }

    // destruct
    function __destruct()
    // method destruct adalah method yang terakhir kali dijalankan
    {
        echo "Ini adalah string dari destruct<br>";
    }

    function belajar_oop()
    {
        return "Saya sedang belajar OOP PHP<br>";
    }
}

// instansiasi class
$construct_destruct = new construct_and_destruct();

// memanggil method
echo $construct_destruct->belajar_oop();

//
//
//
//
//

// enkapsulasi / encapsulation
/* enkapsulasi adalah tahap untuk menentukan pemberian hak akses pada setiap property atau method */
// hak akses default dari property dan method adalah public
/* enkapsulasi pada oop terdiri dari 3 yaitu :
1. Public
2. Private
3. Protected

1. Public : dengan menggunakan 'public' pada property dan method, berarti kita memberikan 'akses'
agar property dan method tersebut bisa diakses dari dalam atau luar 'class'


contoh penggunaan hak akses public
*/

class ex_public
{
    public $text_ex;

    function tampilkan_ex()
    {
        return "Ini adalah contoh dari penggunaan hak akses public<br>";
    }
}

$contoh_public = new ex_public();
echo $contoh_public->tampilkan_ex();

/* 2. Private : hak akses private hanya bisa diakses dari dalam class, dan tidak bisa diakses dari
luar class */

/* ERROR CODE, I WILL FIX AND LEARN AGAIN TOMORROW (BTW NOW IS TUESDAY 5/3/24) */

// contoh penggunaan enkapsulasi private
// class ex_private
// {
//     private $text_ex_private = "penggunaan hak akses private";

//     public function tampilkan_text_private()
//     {
//         return "Ini adalah contoh dari" . $this->$text_ex_private;
//     }
// }

// $contoh_private = new ex_private();
// echo $contoh_private->tampilkan_text_private();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar OOP Pada PHP</title>
</head>

<body>
    <!-- <h1>Belajar OOP pada PHP</h1> -->
</body>

</html>