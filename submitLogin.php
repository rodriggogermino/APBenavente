<?php
    session_start();
    include('bd/bd_config.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']); 
        
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            header('Location: login.php');
        }
        $stmt->close();
    } else {
        header('Location: login.php');
    }
?>
