<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>
    <h3>Soal No 1 Looping I Love PHP</h3>
    <?php
    $i = 1;
    $maju = 1;
    do {

        if ($i % 2 == 0)
            echo ($i . " - I Love PHP<br>");
        if ($maju == 1) {
            if ($i == 1)
                echo ("LOOPING PERTAMA<br>");
            if ($i == 20) {
                echo ("LOOPING KEDUA<br>");
                $maju = 0;
            }
            $i++;
        } else
            $i--;
    } while ($i != 0);
    ?>
    <h3>Soal No 2 Looping Array Modulo </h3>
    <?php
    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);
    $rest = [];
    foreach ($numbers as $v) {
        array_push($rest, $v % 5);
    }
    echo "<br>";
    echo "Array sisa baginya adalah:  ";
    print_r($rest);
    echo "<br>";
    ?>
    <h3> Soal No 3 Looping Asociative Array </h3>
    <?php
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];
    $itemsA = array_map(function ($el) {
        return [
            "id" => $el[0],
            "name" => $el[1],
            "price" => $el[2],
            "description" => $el[3],
            "source" => $el[4]
        ];
    }, $items);
    print_r($itemsA);
    ?>
    <h3>Soal No 4 Asterix</h3>
    Asterix:
    <br>
    <?php
    for ($i = 1; $i <= 5; $i++) echo (str_repeat("*", $i) . "<br>");
    ?>

</body>

</html>