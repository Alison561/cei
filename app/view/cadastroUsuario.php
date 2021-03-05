<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR USUÁRIO</title>
    <link rel="icon" href="imagens/icone-CEI.png" type="image/png" >
    <link rel ="stylesheet" href="css/estilo.css">
</head>
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
<body>
<div class="container">
    <img src="imagens/LOGO-CEI-SEM-FUNDO_300x100.png" alt="logo_cei">
    <div class="box-cad">
    <h1>CADASTRAR USUÁRIO</h1>
        <form method="POST" action="#" >
            <input type="text" name="nomeCompleto" placeholder="Nome Completo" maxlength="100">
            <input type="text" name="cpf" placeholder="CPF" maxlength="14" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$" OnKeyPress="mascaraCPF(this)">
            <input type="text" name="usuariocad" placeholder="Usuário" maxlength="50">
            <input type="password" name="senhacad" placeholder="Senha" maxlength="50">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
</div>    
</body>
</html>