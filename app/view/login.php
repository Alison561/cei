<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="imagens/icone-CEI.png" type="image/png" >
    <link rel ="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container">
    <img src="imagens/LOGO-CEI-SEM-FUNDO_300x100.png" alt="logo_cei">
    <div class="box">
    <h1>ENTRAR</h1>
        <form method="POST" action="validarLogin.php">
            <input type="text" name="usuario" placeholder="Usuário" maxlength="50">
            <input type="password" name="senha" placeholder="Senha" maxlength="50">
            <input type="submit" value="ENTRAR">
            <span class="msg_erro"><strong>USUÁRIO INVÁLIDO</strong></span>
        </form>
    </div>
</div>    
</body>
</html>