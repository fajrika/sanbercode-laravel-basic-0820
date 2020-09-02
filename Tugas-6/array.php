<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>
    <h3>Soal 1</h3>
    <?php
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    echo ("Variable Kids <pre>");
    print_r($kids);
    echo ("</pre>");
    echo ("Variable Adults <pre>");
    print_r($adults);
    echo ("</pre>");
    ?>


    <h3>Soal 2</h3>
    Cast Stranger Things:
    <br>
    Total Kids: <?= count($kids) ?>
    <br>
    <ol>
        <?php foreach ($kids as $kid) : ?>
            <li><?= $kid ?></li>
        <?php endforeach ?>
    </ol>
    Total Adults: <?= count($adults) ?>
    <br>
    <ol>
        <?php foreach ($adults as $adult) : ?>
            <li><?= $adult ?></li>
        <?php endforeach ?>
    </ol>


    <h3>Soal 3</h3>
    <?php
    // Soal 3
    $arrayA = [
        [
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive",
        ], [
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive",
        ], [
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased",
        ], [
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive",
        ]
    ];
    echo ("Variable arrayA <pre>");
    print_r($arrayA);
    echo ("</pre>");
    ?>
</body>

</html>