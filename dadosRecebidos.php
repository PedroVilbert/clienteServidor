<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $curso = $_POST['curso'];
        $depoimento = $_POST['depoimento'];

        echo "<h2>Dados Recebidos!</h2>";
        echo "<br>Seja bem-vindo(a) $nome!";
        echo "<br>E-mail cadastrado: $email.";
        echo "<br>Curso escolhido: $curso.";
        echo "<br>Depoimento: $depoimento";

    } else {
        echo "<h2>Nenhum dado recebido!</h2>";
    }

?>