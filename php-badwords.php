<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene  passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tuttele  occorrenze della parola da censurare. -->


<?php
  $para = 'La vita è una tragedia se vista in primo piano, ma è una commedia se vista in campo lungo.'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>
  <?php 
    echo "Charlie diceva: " . $para;
  ?>
</h1>
  
</body>
</html>