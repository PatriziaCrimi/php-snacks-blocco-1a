<?php
  /* ISTRUZIONI
  Crea un array vuoto.
  Genera 6 numeri casuali compresi tra 0 e 100.
  I numeri dispari vanno inseriti nell’array.
  */

  // Variables initialization
  $title = 'PHP Snack 4';
  $subtitle = 'Odd numbers list';
  $odd_numbers = [];
  $all_numbers = [];
  $min = 0;
  $max = 100;
  $numbers_quantity = 6;

  // Odd numbers list creation
  for ($i=0; $i < $numbers_quantity; $i++) {
    $current_number = rand($min, $max);
    $all_numbers[] = $current_number;
    if($current_number % 2 !== 0) {
      // If the number is odd they must be added to the list
      $odd_numbers[] = $current_number;
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 4</title>
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
              The six numbers randomly generated are:
              <?php
                for ($i=0; $i < count($all_numbers); $i++) {
              ?>
              <ul>
                <li>
                <?php
                  echo $all_numbers[$i];
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
                The odd numbers are:
                <span>
                  <?php
                  echo count($odd_numbers);
                  ?>
                </span>
                <?php
                for ($i=0; $i < count($odd_numbers); $i++) {
                  ?>
                  <ul>
                    <li>
                      <?php
                      echo $odd_numbers[$i];
                    }
                    ?>
                  </li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
