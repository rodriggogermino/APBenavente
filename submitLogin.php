<?php
    session_start();
    include('bd/bd_config.php');

    // Verifica se os campos username e password foram preenchidos
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Codifica a senha usando md5
        echo "Por favor, preencha todos os campos.";
        // Prepara a consulta SQL para verificar as credenciais
        $stmt = $conn->prepare("SELECT * FROM login WHERE user = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se a consulta retornou um resultado
        if ($result->num_rows > 0) {
            // Login bem-sucedido
            $_SESSION['username'] = $username;
            header('Location: index.php?log=sucesso'); // Redireciona para a página de administração
        } else {
            // Credenciais inválidas
            header('Location: login.php?log=erro');
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
?>
