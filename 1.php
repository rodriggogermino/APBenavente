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
    <div class="bodyInscricao">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inscricaoDiv">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                     <h4>Pronto(a) para ser sócio(a) da nossa Associação?</h4>
                                     <p>Basta fazer download da folha de inscrição, preenche-la corretamente, envia-la para o nosso e-mail e aguadar!</p> <br>
                                     <p>Isso mesmo! São precisos apenas 4 passos para fazer parte da Associação de Pais de Benavente.</p>
                                     <p>**Nota: Todos os valores e outras informações estão presentes na própria folha de inscrição**</p>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="folhaDiv">
                        <img src="images/fichaInsc-Img.png" alt="Preview - Folha de Inscrição de Sócio">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>
</html>