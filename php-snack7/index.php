<?php
  /* ISTRUZIONI
  Calcola la somma e la media dei numeri da 1 a 10.
  */

  // Variables initialization
  $title = 'PHP Snack 7';
  $subtitle = "Calculating Sum & Average";
  $first_number = 1;
  $last_number= 10;
  $sum = 0;
  $average = 0;

  // Calculating Sum
  for ($i=$first_number; $i <= $last_number; $i++) {
    $sum = $sum + $i;
  }
  // Calculating Average
  $average = $sum / ($last_number - $first_number +1);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 7</title>
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
              The first number is:
              <?php
                echo $first_number;
              ?>
            </p>
            <p>
              The last number is:
              <?php
              echo $last_number;
              ?>
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="message">
              <p>
                The Sum and the Average of all the numbers in between these two have been calculated.
              </p>
            </div>
            <div class="results-box">
              <p>
                <span>
                  Sum:
                </span>
                <?php
                  echo $sum;
                ?>
              </p>
              <p>
                <span>
                  Average:
                </span>
                <?php
                  echo $average;
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
