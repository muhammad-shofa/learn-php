<?php
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