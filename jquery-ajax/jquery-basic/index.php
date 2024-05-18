<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1>Belajar JQuery</h1>
    <button id="button">Button</button>
    <div class="box"></div>
    <br>
    <br>
    <h2>Callback Function</h2>
    <button id="button-callback">Button Callback</button>
    <div class="box-1"></div>
    <div class="box-callback">
        <p>Callback Function</p>
    </div>
    <br>
    <br>
    <h2>Take Value using text()</h2>
    <button id="button-take-value">Take Value</button>
    <p id="text">Just for test</p>
    <p id="demo-text">Tampilkan di sini : </p>
    <!-- JQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#button").click(function () {
                $(".box").toggle();
            })
        });

        $(document).ready(function () {
            $("#button-callback").click(function () {
                $(".box-1").fadeIn(800, function () {
                    $(".box-callback").show();
                })
            })
        });

        $(document).ready(function () {
            $("#button-take-value").click(function () {
                let text = $("#text").text();
                alert(text);
            })
        });
    </script>
</body>

</html>