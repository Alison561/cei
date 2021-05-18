<script>
    function mascaraCPF(cpf){
        if(cpf.value.length == 3)
        cpf.value = cpf.value + '.'; 
        if(cpf.value.length == 7)
        cpf.value = cpf.value + '.'; 
        if(cpf.value.length == 11)
        cpf.value = cpf.value + '-';
    }
</script>
<div class="container">
    <img src="<?= url ?>public/imagens/LOGO-CEI-SEM-FUNDO_300x100.png" alt="logo_cei">
    <div class="box-cad">
    <h1>CADASTRAR USUÁRIO</h1>
        <form method="POST">
            <input type="text" name="nomeCompleto" placeholder="Nome Completo" maxlength="100">
            <input type="text" name="cpf" placeholder="CPF" maxlength="14" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$" OnKeyPress="mascaraCPF(this)">
            <input type="text" name="usuario" placeholder="Usuário" maxlength="50">
            <input type="password" name="senha" placeholder="Senha" maxlength="50">
            <input type="submit" value="CADASTRAR">
        </form>
        <?php if(isset($_POST['error'])){ ?>
            <span class="msg_erro"><strong><?= $_POST['error'] ?></strong></span>
        <?php } ?>
    </div>
</div>