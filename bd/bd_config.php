<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apbenavente";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Oops! Parece que estamos com alguns problemas técnicos :/  (" . $conn->connect_error . ")");
    }

    $sql = "SELECT id, titulo, introducao, descricao, imagem_url FROM noticias";
    $result = $conn->query($sql);
    $news_count = $result->num_rows;
?>