function enviarFormulario(event) {
    event.preventDefault()
}

//***************INICIO DE SESION ***************************
function Iniciar() {
    let p_usuario = document.getElementById("usuario").value;
    let p_Password = document.getElementById("password").value;
    // Agrega más parámetros según sea necesario

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: { procedimiento: 'InicioSesion', Usuario: p_usuario, Password: p_Password },
        success: function(response) {
            //Si es una tabla que devuelva esto
            //var data = JSON.parse(response)
            //buildTable(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
            if(response == 1){
                jQuery.gritter.add({
                    title: '!EXITO!',
                    text: 'Has Iniciado Sesion Correctamente',
            class_name: 'growl-success',
                        sticky: false,
                        time: ''
                });
                setTimeout(() => {  window.location.href = 'Principal.html';}, 2000);
            } else {
                alert('El usuario o contraseña es no es valido');
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function buildTable(data) {
    var table = "<table border='1'>";
    table += "<tr>";
    for (var header in data[0]) {
        table += "<th>" + header + "</th>";
    }
    table += "</tr>";
    data.forEach(function(row) {
        table += "<tr>";
        for (var field in row) {
            table += "<td>" + row[field] + "</td>";
        }
        table += "</tr>";
    });
    table += "</table>";
    $("#resultado").html(table);
}

//**************************REGISTRARSE****************************

function registrarse() {
    alert("hola");
    let Mat = document.getElementById('Matricula').value;
    let Nom = document.getElementById('Nombre').value;
    let Ape = document.getElementById('Apellido').value;
    let Email_t = document.getElementById('Email').value;
    let Pass = document.getElementById('Password').value;
    let C_pass = document.getElementById('Conf_password').value;

    if(Pass === C_pass){
        $.ajax({
            url: "Cn/cn.php",
            type: "POST",
            data: { procedimiento: 'Registrarse',
            Matricula: Mat,
            Nombre: Nom,
            Apellido: Ape,
            Email: Email_t,
            Password: Pass
            },
            success: function(response) {
                if(response == 1){
                    jQuery.gritter.add({
                        title: '!EXITO!',
                        text: 'Has sido registrado exitosamente',
                class_name: 'growl-success',
                            sticky: false,
                            time: ''
                    });
                    setTimeout(() => {  window.location.href = 'index.php';}, 2000);
                } else {
                    alert('El usuario o contraseña es no es valido');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
}