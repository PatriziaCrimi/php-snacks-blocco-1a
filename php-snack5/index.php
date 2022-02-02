<?php
  /* ISTRUZIONI
  Stampa il cubo dei primi N numeri,
  dove N è un numero casuale generato compreso tra 0 e 100.
  */

  // Variables initialization
  $title = 'PHP SNack 5';
  $subtitle = 'Cube calculation';
  $min = 0;
  $max = 100;
  $random_number = rand($min, $max);
  $power_exponent = 3;

  // Cube calculation
  $cube = pow($random_number, $power_exponent);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 5</title>
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
              The number randomly generated is:
              <?php
                echo $random_number;
              ?>
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="results-box">
              <p>
                The cube of
                <span>
                  <?php
                  echo $random_number;
                  ?>
                </span>
                is:
                <span>
                  <?php
                  echo number_format($cube, 0, ",", ".");
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
