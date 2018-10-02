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
