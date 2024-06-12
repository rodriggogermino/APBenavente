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
    <?php
    if (isset($_SESSION['username'])) { ?>
        <div class="loginDiv" style="text-align: center;">
            <form action="destroyLogin.php" class="formLogin" method="POST">
                <h3>Logout</h3>
                <label style="margin-top: 2em; margin-bottom: 2em;">Deseja sair da conta?</label>
                <input type="submit" value="Sair" id="submitBtn">
            </form>
        </div>
    <?php } else { ?>
        <div class="loginDiv">
            <form action="submitLogin.php" class="formLogin" method="POST">
                <h3>Login</h3>
                <label for="usern">Username</label> <br>
                <input type="text" id="usern" name="username"> <br>
                <label for="pword">Password</label> <br>
                <input type="password" id="pword" name="password"> <br>
                <label for="passVisibilidade" id="passVisibilidade" onclick="verPassword()">Ver Password</label><br><br>
                <input type="submit" value="Entrar" id="submitBtn">
            </form>
        </div>
    <?php } ?>  
    <?php
    include('includes/footer.php');
    ?>
</body>
</html>