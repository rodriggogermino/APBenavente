<?php
    session_start(); // Inicia a sessão
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
    <div class="loginDiv" style="text-align: center;">
        <form action="destroyLogin.php" class="formLogin" method="POST">
            <h3>Logout</h3>
            <label style="margin-top: 2em; margin-bottom: 2em;">Deseja sair da conta?</label>
            <input type="submit" value="Sair" id="submitBtn">
        </form>
    </div>
    <?php
    include('includes/footer.php');
    ?>
</body>
</html>