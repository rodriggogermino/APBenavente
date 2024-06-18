<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $data_publicacao = date('Y-m-d');
        $target_dir = "files/";
        $target_file = $target_dir . basename($_FILES["ficheiro"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Verifica se o ficheiro é permitido (ajustar conforme necessário)
        $allowed_types = ['pdf', 'docx', 'pptx', 'xlsx', 'jpg', 'jpeg', 'png'];
        if (in_array($file_type, $allowed_types)) {
            if (move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file)) {
                include('bd/bd_config.php');

                $stmt = $conn->prepare("INSERT INTO ficheiros (nome, data_publicacao, url_ficheiro) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $nome, $data_publicacao, $target_file);

                if ($stmt->execute()) {
                    header("Location: ficheiros.php");
                } else {
                    header("Location: addFicheiros.php");
                }

                $stmt->close();
                $conn->close();
            } else {
                echo "Erro ao mover o ficheiro.";
            }
        } else {
            echo "Tipo de ficheiro não permitido.";
        }
    }
?>
