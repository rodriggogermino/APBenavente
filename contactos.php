<?php
    session_start(); // Inicia a sessão
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('includes/head.php');
    ?>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <div id="loader"></div>
    <?php
        include('bd/bd_config.php');
        include('includes/header.php');
    ?>
    <div id="separador"></div>
    <?php    
        include('includes/sidenav.php');
        include('includes/modal.php');
    ?>
     <div class="bannerContactos">
        <h1>Contactos</h1>
    </div>
    <div class="flex-container">
        <div class="content">
            <div class="contactosDiv">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-sm">
                            <div class="cardContactos">
                                <i class="fa-brands fa-facebook-f"></i>
                                <hr>
                                <div class="containerContactos">
                                    <p>facebook.com/AssociacaoPais...</p>
                                </div>
                                <a href="https://pt-pt.facebook.com/AssociacaoPaisdoagrupamentodeescolasBenavente/" target="_blank">Visitar a nossa página</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="cardContactos">
                                <i class="fa-solid fa-envelope"></i>
                                <hr>
                                <div class="containerContactos">
                                    <p>aeb.pais@aebenavente.pt</p>
                                </div>
                                <a href="mailto:aeb.pais@aebenavente.pt" target="_blank">Contacte-nos</a>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <?php
            include('includes/footer.php');
        ?>
    </div>
</body>
</html>
