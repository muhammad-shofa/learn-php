<?php
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


?>