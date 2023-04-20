<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            border: 1px solid black;
            margin: 1%;
            padding: 1%;
            flex-basis: 20vw;
            text-align: center;
            box-shadow: 1% black;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        for ($j = 1; $j <= 9; $j++) {
            echo "<div class=\"item\">";
            for ($i = 1; $i <= 9; $i++) {
                echo "$j x $i = ";
                echo $j * $i;
                echo "<br>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>