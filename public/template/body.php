<div id="myLinks" class="hide-mobile">
    <ul>
        <li>Empreendedorismo</li>
        <li>Revendas</li>
        <li>Semijóias</li>
        <li>Coleções</li>
        <li>Tendências</li>
        <li>Dicas</li>
    </ul>
</div>

<img class="center-fit-desk hide-mobile" src="./resources/images/banner_1.png">
<img class="center-fit hide-desk" src="./resources/images/banner_mobile.png">

<div class="command_buttons">
    <a href="#" class="button_incluir" onclick='openDialog()'>
        <i class="fa fa-plus" aria-hidden="true"></i>
        Incluir
    </a>
</div>

<div class="card-deck margins">
    <?php include '../public/app/posts.php' ?>
</div>

<div class="command_buttons">
    <a href="#" class="button_see_more">
        Veja mais posts
    </a>
</div>

<?php include '../public/app/dialogInsertPost.php' ?>