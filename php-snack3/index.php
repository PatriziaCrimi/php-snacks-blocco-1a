<?php
  /* ISTRUZIONI
  Generazione di 5 numeri casuali interi compresi tra 0 e 5000.
  Il programma stampa la somma di tutti i numeri.
  */

  // Variables initialization
  $title = 'PHP Snack 3';
  $subtitle = 'Summing of numbers';
  $numbers_quantity = 5;
  $numbers_array = [];
  $min = 0;
  $max = 5000;
  $sum = 0;

  // Sum calculation
  for ($i=0; $i < $numbers_quantity; $i++) {
    $random_number = rand($min, $max);
    $numbers_array[] = $random_number;
    $sum = $sum + $random_number;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title; ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle; ?>
          </h2>
        </div>
        <div class="row">
          <!-- Printing data -->
          <div id="data-info">
            <h3>Data Information</h3>
            <p>
              The five numbers randomly generated are:
              <?php
                for ($i=0; $i < count($numbers_array); $i++) {
              ?>
              <ul>
                <li>
                <?php
                  echo number_format($numbers_array[$i], 0, ",", ".");
                }
                ?>
                </li>
              </ul>
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="results-box">
              <p>
                The sum of these numbers is:
                <span>
                  <?php
                  echo number_format($sum, 0, ",", ".");
                  ?>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
