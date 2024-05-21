<!DOCTYPE html>
<html lang="en">
    <?php
        include('includes/head.php')
   ?>
<body>
    <div id="loader"></div>
   <?php
        include('includes/header.php');
        include('includes/sidenav.php');
   ?>
    <div id="separador"></div>
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
    <section id="Noticias">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/exNoticias.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/exNoticias.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/exNoticias.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
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
    
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>