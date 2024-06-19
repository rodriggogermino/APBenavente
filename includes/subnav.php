<div class="subnav" id="subnav">
    <?php
        if (isset($_SESSION['username'])) { ?>
            <a href="inscricao.php">Inscrever-me</a>
            <a href="ficheiros.php">Ficheiros</a>
            <a href="contactos.php">Contactos</a>
            <div class="dropdown">
                <button class="dropbtn">Links <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="https://www.aebenavente.pt/" target="_blank">Site do Agrupamento</a>
                    <a href="https://inovar.aebenavente.pt/inovarconsulta/app/index.html#/login" target="_blank">Inovar Consulta</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Admin <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="addNoticia.php">Adicionar notícias</a>
                    <a href="addFicheiros.php">Adicionar ficheiros</a> 
                </div>
            </div>
        <?php } else { ?>
            <a href="inscricao.php">Inscrever-me</a>
            <a href="ficheiros.php">Ficheiros</a>
            <a href="contactos.php">Contactos</a>
            <div class="dropdown">
                <button class="dropbtn">Links <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="https://www.aebenavente.pt/" target="_blank">Site do Agrupamento</a>
                    <a href="https://inovar.aebenavente.pt/inovarconsulta/app/index.html#/login" target="_blank">Inovar Consulta</a>
                </div>
            </div>
    <?php } ?>
</div>