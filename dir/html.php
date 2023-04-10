<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <form method="post" action="adicionar.php">
        <label for="tarefa">Tarefa</label>
        <input type="tarefa" id="tarefa" name="tarefa">
        <input type="submit" value="Adicionar">
    </form>
    <ul>
      <?php
            $arquivo = fopen('tarefas.txt', 'r');

            if ($arquivo) {
              $num = 1;
                while (($linha = fgets($arquivo)) !== false) {
                    echo "<li>" . ++$contador . " - $linha</li>";
                }
                echo "</ol>"
                fclose($arquivo);
            }
        ?>
        <!-- todas as tarefas serão colocadas aqui! -->
    </ul>
</body>
</html>
