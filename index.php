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
        $data = array(
            "Peter" => 25,
            "Jana" => 30,
            "Marek" => 20
        );
        //foreach($data as $name => $age){
        //echo
        //}
        //uloha//
        $pole = ["Jablko", "Hruška", "Banán", "Čerešňa", "Pomaranč"];


        $pocetPrvkov = count($pole);


        for ($i = 0; $i < $pocetPrvkov; $i++) {
            echo $pole[$i] . "<br>";
        }


    }

    ?>
</body>

</html>