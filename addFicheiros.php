<?php
    session_start(); // Inicia a sessão

    if (!isset($_SESSION['username'])) {
        header("Location: index.php"); // Redirect if not logged in
        exit;
    }
?>  
<!DOCTYPE html>
<html lang="en">
<?php
    include('bd/bd_config.php');
    include('includes/head.php');
?>
<body>
    <div id="loader"></div>
    <?php
        include('includes/header.php');
        include('includes/sidenav.php');
    ?>
    <div id="separador"></div>
    <?php
    if (isset($_SESSION['username'])) { ?>
        <div class="loginDiv">
            <form action="submitNoticia.php" class="formLogin" method="POST" enctype="multipart/form-data">
                <h3>Adicionar Ficheiros</h3>
                <label for="titulo">Nome</label><br>
                <input type="text" id="titulo" name="titulo" required><br>
                <label for="imgNoticia">Ficheiro</label><br>
                <input type="file" id="imgNoticia" name="imagemN" required><br><br>
                <input type="submit" value="Publicar" id="submitBtn">
            </form>
        </div>
    <?php } else { ?>
        <div class="loginDiv" style="text-align: center;">
            <form action="index.php" class="formLogin" method="POST">
                <h3>Erro</h3>
                <label style="margin-top: 2em; margin-bottom: 2em;">Parece que não tem permissões suficientes.</label>
                <input type="submit" value="Voltar" id="submitBtn">
            </form>
        </div>
    <?php } ?>  
    <?php
    include('includes/footer.php');
    ?>
</body>
</html>