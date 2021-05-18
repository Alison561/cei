
<div class="container">
    <img src="<?= url ?>public/imagens/LOGO-CEI-SEM-FUNDO_300x100.png" alt="logo_cei">
    <div class="box">
    <h1>ENTRAR</h1>
    <?php if(isset($_POST['error'])){ ?>
        <span class="msg_erro"><strong><?= $_POST['error'] ?></strong></span>
    <?php } ?>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário" maxlength="50">
        <input type="password" name="senha" placeholder="Senha" maxlength="50">
        <input type="submit" value="ENTRAR">
    </form>
    </div>
</div>