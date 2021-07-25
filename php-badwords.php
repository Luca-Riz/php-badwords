<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene  passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le  occorrenze della parola da censurare. -->


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

<a href="?badword=vista">Add badword "vista"</a>

<p> Charlie diceva: <?php echo $para; //stampo paragrafo ?> </p>
<p> La lunghezza del paragrafo sopra è di <?php echo strlen($para); //calcolo lunghezza paragrafo ?> caratteri.</p>

<!-- http://localhost/php-badwords/php-badwords.php/?badword=tragedia -->

<p> La parola da censurare è alla posizione <?php echo strpos($para, $_GET["badword"]); //calcolo la posizione della parola nell'url ?> </p>
<p>
  <?php 
    $newPara = str_replace($_GET["badword"], '***',$para,);
    echo "La frase censurata di Charlie è: " . $newPara //sostituisco la parola da censurare con ***
  ?>
</p>
<p>La nuova lunghezza del paragrafo censurato è di <?php echo strlen($newPara); //calcolo lunghezza nuovo paragrafo   ?> caratteri.</p>
  
</body>
</html>