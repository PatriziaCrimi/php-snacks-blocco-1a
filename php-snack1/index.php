<?php
  /* ISTRUZIONI
    Comparazione di due numeri.
    Il software stampa il maggiore tra due numeri interi casuali compresi tra 0 e 10.000.
  */

  // Variables initialization
  $title = 'PHP Snack 1';
  $subtitle = 'Numbers comparison';
  $min = 0;
  $max = 10000;
  $first_number = rand($min, $max);
  $second_number = rand($min, $max);
  $message = '';

  if($first_number > $second_number) {
    // First number is higher
    $message = "The first number is higher than the second number: " . number_format($first_number, 0, ",", ".");
  } else if ($first_number < $second_number) {
    // Second number is higher
    $message = "The second number is higher than the first number: " . number_format($second_number, 0, ",", ".");
  } else {
    // The two numbers are equal
    $message = "The two numbers are equal: " . number_format($first_number, 0, ",", ".");
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
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
              The first number randomly generated is:
              <?php
                echo number_format($first_number, 0, ",", ".");
              ?>
            </p>
            <p>
              The second number randomly generated is:
              <?php
              echo number_format($second_number, 0, ",", ".");
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
                Two integers between
                <?php
                echo number_format($min, 0, ",", ".");;
                ?>
                and
                <?php
                echo number_format($max, 0, ",", ".");;
                ?>
                have just been generated.
              </p>
            </div>
            <div class="results-box">
              <p>
                <span>
                  Highest number:
                </span>
                <?php
                  echo $message;
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
