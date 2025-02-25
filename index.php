<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hlavný nadpis</h1>
    <?php
    var_dump($meno);
    $farby = array("červená", "modrá", "zelená");
    echo $farby[0];
    echo ("<br>");
    foreach ($farby as $farba) {
        echo "Farba:" . $farba . "<br>";
    }
    ?>
</body>

</html>