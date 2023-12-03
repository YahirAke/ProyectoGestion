<!DOCTYPE html>
<html lang="en">

<head>
    <title>Información Herramienta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/herramienta.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.gritter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="Scripts/jquery-3.7.1.js"></script>
</head>

<body>
    <?php
    include 'leftpanel.php';
    ?>

    <div class="panel-main flex flex-col gap-3">
        <div class="barra-secundaria">
            <h1 class="title-seccion">Prestamos</h1>
        </div>

        <div class="flex flex-row gap-3">
            <div class="flex flex-col">
                <label for="inputCodigo" class="label-text">ID</label>
                <input type="number" class="campo_B p-1 border-2 border-gray-300" id="inputFolio" placeholder="">
            </div>

            <div class="flex flex-col">
                <label for="inputCodigo" class="label-text">Matrícula</label>
                <input type="number" class="campo_B no-spin p-1 border-2 border-gray-300" id="inputMatricula"
                    placeholder="">
            </div>

            <div class="flex flex-col">
                <label for="inputCodigo" class="label-text">Nombre</label>
                <input type="text" class="campo_B p-1 border-2 border-gray-300" id="inputNombre" placeholder="">
            </div>

            <div class="flex flex-col w-32">
                <label for="inputCodigo" class="label-text">Estado</label>
                <select id="inputEstado" class="campo_B p-1 border-2 border-gray-300 text-center">
                    <option value="Alta">Alta</option>
                    <option value="Baja">Baja</option>
                </select>
            </div>
        </div>

        <div class="flex flex-row gap-3">
            <div class="flex flex-col">
                <label for="inputCodigo" class="label-text">Fecha Prestamos</label>
                <input type="date" class="campo_B p-1 border-2 border-gray-300" id="inputFechaP" placeholder="">
            </div>

            <div class="flex flex-col">
                <label for="inputCodigo" class="label-text">Fecha Entrega</label>
                <input type="date" class="campo_B p-1 border-2 border-gray-300" id="inputFechaD" placeholder="">
            </div>
        </div>
        <div class="flex flex-row justify-between gap-3 w-full">
            <div class="w-auto">
                <button id="btnBuscar" onclick="BuscadorPrestamo(0);"
                    class="btn-gray btn-s py-1 px-20 text-black">Buscar</button>
                <button id="btnBuscar" onclick="restablecer();"
                    class="btn-gray btn-s py-1 px-20 text-black">Restablecer</button>
            </div>
            <div class="w-auto">
                <button id="btnSolicitar" class="btn-primary btn-s py-1 px-7 relative" style="right: 0px">Solicitar
                    prestamo</button>
            </div>
        </div>

        <div class="panel z-depth-1">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <div id="table" class="table-data table-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-prestar" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Contenido del modal -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-3/4">
                <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="w-full px-10 h-24 bg-blue-950 grid content-center">
                        <h1 class="text-5xl text-center text-white title-seccion"> Solicitar préstamo de herramientas
                        </h1>
                    </div>
                </div>

                <!-- Paneles -->
                <div class="w-full flex flex-row bg-white gap-x-5 py-5 px-5">

                    <!-- Izquierda -->

                    <div class="w-1/2 bg-white flex flex-col py-5 px-4 gap-y-5 border-2 border-gray-300">

                        <div class="w-full">

                            <h3 class="sub-title">Ingresa los datos:</h3>

                        </div>

                        <div class=" w-full flex flex-row gap-x-5">
                            <div class="flex flex-row w-2/3 gap-x-2">
                                <div class="w-full">
                                    <h2 class="label-text"> Matrícula*</h2>
                                    <input type="text" name="Mat" id="M_text"
                                        class="campo_B p-1 border-2 border-gray-300">
                                </div>
                                <div class="w-full">
                                    <h2 class="label-text">Días de préstamo*</h2>
                                    <input type="number" name="" id="D_text"
                                        class="campo_B p-1 border border-2 border-gray-300">
                                </div>
                            </div>

                        </div>


                        <!-- Tabla -->

                        <div class="w-full flex flex-col">
                            <div>

                                <h3 class="sub-title">Herramientas seleccionadas</h3>

                            </div>

                            <div class="w-full h-96 overflow-y-scroll">

                                <table id="tab-selec"
                                    class="table-data table-dark table-fixed w-full border-collapse border border-blue-950">
                                    <thead>
                                        <tr class="text-center">
                                            <th>CODIGO</th>
                                            <th>HERRAMIENTA</th>
                                            <th>CANTIDAD</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Derecha-->
                    <div class="w-1/2 bg-white grid py-5 px-4 border-2 border-gray-300">
                        <div class=" w-full flex flex-col gap-x-5">
                            <div>
                                <h3 class="sub-title">Lista de Herramientas</h3>
                            </div>
                            <h2 class="sub-title">Buscador</h2>
                            <div class="flex flex-row w-full gap-x-3">
                                <div class="w-1/3">
                                    <h2 class="label-text"> Codigo*</h2>
                                    <input type="text" id="inputCodigo" oninput="BuscadorListaHerramienta();"
                                        class="campo_B upcase p-1 border-2 border-gray-300 w-full">
                                </div>

                                <div class="w-2/3">
                                    <h2 class="label-text">Herramienta</h2>
                                    <input type="text" id="inputNombreArticulo" oninput="BuscadorListaHerramienta();"
                                        class=" w-full campo_B p-1 border border-2 border-gray-300 w-full">
                                </div>
                            </div>
                        </div>
                        <!-- Tabla -->
                        <div class="w-full flex flex-col">
                            <div id="table-listaHerramienta" class="w-full h-96 overflow-y-scroll">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Parte final (Botones) -->
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                    <button id="btnAgregar" onclick="VerificarPrestamo();" class="btn-primary btn-s py-1 px-7 w-1/4">
                        Solicitar
                    </button>
                    <button id="closeModal" class="btn-gray btn-s py-1 px-7 w-1/4 text-black">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-cantidad" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Contenido del modal -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-1/4">
                <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="w-full px-10 h-16 bg-blue-950 grid content-center">
                        <h3 class="sub-title text-center text-white">Seleccionar cantidad de herramientas</h3>
                    </div>
                </div>
                <div class="flex flex-col bg-white gap-y-5 py-5 px-10">
                    <div class="w-full flex flex-row gap-x-2">
                        <h2 class="label-text">Codigo: <span id="c_h">0</span></h2>
                        <h2 class="label-text">Cantidad Disponible: <span id="ct_h">0</span></h2>
                    </div>
                    <div class="w-full flex flex-col gap-x-2">
                        <h2 class="label-text">Herramienta: <br><span id="n_h"></span></h2>
                    </div>
                    <div class="w-full flex flex-col">
                        <h2 class="label-text">Cantidad*</h2>
                        <input type="number" name="cantidad_h" id="cant_h" value="1" min="1" max="0"
                            class="campo_B p-1 border-2 border-gray-300">
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                    <button id="btnSelect" onclick="seleccionar();" class="btn-primary btn-s py-1 px-7 w-2/4">
                        Agregar
                    </button>
                    <button id="closeModal-cantidad" class="btn-gray btn-s py-1 px-7 w-2/4 text-black">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-modificar" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Contenido del modal -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-1/3">
                <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="w-full px-10 h-24 bg-blue-950 grid content-center">
                        <h1 class="text-5xl text-center text-white title-seccion"> Información del préstamo
                        </h1>
                    </div>
                </div>

                <!-- Paneles -->
                <div class="w-full flex flex-row bg-white gap-x-5 py-5 px-5">

                    <!-- Izquierda -->
                    <input id="ID_Prestamo" type="text" class="hidden" />
                    <div class="w-full bg-white flex flex-col py-5 px-4 gap-y-5 border-2 border-gray-300">

                        <div class="w-full">

                            <h3 class="sub-title">Datos del alumno:</h3>

                        </div>

                        <div class=" w-full flex flex-row gap-x-5">
                            <div class="flex flex-row w-full gap-x-2">
                                <div class="w-full">
                                    <h2 class="label-text"> Matrícula*</h2>
                                    <label id="Mat_text" class="text-info"></label>
                                </div>
                                <div class="w-full">
                                    <h2 class="label-text">Días de préstamo*</h2>
                                    <label id="Dias_text" class="text-info"></label>
                                </div>
                            </div>

                        </div>


                        <!-- Tabla -->

                        <div class="w-full flex flex-col">
                            <div>

                                <h3 class="sub-title">Herramientas seleccionadas</h3>

                            </div>

                            <div id="table-infoHerramienta" class="w-full h-96 overflow-y-scroll">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Parte final (Botones) -->
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                    <button id="btndevolver" onclick="DevolverPrestamo();" class="btn-primary btn-s py-1 px-7 w-1/4">
                        Devolver
                    </button>
                    <button id="closeModalMod" class="btn-gray btn-s py-1 px-7 w-1/4 text-black">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-locker" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Contenido del modal -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-1/3">
                <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="w-full px-10 h-16 bg-blue-950 grid content-center">
                        <h3 class="text-3xl text-center text-white title-seccion">Informacion Locker</h3>
                        <input id="ID_Locker" type="text" class="hidden" />
                    </div>
                </div>
                <div class="flex flex-row bg-white gap-y-5 py-5 px-10">
                    <div class="w-full flex flex-col gap-y-2 w-1/3">
                        <h2 class="label-text">Codigo: <span id="Codigo_lock">0</span></h2>
                        <h2 class="label-text">Matricula: <span id="Matricula_lock">20070023</span></h2>
                        <h2 class="label-text">Fecha Registro: <span id="FechaR_lock">0</span></h2>
                        <h2 class="label-text">Fecha Devolucion: <span id="FechaD_lock"></span></h2>
                        <h2 class="label-text">Estatus locker: <span id="Estatus_lock"></span></h2>
                    </div>
                    <div class="flex flex-row items-center w-2/3">
                        <div class="w-1/2 h-auto grid justify-items-end">
                            <div>
                                <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                            </div>
                        </div>

                        <div class="w-1/2 h-auto  justify-items-start">
                            <div>
                                <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8" style="display: none">
                                <img src="imagenes/R.png" alt="Casillero" class="object-contain h-8">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                    <button id="btndevolverlock" onclick="DevolverPrestamoLocker();" class="btn-primary btn-s py-1 px-7 w-2/4">
                        Devolver
                    </button>
                    <button id="closeModal-locker" class="btn-gray btn-s py-1 px-7 w-2/4 text-black">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="Scripts/Sps_functions.js"></script>
    <script src="Scripts/jquery.gritter.min.js"></script>
    <script>
        BuscadorPrestamo(1);

        function restablecer() {
            document.getElementById("inputFolio").value = "";
            document.getElementById("inputMatricula").value = "";
            document.getElementById("inputNombre").value = "";
            document.getElementById("inputFechaP").value = "";
            document.getElementById("inputFechaD").value = "";
            document.getElementById("inputEstado").value = "";

            BuscadorPrestamo(1);
        }

        document.getElementById('btnSolicitar').addEventListener('click', function () {
            BuscadorListaHerramienta();
            document.getElementById('modal-prestar').style.display = 'block';
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('modal-prestar').style.display = 'none';
        });

        document.getElementById('closeModal-cantidad').addEventListener('click', function () {
            document.getElementById('modal-cantidad').style.display = 'none';
        });

        document.getElementById('closeModal-locker').addEventListener('click', function () {
            document.getElementById('modal-locker').style.display = 'none';
        });

        document.getElementById('closeModalMod').addEventListener('click', function () {
            document.getElementById('modal-modificar').style.display = 'none';
        });

        function seleccionarHerramienta(fila) {
            let codigo = fila.cells[0].innerHTML;
            let nombre = fila.cells[1].innerHTML;
            let cantidad_t = fila.cells[2].innerHTML;
            document.getElementById('c_h').innerHTML = codigo;
            document.getElementById('n_h').innerHTML = nombre;
            document.getElementById('ct_h').innerHTML = cantidad_t;
            document.getElementById('modal-cantidad').style.display = 'block';

        }

        function infodataPrestamo(data) {
            var row = data[0];
            var estatus = row['estatus_p'];
            document.getElementById('ID_Prestamo').value = row['ID_Prestamo'];
            document.getElementById('Mat_text').textContent = row['Matricula'];
            document.getElementById('Dias_text').textContent = row['Dias_P'];
            if (estatus == 0) {
                document.getElementById('btndevolver').style.display = 'none';
            }
            //herramientasprestadas(ID);
        }

        function seleccionar() {
            let codigo = document.getElementById('c_h').innerHTML;
            let nombre = document.getElementById('n_h').innerHTML;
            let cantidad_t = document.getElementById('ct_h').innerHTML;
            let cantidad = document.getElementById('cant_h').value;

            if (cantidad <= cantidad_t && cantidad > 0) {
                var tabla = document.getElementById("tab-selec");
                var fila = tabla.insertRow();
                let New_codigo = fila.insertCell(0);
                let New_Nombre = fila.insertCell(1);
                let New_Cantidad = fila.insertCell(2);
                New_codigo.innerHTML = codigo;
                New_Nombre.innerHTML = nombre;
                New_Cantidad.innerHTML = cantidad;
                let d_fila = document.getElementById('' + codigo + '');
                d_fila.style.backgroundColor = '#D1D5DB';
                d_fila.removeAttribute("onclick");
                document.getElementById('modal-cantidad').style.display = 'none';
            } else if (cantidad > cantidad_t) {
                jQuery.gritter.add({
                    title: '!ERROR!',
                    text: 'La cantidad solicitada es mayor a la disponible',
                    class_name: 'growl-danger',
                    sticky: false,
                    time: ''
                });
            } else if (cantidad <= 0) {
                jQuery.gritter.add({
                    title: '!ERROR!',
                    text: 'Ingresa un numero valido',
                    class_name: 'growl-danger',
                    sticky: false,
                    time: ''
                });
            }
        }

        function panelprestamo(fila) {
            var id = fila.getAttribute("data-id");
            var tipo = fila.getAttribute("data-Tipo");
            if (tipo == 'Herramientas') {
                informacionPrestamo(id);
                document.getElementById('modal-modificar').style.display = 'block';
            } else if (tipo == 'Locker') {
                informacionPrestamoLocker(id);
                document.getElementById('modal-locker').style.display = 'block';
            }
        }

        function infoHPrestamo(data) {
            var table = "<table id='tabla-info' class='table-data table-dark table-fixed border border-collapse w-full border border-blue-950'>" +
                "<thead>" +
                "<tr class='text-center'>" +
                "<th>CODIGO</th>" +
                "<th>NOMBRE</th>" +
                "<th>CANTIDAD</th>" +
                "</tr>" +
                "<thead> <tbody>";
            if (data.length == 0) {
                table += "<tr>" +
                    "<td colspan='3'>No se encontraron resultados.</td>" +
                    "</tr>";
            }
            for (var i = 0; i < data.length; i++) {
                var row = data[i];
                table += "<tr>" +
                    "<td class='text-center'>" + row['codigo'] + "</td>" +
                    "<td>" + row['Nombre'] + "</td>" +
                    "<td class='text-center'>" + row['Cantidad'] + "</td>" +
                    "</tr>";
            };
            table += "</tbody></table>";
            $("#table-infoHerramienta").html(table);
        }
    </script>
</body>

</html>