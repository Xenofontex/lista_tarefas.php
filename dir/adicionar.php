<?php

if (isset($_POST['tarefa'])){

  $tarefa = $_POST['tarefa'];

  $arquivo = fopen('tarefas.txt', 'a');
  fwrite($arquivo, $tarefa . "\n");
  fclose($arquivo);
  
}

header('Location: html.php');

exit;

?>