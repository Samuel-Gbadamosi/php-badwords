<?php
  $nome ='Welcome to php';
  $nome = str_replace('php','***', $nome);

  echo $nome;

  $length = strlen($nome);
  echo '<br>';
  echo 'the string length is ';
  echo $length;

 ?>
