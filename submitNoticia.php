<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect if not logged in
    exit;
}

// Include database configuration and establish connection
include('bd/bd_config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $introducao = $_POST['introducao'];
    $conteudo = $_POST['conteudo'];

    // File upload handling
    $targetDirectory = "uploads/"; // Directory where uploaded files will be stored
    $targetFile = $targetDirectory . basename($_FILES["imagemN"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["imagemN"]["tmp_name"]);
    if ($check !== false) {
        // File is an image
        $uploadOk = 1;
    } else {
        echo "O arquivo não é uma imagem válida.";
        $uploadOk = 0;
    }

    // Check file size (currently 5MB)
    if ($_FILES["imagemN"]["size"] > 5000000) {
        echo "Desculpe, o arquivo é muito grande.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can expand this list)
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Somente arquivos JPG, JPEG, PNG & GIF são permitidos.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não pôde ser enviado.";
    } else {
        // Attempt to upload file
        if (move_uploaded_file($_FILES["imagemN"]["tmp_name"], $targetFile)) {
            echo "O arquivo " . htmlspecialchars(basename($_FILES["imagemN"]["name"])) . " foi enviado com sucesso.";
            $imagem_url = $targetFile; // Store the file path in the database
        } else {
            echo "Desculpe, ocorreu um erro ao enviar seu arquivo.";
        }
    }

    // If file upload was successful, proceed to insert into database
    if ($uploadOk == 1) {
        // Prepare and execute SQL insert statement
        $sql = "INSERT INTO noticias (titulo, descricao, introducao, conteudo, imagem_url, data_publicacao) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $titulo, $descricao, $introducao, $conteudo, $imagem_url);

        if ($stmt->execute()) {
            // Insert successful, redirect to a success page or main news page
            header("Location: index.php#sectionNoticias"); // Replace with appropriate page
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error; // Replace with error handling
        }

        $stmt->close();
    }
}

$conn->close();
?>
