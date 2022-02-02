<?php
/* ISTRUZIONI
Comparazione di due parole.
Genera due parole casuali.
Il software stampa prima la parola più corta, poi la parola più lunga.
*/

// Variables initialization
$title = 'PHP Snack 2';
$subtitle = 'Words comparison';
$min = 1;
$max = 10;
$first_word_length = rand($min, $max);
$second_word_length = rand($min, $max);
$first_word = getRandomWord($first_word_length);
$second_word = getRandomWord($second_word_length);

// *********** Check words' length ***********
if(strlen($first_word) > strlen($second_word)) {
  // First word longer
  $message = 'The first word is longer than the second word.';
} else if(strlen($first_word) < strlen($second_word)) {
  // Second word longer
  $message = 'The second word is longer than the first word.';
} else {
  // The two words have the same length
  $message = 'The two words have the same length';
}

// FUNCTIONS
function getRandomWord($len) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 2</title>
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
              The first word randomly generated is:
              <?php
                echo $first_word;
              ?>
            </p>
            <p>
              The second word randomly generated is:
              <?php
              echo $second_word;
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
                Two words having between
                <?php
                echo number_format($min, 0, ",", ".");;
                ?>
                and
                <?php
                echo number_format($max, 0, ",", ".");;
                ?>
                characters have just been generated.
              </p>
              <p>The first word is long
                <?php
                echo $first_word_length;
                ?>
              </p>
              <p>The second word is long
                <?php
                echo $second_word_length;
                ?>
              </p>
            </div>
            <div class="results-box">
              <p>
                <span>
                  Longest word:
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
