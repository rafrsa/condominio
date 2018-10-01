$(document).ready(function() {
    $("#cadastro-organizacao").click(function(){
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: "POST",
            url: "contactHistory/filterHistoryContent",
            data: {
            }
        }).done(function( msg ) {
            alert(msg);
        });
    });
});
