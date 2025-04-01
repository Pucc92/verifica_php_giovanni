<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $review1 = ['titolo' => 'Tutto perfetto', 'rating' => '9', 'data' => '2025-01-22'];
    $review2 = ['titolo' => 'Pulito ma scortesi', 'rating' => '3', 'data' => '2024-10-12'];
    $review3 = ['titolo' => 'Fantastico', 'rating' => '5', 'data' => '2024-05-10'];
    $reviews = [$review1, $review2, $review3];

    echo  '<br><hr>';

    // Esercizio 3

    function trovaMese($data)
    {

        $data = date('m');
        return $data;
    }

    $data = date("2025-01-22");

    echo "Il mese nella data è: " . trovaMese($data);




    // Esercizio 2
    echo  '<br><hr>';
    foreach ($_POST as $k => $mese) {

        if ($mese <= 12 && $mese != 0) {
            echo "Mese: $mese <br>";
        } else {
            echo '<a href="index.php">Torna alla prima pagina</a>';
        }
    }

    ?>
</body>

</html>