<?php
  /* ISTRUZIONI
  Stampa le potenze di un numero casuale da 1 a 5 senza superare il numero 1000.
  */

  // Variables initialization
  $title = 'PHP Snack 6';
  $subtitle = 'Power calculation';
  $min = 1;
  $max = 5;
  $power_base = rand($min, $max); //any integer
  $power_limit = 1000;
  $all_power_results = [];
  $is_thousand = false;

  // Power calculation
  for ($i=0; $is_thousand == false ; $i++) {
    $power_exponent = $i;
    $current_power_result = pow($power_base, $power_exponent);
    if($current_power_result < 1000) {
      // Lower than 1000 it is added to the list
      $all_power_results[] = $current_power_result;
    } else {
      // Higher than 1000 stops the loop
      $is_thousand = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 6</title>
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
                echo $power_base;
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
                The limit for the power result is:
                <span>
                  <?php
                  echo number_format($power_limit, 0, ",", ".");
                  ?>
                </span>
              </p>
            </div>
            <div class="results-box">
              <p>
                The list of all its power results is:
                <ul>
                  <?php
                  for ($i=0; $i < count($all_power_results); $i++) {
                  ?>
                  <li>
                    <?php
                    echo $all_power_results[$i];
                    ?>
                  </li>
                  <?php
                  }
                  ?>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
