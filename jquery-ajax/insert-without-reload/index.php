<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" class="form-user" action="action.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><a class="tombol-simpan">Simpan</a></td>
            </tr>
        </table>
    </form>

    <div class="tampildata"></div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script>
        $(document).ready(function () {
            $(".tombol-simpan").click(function () {
                var data = $('.form-user').serialize();
                $.ajax({
                    type: 'POST',
                    url: "action.php",
                    data: data,
                    success: function () {
                        $('.tampildata').load("show.php");
                    }
                });
            });
        });
    </script>
</body>

</html>