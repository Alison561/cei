<div class="container">
    <header class="headerhome">
        <img src="<?= url ?>public/imagens/LOGO-CEI-SEM-FUNDO_600x324.png" alt="logo_cei" class="logo">  
        <!-- <div class="div-select">    -->
        <form method="post">
            <select name="select" class="select">      
                <option>Selecione</option>      
                <option value="remove" <?php if(@$_POST['select'] == 'remove') echo 'selected';?> target="frame">RELATÓRIO DE SAÍDA</option>     
                <option value="add" <?php if(@$_POST['select'] == 'add') echo 'selected';?> target="frame">RELATÓRIO DE ENTRADA</option>     
                <option value="venda" <?php if(@$_POST['select'] == 'venda') echo 'selected';?> target="frame">RELATÓRIO DE VENDA</option>     
            </select>  
        </form>
    </header>
    <div class="box-relatorio">
    <?php if (isset($_POST['select'])) {
        foreach ($this->select($_POST['select']) as $value) { ?> 
            <div class="inventario">
                <div class="flex">
                    <h2><?= $value['nome'] ?>0</h2>
                </div>
                <input style="text-align: center; color:black;" disabled type="number" value="<?= $value['qnt'] ?>">
                <div class="flex">
                    <p>Quatidade: <?= $value['qntd'] ?></p>
                    <p><?= $value['data'] ?></p>
                </div>
            </div>
        <?php } }?>
    </div>
</div>
<script src="<?= url ?>public/js/remove.js"></script>