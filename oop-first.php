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