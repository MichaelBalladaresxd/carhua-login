$(document).ready(function(){
    $("#btnIniciarLogin").click(function(){
        $("#frmRegistro").addClass("d-none");
        $("#frmIngresar").removeClass("d-none");
    })

    $("#btnRegistrarUsuario").click(function(){
        $("#frmIngresar").addClass("d-none");
        $("#frmRegistro").removeClass("d-none");
    })

    $("#txtPasswordConfirmar").keyup(function(){
        var pass1 = $("#txtPassword").val();
        var pass2 = $("#txtPasswordConfirmar").val();

        if (pass2 == pass1) {
            $("#txtPassword").addClass('is-valid');
            $("#txtPasswordConfirmar").addClass('is-valid');
        } else {
            
            $("#txtPassword").removeClass('is-valid');
            $("#txtPasswordConfirmar").removeClass('is-valid');
        }


        
    })
})