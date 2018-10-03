$(document).ready(function() {
    $("#cadastro-organizacao").click(function(){
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: "POST",
            url: "organizacao/listar",
            data: {
            }
        }).done(function(msg) {
            $("#content-site-global").html(msg);
        });
    });    
});

function newOrganization(){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: "POST",
        url: "organizacao/nova",
        data: {
        }
    }).done(function(msg) {
        $("#content-site-global").html(msg);
    });
}

function insertOrganization(){
    let nomeOrg = $("#name-org").val();

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: "POST",
        url: "organizacao/inserir",
        data: {
            nomeOrg: nomeOrg
        }
    }).done(function(msg) {
        if(msg == "true"){
            alert("Organização inserida com sucesso!");
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                method: "POST",
                url: "organizacao/listar",
                data: {
                }
            }).done(function(msg) {
                $("#content-site-global").html(msg);
            });
        }        
    });
}

function editOrganization(id){
    let nomeOrg = $("#name-org").val();

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: "POST",
        url: "organizacao/atualizar",
        data: {
            nomeOrg: nomeOrg,
            idOrg: id
        }
    }).done(function(msg) {
        if(msg == "true"){
            alert("Organização atualizada com sucesso!");
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                method: "POST",
                url: "organizacao/listar",
                data: {
                }
            }).done(function(msg) {
                $("#content-site-global").html(msg);
            });
        }        
    });
}

function gridActionsOrgs(id, type){
    if(type == "edit"){
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: "POST",
            url: "organizacao/editar",
            data: {
                idOrg: id
            }
        }).done(function(msg) {            
            $("#content-site-global").html(msg);
        });
    }else if(type == "delete"){
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: "POST",
            url: "organizacao/deletar",
            data: {
                idOrg: id
            }
        }).done(function(msg) {            
            if(msg == "true"){            
                alert("Organização deletada com sucesso!");
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: "POST",
                    url: "organizacao/listar",
                    data: {
                    }
                }).done(function(msg) {
                    $("#content-site-global").html(msg);
                });
            }
        });
    }
}

function backListOrg(){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: "POST",
        url: "organizacao/listar",
        data: {
        }
    }).done(function(msg) {
        $("#content-site-global").html(msg);
    });
}