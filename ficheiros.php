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
        include('includes/modal.php');
   ?>
    <div>
    <div class="bannerContactos">
        <h1>Ficheiros</h1>
    </div>
    <div class="contactosDiv">
        <div class="container text-center">
            <div class="row">
                <?php
                    $sql = "SELECT id, nome, data_publicacao, url_ficheiro FROM ficheiros";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $file_extension = pathinfo($row['url_ficheiro'], PATHINFO_EXTENSION);
                            echo '<div class="col-sm">';
                            echo '<div class="cardContactos">';
                            echo '<i class="fa-solid fa-file"></i>';
                            echo '<hr>';
                            echo '<div class="containerContactos">';
                            echo '<p>' . $row['nome'] . '</p>';
                            echo '</div>';
                            if (isset($_SESSION['username'])) {
                                echo '<div style="display: flex; align-items: center; justify-content: center;">';
                                echo '<a href="' . $row['url_ficheiro'] . '" target="_blank">Descarregar</a>';
                                echo '<i style="color: red; cursor: pointer; margin-left: 0.5em" class="fa-solid fa-xmark" onclick="deleteFile(' . $row['id'] . ')"></i>';
                                echo '</div>';
                            } else {
                                echo '<a href="' . $row['url_ficheiro'] . '" target="_blank">Descarregar</a>';
                            }
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p style="color: #107bbf;">Nenhum ficheiro encontrado.</p>';
                    }

                    $conn->close();
                ?>
            </div>
        </div>
    </div>
    </div>
    <?php
        include('includes/footer.php');
    ?>
    <script>
        function deleteFile(id) {
            if (confirm('Tem a certeza que deseja remover este ficheiro?')) {
                window.location.href = 'removerFicheiro.php?id=' + id;
            }
        }
    </script>
</body>
</html>