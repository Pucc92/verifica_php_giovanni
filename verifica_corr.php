<?php
<?php

include_once("inc/funzioni.php");

//punto 3
function mese_da_data($data)
{
    //data in formato YYYY-mm-dd 
    $d = explode("-", $data);
    //substr($data,5,2) 
    return $d[1];
}

//punto 4
function media_numero($a2, $m = 0)
{
    $somma = $c = 0;
    foreach ($a2 as $a) {
        //punto 8
        if ($m == 0 || (mese_da_data($a['pubblicazione']) == $m)) {

            $somma = $somma + $a['visualizzazioni'];
            $c++;
        }
    }
    //$media = $somma / count($a2);
    if ($c == 0) return 0;

    $media = $somma / $c;
    return $media;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica2</title>
</head>

<body>
    <?php

    $post1 = ['titolo' => "Sport", 'visualizzazioni' => "10", 'pubblicazione' => '2025-01-22'];
    $post2 = ['titolo' => "Alimentazione", 'visualizzazioni' => "20", 'pubblicazione' => '2024-05-15'];
    $posts = [$post1, $post2];


    //punto 2
    $mese = $_REQUEST['mese'];
    if ($mese < 1 || $mese > 12) {
        echo "<br><a href='index.html'>Ripeti e scegli il mese compreso tra 1 e 12</a>";
        exit; //blocca l'esecuzione del programma
    }

    //echo mese_da_data('2025-04-01') PROF POSSIAMO MODIFICARE;
    $media =  media_numero($posts);



    echo "mese: " . $mese . "<br>";
    echo "media: " . $media;

    echo "<hr>media del mese: " . media_numero($posts, $mese);
    echo "<br>";

    foreach ($posts as $k => $post) {

        //punto 5
        if (mese_da_data($post['pubblicazione']) == $mese) {

            //punto 6
            echo "<a href='dettaglio.php?k=$k'>" . $post['titolo'] . "</a>";


            echo " " . raw2user($post['pubblicazione']);
            echo " (" . $post['visualizzazioni'] . ")";
            //sopra o sotto la media
            if ($post['visualizzazioni'] > $media) echo " sopra la media ";
            else echo " sotto la media ";

            //punto 7
            $posts[$k]['visualizzazioni']++;


            echo "<br>";
        }
    }

    //print_r($posts);


    ?>

</body>

</html>