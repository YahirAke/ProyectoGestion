<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Mulish&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/herramienta.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/jquery-3.7.1.js"></script>
    <title>Control de usuarios</title>


</head>

<body class="h-3/4 flex flex-col bg-cuerpo">
    <?php
    include 'leftpanel.php';
    ?>


    <div class="panel-main flex flex-col gap-3">

        <div class="barra-secundaria">
            <h1 class="title-seccion">Usuarios</h1>
        </div>
        <div class="w-full">
            <div class="bg-centro mx-auto w-full md:w-full md:px-0 md:mx-auto">
                <div class="flex flex-col mx-auto p-2 md:w-full md:p-0">
                    <div class="bg-grisul p-4 md:w-3/4 md:h-full md:mx-auto text-center">
                        <h1 class="text-center text-2xl font-bold ">Búscar usuario</h1>
                        <div class="text-gray-600">
                            <input id="Buscador_txt" type="search" name="search" placeholder="Buscar..."
                                class="w-3/4 border-2 border-gray-300 bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                            <button onclick="Usuarios();" type="submit"
                                class="bg-blue-900 text-white px-5 py-2  mx-auto rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring focus:border-blue-100 md:px-5 md:py-2">Buscar</button>
                        </div><br>
                        <div class="flex flex-col md:flex-row mb-4 justify-center">
                            <div class="w-full md:w-1/3">
                                <p>Rol:</p>
                                <select id="seleccionatamanio" name="tamanio" class="campo_B upcase p-1 border-2 border-gray-300">
                                    <option value="administrador">Administrador</option>
                                    <option value="alumno">Alumno</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="bg-centro mx-auto p-5 w-full md:w-full md:px-0 md:mx-auto">
                        <div class="flex flex-col mx-auto p-2 md:w-full md:p-0">
                            <div class="bg-grisul p-4 md:w-full md:h-full md:mx-auto text-center">
                                <title>Panel de Usuarios</title>
                                </head>

                                <div class="bg-centro mx-auto p-5 w-full md:w-full md:px-0 md:mx-auto">
                                    <div class="w-full">
                                        <h1>Panel de Usuarios</h1>
                                        <div id="panel-user" class=" grid grid-cols-5 justify-items-center">
                                            <!-- Agrega más usuarios con fotos de perfil según sea necesario -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<div id="modal-agregar" class="hidden fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Contenido del modal -->
        <!--Body-->
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-1/4">
            <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="w-full px-10 h-24 bg-blue-950 grid content-center">
                    <h1 class="text-2xl text-center text-white title-seccion"> Agregar Usuario</h1>
                    <p class="hidden"></p>
                </div>
            </div>
            <!--Fila alumno-->
            <div class="flex flex-col items-start bg-white gap-y-3 py-5 px-10">

                <h3 class="sub-title">Ingresa los datos:</h3>

                <div class="flex flex-col bg-white gap-x-5">
                    <form onsubmit="enviarFormulario(event)">

                        <p class="lable">Matrícula</p>
                        <input type="Matricula" placeholder="" id="Matricula">
                        <p class="lable">Nombre(s)</p>
                        <input type="Matricula" placeholder="" id="Nombre">
                        <p class="lable">Apellido(s)</p>
                        <input type="Matricula" placeholder="" id="Apellido">
                        <p class="lable">Email</p>
                        <input type="Email" placeholder="" id="Email">
                        <p class="lable">Contraseña</p>
                        <input type="password" placeholder="********" id="Password">
                        <p class="lable">Confirmar contraseña</p>
                        <input type="password" placeholder="********" id="Conf_password">
                    </form>
                </div>
            </div>

            <!--Modal footer-->
            <div class="w-full flex flex-row justify-between bg-gray-50 px-5 gap-x-5">
                <div class="w-full py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                    <button id="btnregistro" onclick="registrarse();" class="btn-primary btn-s py-1 px-7 w-1/2">
                        Registrarse
                    </button>
                    <button id="closeModal" class="btn-gray btn-s py-1 px-7 w-1/2 text-black">
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
    Usuarios();
    //document.getElementById('modal-agregar').style.display = 'block';
</script>

</html>