<script>
    function formatarMoeda() {
    var elemento = document.getElementById('valor');
    var valor = elemento.value;
    valor = valor + '';
    valor = parseInt(valor.replace(/[\D]+/g,''));
    valor = valor + '';
    valor = valor.replace(/([0-9]{2})$/g, ".$1");
    elemento.value = valor;
    }
</script>
<div class="container">
    <img src="<?= url ?>public/imagens/LOGO-CEI-SEM-FUNDO_300x100.png" alt="logo_cei">
    <div class="box-caditem">
    <h1>CADASTRAR ITEM</h1>
        <form method="POST">
            <input type="text" name="item" placeholder="Nome do Item" maxlength="50">
            <input type="text" name="valor" id="valor" placeholder="Valor do Item" maxlength="50" onkeyup="formatarMoeda();">
            <input type="text" name="codigo" placeholder="Código do Item" maxlength="50">
            <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade do Item" maxlength="50">
            <!-- <input class="radio" type="radio" id="unidade" name="tipoitem" value="unidade">
            <label for="unidade">Unidade</label><br>
            <input class="radio" type="radio" id="pesavel" name="tipoitem" value="pesavel">
            <label for="pesavel">Pesável</label><br>-->
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
</div>