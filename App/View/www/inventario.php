<div class="container">
    <header class="headerhome">
        <img src="<?= url ?>public/imagens/LOGO-CEI-SEM-FUNDO_600x324.png" alt="logo_cei" class="logo">  
        <div class="div-select">   
    </header>
    <div class="box-relatorio">
        <?php foreach ($this->produtoS() as $value) { ?> 
            <div class="inventario">
                <div class="flex">
                    <h2><?= $value['nome'] ?></h2>
                    <button class="exclui" id_produto="<?= $value['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </div>
                <input class="dd" style="text-align: center;" type="number" name="qntd" id_produto="<?= $value['id'] ?>" value="<?= $value['qnt'] ?>">
                <div class="flex">
                    <p>R$ <?= $value['preco'] ?></p>
                    <p><?= $value['data'] ?></p>
                </div>
            </div>
        <?php } ?>
        <!-- <iframe width=100% height=100% src="" name="frame" frameborder="0"></iframe> -->
    </div>
</div>
<script src="<?= url ?>public/js/remove.js"></script>