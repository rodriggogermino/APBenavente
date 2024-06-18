<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit;
    }

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "apbenavente";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Oops! Parece que estamos com alguns problemas técnicos :/  (" . $conn->connect_error . ")");
        }

        $stmt = $conn->prepare("SELECT url_ficheiro FROM ficheiros WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($url_ficheiro);
        $stmt->fetch();
        $stmt->close();

        if (file_exists($url_ficheiro)) {
            unlink($url_ficheiro);
        }

        $stmt = $conn->prepare("DELETE FROM ficheiros WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            header("Location: ficheiros.php");
        } else {
            header("Location: ficheiros.php");
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "ID do ficheiro não especificado.";
    }
?>
