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
    <!-- JQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#button").click(function () {
                $(".box").toggle();
            })
        })
    </script>
</body>

</html>