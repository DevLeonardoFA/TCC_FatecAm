function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

var estados = [];

function loadEstados(element) {
    if (estados.length > 0) {
        putEstados(element);
        $(element).removeAttr('disabled');
    } else {
        $.ajax({
            url: 'https://api.myjson.com/bins/enzld',
            method: 'get',
            dataType: 'json',
            beforeSend: function() {
                $(element).html('<option>Carregando...</option>');
            }
        }).done(function(response) {
            estados = response.estados;
            putEstados(element);
            $(element).removeAttr('disabled');
        });
    }
}

$(document).scroll(function(){
    if($(document).scrollTop() > 70 ){
        $('header').addClass('charge-header');
    }else{
        $('header').removeClass('charge-header');
    }
});

function putEstados(element) {

    var label = $(element).data('label');
    label = label ? label : 'Estado';

    var options = '<option value="">' + label + '</option>';
    for (var i in estados) {
        var estado = estados[i];
        options += '<option value="' + estado.sigla + '">' + estado.nome + '</option>';
    }

    $(element).html(options);
}

function loadCidades(element, estado_sigla) {
    if (estados.length > 0) {
        putCidades(element, estado_sigla);
        $(element).removeAttr('disabled');
    } else {
        $.ajax({
            url: theme_url + '/assets/json/estados.json',
            method: 'get',
            dataType: 'json',
            beforeSend: function() {
                $(element).html('<option>Carregando...</option>');
            }
        }).done(function(response) {
            estados = response.estados;
            putCidades(element, estado_sigla);
            $(element).removeAttr('disabled');
        });
    }
}

function putCidades(element, estado_sigla) {
    var label = $(element).data('label');
    label = label ? label : 'Cidade';

    var options = '<option value="">' + label + '</option>';
    for (var i in estados) {
        var estado = estados[i];
        if (estado.sigla != estado_sigla)
            continue;
        for (var j in estado.cidades) {
            var cidade = estado.cidades[j];
            options += '<option value="' + cidade + '">' + cidade + '</option>';
        }
    }
    $(element).html(options);
}

document.addEventListener('DOMContentLoaded', function() {
    loadEstados('#uf');
    $(document).on('change', '#uf', function(e) {
        var target = $(this).data('target');
        if (target) {
            loadCidades(target, $(this).val());
        }
    });
}, false);