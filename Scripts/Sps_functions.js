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
            alert(field);
            table += "<td>" + row[field] + "</td>";
        }
        table += "</tr>";
    });
    table += "</table>";
    $("#resultado").html(table);
}

//**************************REGISTRARSE****************************

function registrarse() {
    let Mat = document.getElementById('Matricula').value;
    let Nom = document.getElementById('Nombre').value;
    let Ape = document.getElementById('Apellido').value;
    let Email_t = document.getElementById('Email').value;
    let Pass = document.getElementById('Password').value;
    let C_pass = document.getElementById('Conf_password').value;

    if(Pass === C_pass){
        alert("hola");
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
                if(response == 0){
                    jQuery.gritter.add({
                        title: '!EXITO!',
                        text: 'Has sido registrado exitosamente',
                class_name: 'growl-success',
                            sticky: false,
                            time: ''
                    });
                    setTimeout(() => {  window.location.href = 'index.php';}, 2000);
                } else {
                    alert(response);
                    alert('El usuario ya existe');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
}

function BuscadorHerramienta() {
    let codigo_t = document.getElementById("inputCodigo").value;
    let herramienta_t = document.getElementById("inputNombreArticulo").value;
    let estado_t = document.getElementById("inputEstado").value;
    // Agrega más parámetros según sea necesario

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: { procedimiento: 'BuscadorHerramienta',
        Codigo: codigo_t,
        Herramienta: herramienta_t,
        Estado: estado_t,
    },
        success: function(response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            tableHerramienta(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function tableHerramienta(data) {
    let estatus;
    var table = "<table id='dataTable' class='table table-hover'>"+
    "<thead>"+
    "<tr >"+
        "<th>CODIGO</th>"+
        "<th>NOMBRE</th>"+
        "<th>FECHA</th>"+
        "<th>CANTIDAD TOTAL</th>"+
        "<th>CANTIDAD PRESTADA</th>"+
        "<th>ESTATUS</th>"+
     "</tr>"+
     "<thead> <tbody>";
    for(var i=0; i < data.length; i++) {
        var row = data[i];
        table += "<tr data-id = '"+row['ID_Herramienta']+"' onclick='panelinfo(this)'>"+
        "<td>" + row['COD_H'] + "</td>"+
        "<td>" + row['Nombre'] + "</td>"+
        "<td>" + row['Fecha_Registro'] + "</td>"+
        "<td>" + row['Cantidad_Total'] + "</td>"+
        "<td>" + row['Cantidad_Prestada'] + "</td>";
        if(row['Estatus'] == 1){
            estatus = "Alta";
        } else {
            estatus = "Baja";
        };
        table += "<td>" + estatus + "</td>"+
        "</tr>";
    };
    table += "</tbody></table>";
    $("#table").html(table);
}

function informacionHerramienta(id_t){

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: { procedimiento: 'InfoHerramienta',
        id: id_t,
    },
        success: function(response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            infodata(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function infodata(data) {
    let estatus;
    var row = data[0];
    document.getElementById('cod-m').textContent = row['COD_H'];
    document.getElementById('fech-m').textContent = row['Fecha_Registro'];
    document.getElementById('Herramienta-m').value = row['Nombre'];
    document.getElementById('descripcionEdit').value = row['Descripcion'];
    document.getElementById('CantidadEdit').value = row['Cantidad_Total'];
    document.getElementById('CantidadDis_Edit').value = row['Cantidad_Prestada'];
    if(row['Estatus'] == 1){
        estatus = "Alta";
    } else {
        estatus = "Baja";
    };
    
    document.getElementById('EstadoEdit').value = estatus;
}


function modificarHerramienta() {
    
    let id_t = document.getElementById('data-id').textContent;
    let herramienta = document.getElementById('Herramienta-m').value;
    let cantidad = document.getElementById('CantidadEdit').value;
    let Descripcion_t = document.getElementById('descripcionEdit').value;
    let estado_t = document.getElementById('EstadoEdit').value;
    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: { procedimiento: 'Mod_Herramienta',
        id: id_t,
        Nombre: herramienta,
        Descripcion: Descripcion_t,
        Cantidad_t: cantidad,
        Estatus: estado_t,
    },
        success: function(response) {
            if(response == 1){
                jQuery.gritter.add({
                    title: '!EXITO!',
                    text: 'Cambio realizado con exito',
                    class_name: 'growl-success',
                        sticky: false,
                        time: ''
                });
                document.getElementById('modal-mod').style.display = 'none';
                document.getElementById('btn-mod').style.display = 'none';
                document.getElementById('btn-active-mod').style.display = 'block';
                BuscadorHerramienta();
                EstadoCampos(true);
                //setTimeout(() => {  location.reload();}, 2000);
            } else {
                jQuery.gritter.add({
                    title: '!ERROR!',
                    text: 'Ocurrio un error de guardado',
                    class_name: 'growl-danger',
                        sticky: false,
                        time: ''
                });
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });    
}

function AgregarHerramienta() {
    
    let cod = document.getElementById('ID_cod').value;
    let herramienta = document.getElementById('Herramienta_N').value;
    let cantidad = document.getElementById('cantidad_t').value;
    let Descripcion_t = document.getElementById('Descripcion_t').value;
    let estado_t = document.getElementById('Estado_m').value;
    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: { procedimiento: 'AgregarHerramienta',
        Codigo: cod,
        Nombre: herramienta,
        Descripcion: Descripcion_t,
        Cantidad_t: cantidad,
        Estatus: estado_t,
    },
        success: function(response) {
            if(response == 0){
                jQuery.gritter.add({
                    title: '!EXITO!',
                    text: 'Se agrego la herramienta con exito',
                    class_name: 'growl-success',
                        sticky: false,
                        time: ''
                });
                document.getElementById('modal-agregar').style.display = 'none';
                BuscadorHerramienta();
                //setTimeout(() => {  location.reload();}, 2000);
            } else {
                jQuery.gritter.add({
                    title: '!ERROR!',
                    text: 'Ocurrio un error de guardado',
                    class_name: 'growl-danger',
                        sticky: false,
                        time: ''
                });
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });    
}