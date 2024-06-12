<header id="header">
    <div class="headerLft">
        <i class="fa-solid fa-bars" onclick="openNav()"></i>
        <a href="index.php"><img src="images/logo.png" alt="Logotipo"></a>
        <a href="index.php" id="navTitle">Associação de Pais de Benavente</a>
    </div>
    <div class="headerRght">
        <a href="https://pt-pt.facebook.com/AssociacaoPaisdoagrupamentodeescolasBenavente/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="" target="_blank"><i class="fa-solid fa-envelope"></i></a>
        <?php
            if (isset($_SESSION['username'])) { ?>
                <button href="" id="bemVindoAdm">Bem-vindo, Admin!</button>
            <?php } else { ?>
                <a href="login.php" id="aLogin-nav">
                    <div id="loginNav">
                        <i class="fa-solid fa-user"></i>
                        <p>Login</p>
                    </div> 
                </a>
        <?php } ?>
    </div>    
</header>