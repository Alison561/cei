$('#cod').keyup(function (e) { 
    if (e.keyCode == 13) {
        var va = $(this).val()
        let qntf = va.split('-')
        $.ajax({
            type: "post",
            url: "http://localhost/cei/caixa",
            data: {'code': va, 'qntd': qntf[1]},
            dataType: "json",
        }).done(function(data){
            $(".p").append('<br>');
            $(".p").append(data.nome);
            let vari = $("#preco").text();
            let preco = data.preco * qntf[1]
            vari = parseInt(vari) + preco 
            $("#preco").text(vari);
        });
    }
    if (e.keyCode == 114) {
        window.location.href = 'http://localhost/cei/caixa'
    }
});