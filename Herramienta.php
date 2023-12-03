<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herramientas</title>
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
            <h1 class="title-seccion">Lista de herramientas</h1>
        </div>
        <div class="flex flex-row gap-3">
            <div class="flex flex-col">
                <label class="label-text">Codigo</label>
                <input id="inputCodigo" class="campo_B upcase p-1 border-2 border-gray-300" />
            </div>
            <div class="flex flex-col w-1/3">
                <label class="label-text">Herramienta</label>
                <input id="inputNombreArticulo" class="campo_B p-1 border-2 border-gray-300" />
            </div>
            <div class="flex flex-col w-32">
                <label class="label-text">Estado</label>
                <select id="inputEstado" class="campo_B p-1 border-2 border-gray-300 text-center">
                    <option value="Alta">Alta</option>
                    <option value="Baja">Baja</option>
                </select>
            </div>
        </div>
        <div class="flex flex-row justify-between gap-3 w-full">
            <div class="w-auto">
                <button id="btnBuscar" class="btn-gray btn-s py-1 px-20 text-black"
                    onclick="BuscadorHerramienta();">Buscar</button>
                <button id="btnBuscar" class="btn-gray btn-s py-1 px-20 text-black"
                    onclick="Restablecer();">Restablecer</button>
            </div>
            <div class="w-auto">
                <button id="btn-m-agregar" class="btn-primary btn-s py-1 px-7 relative" style="right: 0px">Agregar
                    herramienta</button>
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
        <!-- Modales -->

        <!--Agregar Herramienta -->

        <div id="modal-agregar" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- Contenido del modal -->
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-2/4">
                    <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="w-full px-10 h-24 bg-blue-950 grid content-center">
                            <h1 class="text-5xl text-center text-white title-seccion"> Agregar herramienta </h1>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white gap-y-5 py-5 px-20">
                        <h3 class="sub-title">Ingresa los datos:</h3>
                        <div class="w-full flex flex-col">
                            <h2 class="label-text">Herramienta*</h2>
                            <input type="text" name="HerramientaNme" id="Herramienta_N"
                                class="campo_B p-1 border-2 border-gray-300">
                        </div>
                        <div class="w-full flex flex-row gap-x-3">
                            <div class="flex flex-col">
                                <h2 class="label-text">Código*</h2>
                                <input type="text" name="" id="ID_cod"
                                    class="campo_B upcase p-1 border-2 border-gray-300">
                            </div>
                            <div class="flex flex-col">
                                <h2 class="label-text">Cantidad total </h2>
                                <input type="number" name="" id="cantidad_t" value="0"
                                    class="campo_B p-1 border-2 border-gray-300">
                            </div>
                            <div class="flex flex-col w-1/4">
                                <h2 class="label-text">Estado</h2>
                                <select name="" id="Estado_m" class="campo_B upcase p-1 border-2 border-gray-300">
                                    <option value="Alta">Alta</option>
                                    <option value="Baja">Baja</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col bg-white gap-y-5">
                            <div class="flex flex-col w-full">
                                <h2 class="label-text">Descripción</h2>
                                <textarea id="Descripcion_t" class="campo_B p-1 border-2 border-gray-300"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                        <button id="btnAgregar" onclick="AgregarHerramienta();"
                            class="btn-primary btn-s py-1 px-7 w-1/4">
                            Agregar
                        </button>
                        <button id="closeModal" class="btn-gray btn-s py-1 px-7 w-1/4 text-black">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-mod" class="hidden fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- Contenido del modal -->
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-2/4">
                    <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="w-full px-10 h-24 bg-blue-950 grid content-center">
                            <h1 class="text-5xl text-center text-white title-seccion"> Información de la herramienta
                            </h1>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white gap-y-5 py-5 px-10">
                        <div class="w-full flex flex-col gap-y-2 py-5 px-5">
                            <div class="flex flex-row w-full grid justify-items-end">
                                <h2 class="sub-title">Código: <span id="cod-m"> 00000 </span></h2>
                                <span id="data-id" style="display: none;"></span>
                                <h2 class="sub-title">Fecha Registro: <span id="fech-m"> 00000 </span></h2>
                            </div>
                            <div class="w-full flex flex-col">
                                <h2 class="label-text">Nombre de la herramienta</h2>
                                <input type="text" name="HerramientaNme" id="Herramienta-m"
                                    class="campo_B p-1 border-2 border-gray-300">
                            </div>
                            <div class="w-full flex flex-row gap-x-3">
                                <div class="flex flex-col">
                                    <h2 class="label-text">Cantidad total</h2>
                                    <input type="number" name="" id="CantidadEdit"
                                        class="campo_B p-1 border-2 border-gray-300">
                                </div>
                                <div class="flex flex-col">
                                    <h2 class="label-text">Cantidad disponible</h2>
                                    <input type="number" name="" id="CantidadDis_Edit"
                                        class="campo_B p-1 border-2 border-gray-300" disabled>
                                </div>
                                <div class="flex flex-col w-1/4">
                                    <h2 class="label-text">Estado</h2>
                                    <select name="" id="EstadoEdit" class="campo_B p-1 border-2 border-gray-300">
                                        <option value="Alta">Alta</option>
                                        <option value="Baja">Baja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full flex flex-row gap-x-3">
                                <div class="flex flex-col w-full">
                                    <h2 class="label-text">Descripción</h2>
                                    <textarea id="descripcionEdit"
                                        class="campo_B p-1 border-2 border-gray-300"></textarea>
                                </div>
                            </div>
                            <div class="w-full flex flex-col gap-y-3">

                                <div class="w-full flex flex-row justify-between">
                                    <div>
                                        <h2 class="text-xl">Prestamos de la herramiena activos </h2>
                                    </div>
                                </div>
                            </div>
                            <div id="Tablaherramienta" class="w-full ">

                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                            <button id="btn-active-mod" class="btn-primary btn-s py-1 px-7 w-1/4">
                                Modificar
                            </button>
                            <button id="btn-mod" onclick="modificarHerramienta();"
                                class="btn-green btn-s py-1 px-7 w-1/4" style="display: none;">
                                Aceptar
                            </button>
                            <button id="closeModal-mod" class="btn-gray btn-s py-1 px-7 w-1/4 text-black">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        


        <script src="Scripts/Sps_functions.js"></script>
        <script src="Scripts/jquery.gritter.min.js"></script>
        <script>
            BuscadorHerramienta();
            function Restablecer() {
                document.getElementById('inputCodigo').value = "";
                document.getElementById('inputNombreArticulo').value = "";
                document.getElementById('inputEstado').value = "Alta";
                BuscadorHerramienta();
            }

            document.getElementById('btn-m-agregar').addEventListener('click', function () {
                document.getElementById('modal-agregar').style.display = 'block';
            });

            document.getElementById('closeModal').addEventListener('click', function () {
                document.getElementById('modal-agregar').style.display = 'none';
            });

            document.getElementById('closeModal-mod').addEventListener('click', function () {
                EstadoCampos(true);
                document.getElementById('modal-mod').style.display = 'none';
                document.getElementById('btn-mod').style.display = 'none';
                document.getElementById('btn-active-mod').style.display = 'block';
            });

            document.getElementById('btn-active-mod').addEventListener('click', function () {
                EstadoCampos(false);
                document.getElementById('btn-mod').style.display = 'block';
                document.getElementById('btn-active-mod').style.display = 'none';
            });

            EstadoCampos(true);

            function EstadoCampos(dis) {
                document.getElementById('Herramienta-m').disabled = dis;
                document.getElementById('CantidadEdit').disabled = dis;
                document.getElementById('EstadoEdit').disabled = dis;
                document.getElementById('descripcionEdit').disabled = dis;
                if (dis) {
                    document.getElementById('Herramienta-m').style.border = "";
                    document.getElementById('CantidadEdit').style.border = "";
                    document.getElementById('EstadoEdit').style.border = "";
                    document.getElementById('descripcionEdit').style.border = "";
                } else {
                    document.getElementById('Herramienta-m').style.border = "1px solid #289502";
                    document.getElementById('CantidadEdit').style.border = "1px solid #289502";
                    document.getElementById('EstadoEdit').style.border = "1px solid #289502";
                    document.getElementById('descripcionEdit').style.border = "1px solid #289502";
                }
            }

            function panelinfo(fila) {
                var id = fila.getAttribute("data-id");
                document.getElementById('data-id').textContent = id;
                informacionHerramienta(id);
                infoHerramienta_Prestamo(id);
                document.getElementById('modal-mod').style.display = 'block';
            }
        </script>
</body>

</html>