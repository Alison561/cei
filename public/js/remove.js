$('.exclui').click(function (e) { 
    var id = $(this).attr('id_produto')
    $(this).parent().parent().remove()
    $.ajax({
        type: "post",
        url: "http://localhost/cei/inventario",
        data: {'id': id},
        dataType: "json",
    }).done(function(data){
        console.log(data)
    });
    e.preventDefault();
});
$('.dd').change(function (e) { 
    var id = $(this).attr('id_produto')
    var qntd = $(this).val();
    $.ajax({
        type: "post",
        url: "http://localhost/cei/quantidade/inventario",
        data: {'id': id, 'qntd': qntd},
        dataType: "json",
    }).done(function(data){
        console.log(data)
    });
});

$('select').change(function (e) { 
    $('form').submit();
});