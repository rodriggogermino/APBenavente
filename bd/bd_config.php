<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apbenavente";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Oops! Parece que estamos com alguns problemas técnicos :/  (" . $conn->connect_error . ")");
    }
?>