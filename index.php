<?php
/* Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

 $bannedWord = $_GET['badword'];
 $text = 'Lorem, ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum dolor sit amet consectetur adipisicing.';
 $consoredText = str_replace($bannedWord, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php badword</title>
</head>
<body>
  
  <h3>Normal version</h3>
  <p>
    <?php echo $text ?> <br>
    (lunghezza: <?php echo strlen($text) ?>)
  </p>  
  <hr>

  <h3>input word to be censored:</h3>
  <form>
    <input type="text" name="badword" id="badword_input">
    <button>replace</button>
  </form>

  <h3>Censored version</h3>
  <p>
    <?php echo $consoredText ?> <br>
    (lunghezza: <?php echo strlen($consoredText) ?>)
  </p>

</body>
</html>