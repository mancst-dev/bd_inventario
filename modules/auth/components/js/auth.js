function validarUsuario() {
    var pUsuario = $('#txtUsuario').val();
    var pClave = "";

    if(pUsuario.trim() === "") return;

    $.ajax({
        type: 'POST',
        url: '../hooks/qry_authlogin.php',
        data: { usuario: pUsuario, clave: pClave },
        dataType: 'json'
    }).done(function(res) {
        if(res.success) {
            $("#txtNomUsuario").val(res.nombre);
        } else {
            $("#txtNomUsuario").val(res.message);
        }
    }).fail(function (jqXHR, textStatus, errorThrown){
        console.error("Error: " + textStatus + " " + errorThrown); 
    });
}

function validarClave() {
    var pUsuario = $('#txtUsuario').val();
    var pClave = $('#txtPass').val();

    $.ajax({
        type: 'POST',
        url: '../hooks/qry_authlogin.php',
        data: { usuario: pUsuario, clave: pClave },
        dataType: 'json'
    }).done(function(res) {
        if (res.success) {
            window.location.href = '../../../index.php'; 
        } else {
            alert(res.message || "Credenciales incorrectas");
        }
    }).fail(function (jqXHR, textStatus, errorThrown){
        alert("Ha ocurrido un error en la petición.");
    });
}

const currentYear = new Date().getFullYear();
document.getElementById('currentYear').textContent = currentYear;
