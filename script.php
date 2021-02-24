<?php
  $word = 'Welcome to php newbies';
  $newword = str_replace('php','***', $word);

   $length = strlen($word);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>  <?php echo $word ?> </h1>
  <h2><?php echo $newword ?> </h2>
  <h3> the lenght is <?php echo $length ?></h3>


</body>
</html>
