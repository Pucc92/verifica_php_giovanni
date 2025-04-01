<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
</head>

<body>
  <h1>Form</h1>

  <form
    action="action.php"
    method="post"
    enctype="multipart/form-data"
    style="border: 1px solid orange"
    id="form1">
    <fieldset style="border: 1px solid rgb(0, 0, 255)">
      <legend>Mese</legend>

      <label for="mese" autocomplete="off">Mese</label>

      <input type="number" name="mese" placeholder="Mese" id="mese" /><br />
    </fieldset>

    <button type="submit">Inserisci mese</button>
  </form>
  <br />
  <hr />
  <?php

  $review1 = ['titolo' => 'Tutto perfetto', 'rating' => '9', 'data' => '2025-01-22'];
  $review2 = ['titolo' => 'Pulito ma scortesi', 'rating' => '3', 'data' => '2024-10-12'];
  $review3 = ['titolo' => 'Fantastico', 'rating' => '5', 'data' => '2024-05-10'];
  $reviews = [$review1, $review2, $review3];

  echo '<br><hr>';

  // esercizio 7






  // Esercizio 4
  echo '<br><hr>';
  function calcolaMediaRating($reviews)
  {
    $totaleRating = 0;
    $numeroRecensioni = count($reviews);

    foreach ($reviews as $review) {
      $totaleRating += $review['rating'];
    }


    return $numeroRecensioni > 0 ? $totaleRating / $numeroRecensioni : 0;
  }

  $mediaRating = calcolaMediaRating($reviews);

  echo "La media dei rating è: " . $mediaRating;


  ?>
</body>

</html>