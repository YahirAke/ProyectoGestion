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
        success: function (response) {
            //Si es una tabla que devuelva esto
            //var data = JSON.parse(response)
            //buildTable(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
            if (response == 1) {
                jQuery.gritter.add({
                    title: '!EXITO!',
                    text: 'Has Iniciado Sesion Correctamente',
                    class_name: 'growl-success',
                    sticky: false,
                    time: ''
                });
                setTimeout(() => { window.location.href = 'Principal.php'; }, 2000);
            } else {
                alert('El usuario o contraseña es no es valido');
            }
        },
        error: function (xhr, status, error) {
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
    data.forEach(function (row) {
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

    if (Pass === C_pass) {
        alert("hola");
        $.ajax({
            url: "Cn/cn.php",
            type: "POST",
            data: {
                procedimiento: 'Registrarse',
                Matricula: Mat,
                Nombre: Nom,
                Apellido: Ape,
                Email: Email_t,
                Password: Pass
            },
            success: function (response) {
                if (response == 0) {
                    jQuery.gritter.add({
                        title: '!EXITO!',
                        text: 'Has sido registrado exitosamente',
                        class_name: 'growl-success',
                        sticky: false,
                        time: ''
                    });
                    setTimeout(() => { window.location.href = 'index.php'; }, 2000);
                } else {
                    alert(response);
                    alert('El usuario ya existe');
                }
            },
            error: function (xhr, status, error) {
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
        data: {
            procedimiento: 'BuscadorHerramienta',
            Codigo: codigo_t,
            Herramienta: herramienta_t,
            Estado: estado_t,
        },
        success: function (response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            tableHerramienta(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function tableHerramienta(data) {
    let estatus;
    var table = "<table id='dataTable' class='table table-hover'>" +
        "<thead>" +
        "<tr >" +
        "<th>CODIGO</th>" +
        "<th>NOMBRE</th>" +
        "<th>FECHA</th>" +
        "<th>CANTIDAD TOTAL</th>" +
        "<th>CANTIDAD PRESTADA</th>" +
        "<th>ESTATUS</th>" +
        "</tr>" +
        "<thead> <tbody>";
    if (data.length == 0) {
        table += "<tr>" +
            "<td colspan='6'>No se encontraron resultados.</td>" +
            "</tr>";
    }
    for (var i = 0; i < data.length; i++) {
        var row = data[i];
        table += "<tr data-id = '" + row['ID_Herramienta'] + "' onclick='panelinfo(this)'>" +
            "<td>" + row['COD_H'] + "</td>" +
            "<td>" + row['Nombre'] + "</td>" +
            "<td>" + row['Fecha_Registro'] + "</td>" +
            "<td>" + row['Cantidad_Total'] + "</td>" +
            "<td>" + row['Cantidad_Prestada'] + "</td>";
        if (row['Estatus'] == 1) {
            estatus = "Alta";
        } else {
            estatus = "Baja";
        };
        table += "<td>" + estatus + "</td>" +
            "</tr>";
    };
    table += "</tbody></table>";
    $("#table").html(table);
}

function informacionHerramienta(id_t) {

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'InfoHerramienta',
            id: id_t,
        },
        success: function (response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            infodata(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function infoHerramienta_Prestamo(id_t){
    
    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'InfoHerramienta_Prestamo',
            id: id_t,
        },
        success: function (response) {

            var data = JSON.parse(response);
            tableHerramientaPrestamos(data);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function tableHerramientaPrestamos(data) {
    var table = "";
    table = "<table id='' class='table-fixed w-full border-collapse border border-blue-950 '>" +
        "<thead>" +
        "<tr >" +
        "<th>ID</th>" +
        "<th>MATRICULA</th>" +
        "<th>CANTIDAD</th>" +
        "</tr>" +
        "<thead> <tbody>";
    if (data.length == 0) {
        table += "<tr>" +
            "<td colspan='9'>No se encontraron resultados.</td>" +
            "</tr>";
    }
    for (var i = 0; i < data.length; i++) {
        var row = data[i];
        table += "<tr>" +
            "<td>" + row['ID'] + "</td>" +
            "<td>" + row['Matricula'] + "</td>" +
            "<td>" + row['Cantidad'] + "</td>" +
            "</tr>";
    };
    table += "</tbody></table>";
    $("#Tablaherramienta").html(table);
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
    if (row['Estatus'] == 1) {
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
        data: {
            procedimiento: 'Mod_Herramienta',
            id: id_t,
            Nombre: herramienta,
            Descripcion: Descripcion_t,
            Cantidad_t: cantidad,
            Estatus: estado_t,
        },
        success: function (response) {
            if (response == 1) {
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
        error: function (xhr, status, error) {
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
        data: {
            procedimiento: 'AgregarHerramienta',
            Codigo: cod,
            Nombre: herramienta,
            Descripcion: Descripcion_t,
            Cantidad_t: cantidad,
            Estatus: estado_t,
        },
        success: function (response) {
            if (response == 0) {
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
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function BuscadorPrestamo(event) {
    let folio_t = "";
    let matricula_t;
    let nombre_t;
    let fecha_p;
    let fecha_d;
    let estado_t;
    if (event == 0) {
        folio_t = document.getElementById("inputFolio").value;
        matricula_t = document.getElementById("inputMatricula").value;
        nombre_t = document.getElementById("inputNombre").value;
        fecha_p = document.getElementById("inputFechaP").value;
        fecha_d = document.getElementById("inputFechaD").value;
        estado_t = document.getElementById("inputEstado").value;
    } else {
        folio_t = "";
        matricula_t = "";
        nombre_t = "";
        fecha_p = "";
        fecha_d = "";
        estado_t = "Alta";
    }

    // Agrega más parámetros según sea necesario

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'BuscadorPrestamo',
            Folio: folio_t,
            Matricula: matricula_t,
            Nombre: nombre_t,
            FechaP: fecha_p,
            FechaD: fecha_d,
            Estado: estado_t,
        },
        success: function (response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            tablePrestamos(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function tablePrestamos(data) {
    let estatus;
    var table = "";
    $("#table").html(table);
    table = "<table id='dataTable' class='table table-hover'>" +
        "<thead>" +
        "<tr >" +
        "<th>ID</th>" +
        "<th>MATRICULA</th>" +
        "<th>NOMBRE</th>" +
        "<th>EMAIL</th>" +
        "<th>TIPO</th>" +
        "<th>FECHA DE REGISTRO</th>" +
        "<th>FECHA DE ENTREGA</th>" +
        "<th>FECHA DE DEVOLUCIÓN</th>" +
        "<th>ESTATUS</th>" +
        "</tr>" +
        "<thead> <tbody>";
    if (data.length == 0) {
        table += "<tr>" +
            "<td colspan='9'>No se encontraron resultados.</td>" +
            "</tr>";
    }
    for (var i = 0; i < data.length; i++) {
        var row = data[i];
        table += "<tr data-id='" + row['ID_Prestamo'] + "' data-tipo='" + row['Tipo'] + "' onclick='panelprestamo(this);'>" +
            "<td>" + row['ID_Prestamo'] + "</td>" +
            "<td>" + row['Matricula'] + "</td>" +
            "<td>" + row['Nom_Usuario'] + "</td>" +
            "<td>" + row['Email'] + "</td>" +
            "<td>" + row['Tipo'] + "</td>" +
            "<td>" + row['R_Fecha'] + "</td>" +
            "<td>" + row['F_Entrega'] + "</td>";
        if (row['F_Devolucion'] == null) {
            table += "<td>No Devuelto</td>";
        } else {
            table += "<td>" + row['F_Devolucion'] + "</td>";
        }
        if (row['estatus_p'] == 1) {
            estatus = "Alta";
        } else {
            estatus = "Baja";
        };
        table += "<td>" + estatus + "</td>" +
            "</tr>";
    };
    table += "</tbody></table>";
    $("#table").html(table);
}

function BuscadorListaHerramienta() {
    let codigo_t = document.getElementById("inputCodigo").value;
    let herramienta_t = document.getElementById("inputNombreArticulo").value;
    // Agrega más parámetros según sea necesario

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'BuscadorHerramienta',
            Codigo: codigo_t,
            Herramienta: herramienta_t,
            Estado: 'Alta',
        },
        success: function (response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            tableListaHerramienta(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function tableListaHerramienta(data) {
    var table = "<table id='tab-lista' class='table-data table-dark table-fixed border border-collapse w-full border border-blue-950'>" +
        "<thead>" +
        "<tr class='text-center'>" +
        "<th>CODIGO</th>" +
        "<th>NOMBRE</th>" +
        "<th>CANTIDAD DISPONIBLE</th>" +
        "</tr>" +
        "<thead> <tbody>";
    if (data.length == 0) {
        table += "<tr>" +
            "<td colspan='3'>No se encontraron resultados.</td>" +
            "</tr>";
    }
    for (var i = 0; i < data.length; i++) {
        var row = data[i];
        table += "<tr id = '" + row['COD_H'] + "' onclick='seleccionarHerramienta(this);'>" +
            "<td class='text-center'>" + row['COD_H'] + "</td>" +
            "<td>" + row['Nombre'] + "</td>" +
            "<td class='text-center'>" + row['Cantidad_Disponible'] + "</td>" +
            "</tr>";
    };
    table += "</tbody></table>";
    $("#table-listaHerramienta").html(table);
}

function VerificarPrestamo() {

    let Mat = document.getElementById('M_text').value;
    //let Nom = document.getElementById('N_text').value;
    //let Dias = document.getElementById('D_text').value;

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'verificacion_prestamo',
            Matricula: Mat,
        },
        success: function (response) {
            if (response == 1) {
                SolicitarPrestamo();
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
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function SolicitarPrestamo() {
    let Mat = document.getElementById('M_text').value;
    let Dias = document.getElementById('D_text').value;
    let tabla = document.getElementById('tab-selec');
    if (Dias != 0 && tabla.rows.length !== 0) {
        for (var i = 2; i < tabla.rows.length; i++) {
            row = tabla.rows[i];
            // Recorre cada celda de la fila
            let cod = row.cells[0].innerHTML;
            let cant = row.cells[2].innerHTML;
            alert();
            $.ajax({
                url: "Cn/cn.php",
                type: "POST",
                data: {
                    procedimiento: 'SolicitarPrestamo',
                    Matricula: Mat,
                    Tipo: 'Herramientas',
                    Plazo: Dias,
                    ID_H: cod,
                    Cantidad: cant,
                },
                success: function (response) {
                    alert(response);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }

        jQuery.gritter.add({
            title: '!Exito!',
            text: 'El prestamo ha sido realizado',
            class_name: 'growl-success',
            sticky: false,
            time: ''
        });

        document.getElementById('modal-prestar').style.display = 'none';

    } else {
        jQuery.gritter.add({
            title: '!ERROR!',
            text: 'Verifica bien los datos ingresados',
            class_name: 'growl-danger',
            sticky: false,
            time: ''
        });
    }

}

function informacionPrestamo(id_t) {

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'InfoPrestamo',
            id: id_t,
        },
        success: function (response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            infodataPrestamo(data);
            informacionHerramientaPrestamo(id_t);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function informacionHerramientaPrestamo(id_t) {
    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'InfoHerramientaPrestamo',
            id: id_t,
        },
        success: function (response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            infoHPrestamo(data);
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
}

function SolicitarPrestamoLocker() {
    let Mat = document.getElementById('Herramienta_N').value;
    let n_lock = document.getElementById('data_id').innerHTML;

    $.ajax({
        url: "Cn/cn.php",
        type: "POST",
        data: {
            procedimiento: 'PrestamoLocker',
            Matricula: Mat,
            Locker: n_lock
        },
        success: function (response) {
            alert(response);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });

}

function DevolverPrestamo() {
    var id = document.getElementById('ID_Prestamo').value;
    var Mat = document.getElementById('Mat_text').textContent;
    var tabla = document.getElementById('tabla-info');
    var flag = true;
    if (tabla.rows.length !== 0) {
        for (var i = 1; i < tabla.rows.length; i++) {
            row = tabla.rows[i];
            let cod = row.cells[0].innerHTML;
            let cant = row.cells[2].innerHTML;
            if(i !== 1){
                flag = false;
            } else {
                flag = true;
            }
            $.ajax({
                url: "Cn/cn.php",
                type: "POST",
                data: {
                    procedimiento: 'DevolverPrestamo',
                    ID: id,
                    Matricula: Mat,
                    Codigo: cod,
                    Cantidad: cant,
                    Flag: flag,

                },
                success: function (response) {
                    //Si es una tabla que devuelva esto
                    //var data = JSON.parse(response);
                    console.log(response);
                    //Si es un echo que devuelva
                    //$("#resultado").html(response);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }

        jQuery.gritter.add({
            title: '!Exito!',
            text: 'El prestamo ha sido realizado',
            class_name: 'growl-success',
            sticky: false,
            time: ''
        });

        document.getElementById('modal-modificar').style.display = 'none';
        BuscadorPrestamo(1);
    } else {
        jQuery.gritter.add({
            title: '!ERROR!',
            text: 'Verifica bien los datos ingresados',
            class_name: 'growl-danger',
            sticky: false,
            time: ''
        });
    }
}