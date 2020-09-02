<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <h3>Soal No 1</h3>
    <?php
    $first_sentence = "Hello PHP!";
    $second_sentence = "I'm ready for the challenges";
    ?>
    <?= "Panjang String: " . strlen($first_sentence) . "<br>" ?>
    <?= "Jumlah kata: " . count(explode(" ", $first_sentence)) . "<br>" ?>
    <?= "Panjang String: " . strlen($second_sentence) . "<br>" ?>
    <?= "Jumlah kata: " . count(explode(" ", $second_sentence)) . "<br>" ?>
    <h3> Soal No 2</h3>
    <?php $string2 = "I love PHP"; ?>
    <?= "Kata Pertama: " . explode(" ", $string2)[0] . "<br>" ?>
    <?= "Kata Kedua: " . explode(" ", $string2)[1] . "<br>" ?>
    <?= "Kata Ketiga: " . explode(" ", $string2)[2] . "<br>" ?>
    <h3> Soal No 3 </h3>
    <?php $string3 = "PHP is old but sexy!"; ?>
    <?= str_replace("sexy", 'awesome', $string3) ?>

</body>

</html>