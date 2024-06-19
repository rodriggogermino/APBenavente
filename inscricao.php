<?php
    session_start(); // Inicia a sessão
?>    
<!DOCTYPE html>
<html lang="en">
<?php
    include('includes/head.php')
?>
<body>
   <div id="loader"></div>
   <?php
        include('bd/bd_config.php');
        include('includes/header.php');
    ?>
    <div id="separador"></div>
    <?php    
        include('includes/sidenav.php');
        include('includes/cookiesModal.php');
   ?>
    <div>
    <div class="bannerContactos">
        <h1>Inscrição</h1>
    </div>
    <div class="inscricaoDiv">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <div class="cardContactos">
                        <h4 id="h4Insc">Pronto(a) para ser sócio(a) da nossa Associação?</h4>
                        <p class="pInsc">Basta fazer download da ficha de inscrição, preenche-la corretamente, envia-la para o nosso e-mail e aguadar!</p> <br>
                        <p class="pInsc">Isso mesmo! São precisos apenas 4 passos para fazer parte da Associação de Pais de Benavente.</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="cardContactos">
                        <img id="folhaImg" src="images/fichaInsc-Img.png" alt="">
                        <hr>
                        <div class="containerContactos">
                            <p>Ficha de Inscrição</p>
                        </div>
                        <a href="uploads/FichaInscrAPB.pdf" target="_blank">Descarregar</a>
                    </div> 
                </div> 
            </div>
            <div class="row">
                <p id="noteInsc">**Nota: Todos os valores e outras informações estão presentes na própria ficha de inscrição**</p>  
            </div>
        </div>
    </div>
    </div>
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>