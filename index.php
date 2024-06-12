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
        include('includes/modal.php');    
        include('includes/subnav.php');
        include('includes/sidenav.php');
        include('includes/cookiesModal.php');
   ?>
    <div class="boasVindas-div">
        <img src="images/boas-vindas.png" id="boas-vindas" alt="Boas-vindas">
        <img src="images/boas-vindasMobile.png" id="boas-vindasMobile" alt="Boas-vindas">
    </div>
    <section id="quemSomos">
        <div class="container mt-5" id="qsDiv">
            <div class="row justify-content-center">
                <div class="col-sm-4" id="col1_qs">
                    <h3>Quem somos?</h3>
                    <p>Associação de Pais de Benavente</p>
                </div>
                <div class="col-sm-4" id="col2_qs">
                    <p>
                        A <span>Associação de Pais de Benavente</span> é uma associação que visa apoiar e representar os interesses dos pais e encarregados de educação das escolas de Benavente, promovendo a colaboração entre os pais e as escolas para o desenvolvimento educativo e bem-estar dos alunos.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sectionNoticias">
    <div class="divCards-News">
        <i class="fa-solid fa-chevron-left" id="arLeft"></i>
        <div class="cardNoticias">
            <div class="containerNews active">
                <img src="images/headerBg1.jpg" alt="Noticia 1">
                <div class="centered">
                    <h1>Noticia 1</h1>
                    <p>Novo website da Associação de Pais de Benavente</p>
                </div>
            </div>
            <div class="containerNews">
                <img src="images/headerBg2.jpg" alt="Noticia 2">
                <div class="centered">
                    <h1>Noticia 2</h1>
                    <p>Evento de Caridade em Benavente</p>
                </div>
            </div>
            <div class="containerNews">
                <img src="images/headerBg3.jpg" alt="Noticia 3">
                <div class="centered">
                    <h1>Noticia 3</h1>
                    <p>Nova Biblioteca Inaugurada</p>
                </div>
            </div>
        </div>
        <i class="fa-solid fa-chevron-right" id="arRight"></i>
    </div>
</section>
    <section id="ondeEstamos">
        <div class="container mt-5" style="margin-bottom: 1em">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d188730.12496497773!2d-8.8599432!3d38.9602363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd191e53ee9da41f%3A0xa0760a3a41b0016!2sBenavente!5e1!3m2!1spt-PT!2spt!4v1716202914950!5m2!1spt-PT!2spt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-4">
                    <h1 id="h1Maps">Saiba onde nos encontrar!</h1>
                    <p id="pMaps">
                        ... e não hesite em contactar.
                    </p>
                    <p id="pMap2">
                        Estamos dispersos em várias escolas ao longo do concelho de Benavente.
                    </p>
                </div>
            </div>
        </div> 
    </section>
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>