<?php
    session_start(); // Inicia a sessão
?>   
<!DOCTYPE html>
<html lang="en">
    <?php include('includes/head.php') ?>
<body>
    <div id="loader"></div>
   <?php
        include('bd/bd_config.php');
        include('includes/header.php');
    ?>
    <div id="separador"></div>
    <?php
        include('includes/modal.php');    
        include('includes/subnav.php');
        include('includes/sidenav.php');
   ?>
   <div class="noticiaBody">
        <div class="noticiaImg">
            <img src="images/headerBg.jpg" alt="">
            <div class="noticaImgContainer">
                <h1>Noticia 1</h1>
                <p>Novo website da Associação de Pais de Benavente</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h3 id="artigoTitle">Artigo</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="textNoticia">
                        A Associação de Pais de Benavente anuncia hoje o seu website oficial. <br>
                        Desenvolvido por Rodrigo Germino, aluno da Escola Secundária de Benavente do curso profissional Técnico de Informática - Sistemas. <br><br>
                        O website foi utilizado como PAP (Prova de Aptidão Profissional), por Rodrigo. A mesma consiste na defesa de um projeto realizados com os 
                        conteúdos dados ao longo do secundário perante vários júris.
                    </p>
                </div>
            </div>
        </div>
   </div>
   <?php include('includes/footer.php'); ?>
</body>
</html>