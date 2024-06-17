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

        // Fetch news details based on ID
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id > 0) {
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Oops! Parece que estamos com alguns problemas técnicos :/  (" . $conn->connect_error . ")");
            }

            $sql = "SELECT titulo, descricao, introducao, conteudo, data_publicacao, imagem_url FROM noticias WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $titulo = $row['titulo'];
                $introducao = $row['introducao'];
                $descricao = $row['descricao'];
                $conteudo = $row['conteudo'];
                $data = $row['data_publicacao'];
                $imagem_url = $row['imagem_url'];
            } else {
                echo "<p>Notícia não encontrada.</p>";
                exit;
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "ID de notícia inválido.";
            exit;
        }
    ?>
    <div id="separador"></div>
    <?php
        include('includes/modal.php');    
        include('includes/subnav.php');
        include('includes/sidenav.php');
        include('includes/modalRemove-News.php');
    ?>
    <div class="noticiaBody">
        <div class="noticiaImg">
            <img src="<?php echo $imagem_url; ?>" alt="<?php echo $titulo; ?>">
            <div class="noticaImgContainer">
                <h1><?php echo $titulo; ?></h1>
                <p><?php echo $descricao; ?></p>
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
                    <h4 id="introH4">Introdução</h4>
                    <p class="textNoticia">
                        <?php echo nl2br($introducao); ?>
                    </p>
                    <h4 id="descricaoH4">Descrição</h4>
                    <p class="textNoticia">
                        <?php echo nl2br($conteudo); ?>
                    </p>
                    <p id="dataPublicacao"><?php echo $data; ?></p>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <span id="removerBtn">Remover</span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
    <script>
        function deleteNews(id) {
            window.location.href = 'removerNoticias.php?id=' + id;
        }
    </script>
</body>
</html>
