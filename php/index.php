<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myName = "Binh";
        echo "<h1> My name is" .$myName. "<h1>";
        echo "<p> Echo is a php command to write any text in this html content </p>";
        if ($myName == "Binh")
            echo "<div><article><header><p>Hello Binh</p></header></article></div>";
        else
            echo "<div style="."\""."background-color:red"."\"".">Hello there, but you are not Binh </div>";
    ?>
</body>
</html>