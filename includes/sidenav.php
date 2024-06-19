<div id="sidenavMenu" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="border: none;">&times;</a>
    <ul class="topList">
        <li>
            <a href="index.php#">Inicio</a>
        </li>
        <li>
            <a href="index.php#quemSomos">Quem somos?</a>
        </li>
        <li>
            <a href="index.php#sectionNoticias">Noticias</a>
        </li>
        <li>
            <a href="inscricao.php">Inscrição na Associação</a>
        </li>
        <li>
            <a href="ficheiros.php">Ficheiros</a>
        </li>
        <li>
            <a href="contactos.php">Contactos</a>
        </li>
    </ul>
    <ul class="bottomList">
        <?php
            if (isset($_SESSION['username'])) { ?>
                <li>
                    <a style="background-color: lightgray; border-color: lightgray;" href="addNoticia.php">Adicionar Noticias</a>
                </li>
                <li>
                    <a style="background-color: lightgray; border-color: lightgray;" href="addFicheiros.php">Adicionar Ficheiros</a>
                </li>
        <?php } ?>        
        <li>
            <a href="https://www.aebenavente.pt/" target="_blank">Site do Agrupamento</a>
        </li>
        <li>
            <a href="https://inovar.aebenavente.pt/inovarconsulta/app/index.html#/login" target="_blank">Inovar Consulta</a>
        </li>
    </ul>  
</div>