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

    // Check if news ID is provided via GET parameter
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $news_id = $_GET['id'];

        // Prepare SQL statement to delete news item
        $sql = "DELETE FROM noticias WHERE id = ?";

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $news_id);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: index.php"); 
        } else {
            echo "Erro ao eliminar a notícia: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Invalid news ID.";
    }

    // Close connection
    $conn->close();
?>
