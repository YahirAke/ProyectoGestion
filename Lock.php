<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/herramienta.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.gritter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="Scripts/jquery-3.7.1.js"></script>
    <title>Lockers</title>
    <link rel="shortcut icon" href="imagenes/lock1.png">
</head>

<body>

    <?php
        include 'leftpanel.php';
    ?>


    <div class="panel-main flex flex-col gap-3">

        <div class="barra-secundaria">
            <h1 class="title-seccion">Lockers</h1>
        </div>

        <div class="w-full">


            <div class="w-full flex flex-col gap-y-5">

                <!-- Bloque 1 -->
                <div class="w-full grid grid-cols-7 border border-2 border-gray-300 py-1 px-1 gap-x-1">

                
                    <!-- 6638 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6638A -->
                        <div id="L6638A" onclick="modalInfo('L6638A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6638A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6638B -->
                        <div id="L6638B" onclick="modalInfo('L6638B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6638B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6638C -->
                        <div id="L6638C" onclick="modalInfo('L6638C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6638C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6639 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6639A -->
                        <div id="L6639A" onclick="modalInfo('L6639A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6639A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6639B -->
                        <div id="L6639B" onclick="modalInfo('L6639B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6639B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6639C -->
                        <div id="L6639C" onclick="modalInfo('L6639C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6639C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6640 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6640A -->
                        <div id="L6640A" onclick="modalInfo('L6640A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6640A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6640B -->
                        <div id="L6640B" onclick="modalInfo('L6640B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6640B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6640C -->
                        <div id="L6640C" onclick="modalInfo('L6640C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6640C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6641 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6641A -->
                        <div id="L6641A" onclick="modalInfo('L6641A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6641A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6641B -->
                        <div id="L6641B" onclick="modalInfo('L6641B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6641B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6641C -->
                        <div id="L6641C" onclick="modalInfo('L6641C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6641C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6642 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6642A -->
                        <div id="L6642A" onclick="modalInfo('L6642A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6642A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6642B -->
                        <div id="L6642B" onclick="modalInfo('L6642B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6642B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6642C -->
                        <div id="L6642C" onclick="modalInfo('L6642C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6642C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6643 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6643A -->
                        <div id="L6643A" onclick="modalInfo('L6643A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6643A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6643B -->
                        <div id="L6643B" onclick="modalInfo('L6643B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6643B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6643C -->
                        <div id="L6643C" onclick="modalInfo('L6643C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6643C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6644 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6644A -->
                        <div id="L6644A" onclick="modalInfo('L6644A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6644A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6644B -->
                        <div id="L6644B" onclick="modalInfo('L6644B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6644B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6644C -->
                        <div id="L6644C" onclick="modalInfo('L6644C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6644C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bloque 2 -->
                <div class="w-full grid grid-cols-7 border border-2 border-gray-300 px-1 py-1 gap-x-1">
                    <!-- 6645 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2 border-gray-300">
                        <!-- 6645A -->
                        <div id="L6645A" onclick="modalInfo('L6645A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6645A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6645B -->
                        <div id="L6645B" onclick="modalInfo('L6645B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6645B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6645C -->
                        <div id="L6645C" onclick="modalInfo('L6645C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6645C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6646 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6646A -->
                        <div id="L6646A" onclick="modalInfo('L6646A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6646A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6646B -->
                        <div id="L6646B" onclick="modalInfo('L6646B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6646B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6646C -->
                        <div id="L6646C" onclick="modalInfo('L6646C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6646C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6647 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6647A -->
                        <div id="L6647A" onclick="modalInfo('L6647A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6647A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6647B -->
                        <div id="L6647B" onclick="modalInfo('L6647B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6647B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6647C -->
                        <div id="L6647C" onclick="modalInfo('L6647C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6647C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6648 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6648A -->
                        <div id="L6648A" onclick="modalInfo('L6648A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6648A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6648B -->
                        <div id="L6648B" onclick="modalInfo('L6648B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6648B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6648C -->
                        <div id="L6648C" onclick="modalInfo('L6648C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6648C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6649 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6649A -->
                        <div id="L6649A" onclick="modalInfo('L6649A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6649A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6649B -->
                        <div id="L6649B" onclick="modalInfo('L6649B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6649B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6649C -->
                        <div id="L6649C" onclick="modalInfo('L6649C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6649C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6650 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 6650A -->
                        <div id="L6650A" onclick="modalInfo('L6650A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6650A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6650B -->
                        <div id="L6650B" onclick="modalInfo('L6650B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6650B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6650C -->
                        <div id="L6650C" onclick="modalInfo('L6650C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6650C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6651 -->
                    <div class=" w-full grid grid-rows-3 gap-y-3 border border-2">
                        <!-- 66451 -->
                        <div id="L6651A" onclick="modalInfo('L6651A')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6651A</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6651B -->
                        <div id="L6651B" onclick="modalInfo('L6651B')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6651B</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6651C -->
                        <div id="L6651C" onclick="modalInfo('L6651C')" class="cursormanito w-full h-auto flex flex-col">
                            <div>
                                <h3 class="sub-title text-center text-black">6651C</h3>
                            </div>

                            <div class="w-full h-full flex flex-row gap-x-1 items-center">
                                <div class="w-1/2 h-auto grid justify-items-end">
                                    <div>
                                        <img src="imagenes/l.png" alt="Casillero" class="object-contain h-24">
                                    </div>
                                </div>

                                <div class="w-1/2 h-auto  justify-items-start">
                                    <div>
                                        <img src="imagenes/G.png" alt="Casillero" class="object-contain h-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL-->
    <div id="modal-agregar" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Contenido del modal -->
            <!--Body-->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-2/4">
                <div class="bg-blue-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="w-full px-10 h-24 bg-blue-950 grid content-center">
                        <h1 class="text-5xl text-center text-white title-seccion"> Solicitud de locker</h1>
                        <p  class="hidden"></p>
                    </div>
                </div>


                <!--Fila locker-->
                <div class="flex flex-col bg-white gap-y-3 py-5 px-10">
                    <h3 class="sub-title">Imformación del locker seleccionado:</h3>

                    <div class="flex flex-row bg-white gap-x-5">
                        <div class="flex flex-col w-48 ">
                            <h2 class="label-text">Bloque:</h2>
                            <h2 id="data_id" class="label-text"></h2>
                            <!--<input type="text" name="HerramientaNme" id="Herramienta_N"
                                class="campo_B p-1 border-2 border-gray-300" disabled="disabled">-->
                            
                        </div>

                        <div class="w-24 flex flex-col">
                            <h2 class="label-text">Fila:</h2>
                            <h2 class="label-text">A</h2>
                            <!--<input type="text" name="HerramientaNme" id="Herramienta_N"
                                class="campo_B p-1 border-2 border-gray-300" disabled="disabled">-->
                        </div>
                    </div>
                </div>


                <!--Fila alumno-->
                <div class="flex flex-col bg-white gap-y-3 py-5 px-10">

                    <h3 class="sub-title">Ingresa los datos:</h3>

                    <div class="flex flex-row bg-white gap-x-5">
                        <div class="flex flex-col w-48 ">
                            <h2 class="label-text">Matrícula*</h2>
                            <input type="text" name="HerramientaNme" id="Herramienta_N"
                                class="campo_B p-1 border-2 border-gray-300">
                        </div>

                        <div class="w-full flex flex-col">
                            <h2 class="label-text">Nombre del alumno*</h2>
                            <input type="text" name="HerramientaNme" id="Herramienta_N"
                                class="campo_B p-1 border-2 border-gray-300">
                        </div>
                    </div>
                </div>

                <!--Modal footer-->
                <div class="w-full flex flex-row justify-between bg-gray-50 px-5 gap-x-5">

                    <div class="w-1/3 py-3 ">
                        <button id="btnAgregar" onclick="AgregarHerramienta();"
                            class="btn-third btn-s py-1 px-7 w-full">
                            Liberar locker
                        </button>

                    </div>

                    <div class="w-2/3 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                        <button id="btnAgregar" onclick="SolicitarPrestamoLocker();"
                            class="btn-primary btn-s py-1 px-7 w-1/2">
                            Bloquear locker
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

        function modalInfo(data){
            document.getElementById('data_id').innerHTML = data;
            document.getElementById('modal-agregar').style.display = 'block';
        }
    
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal-agregar').style.display = 'none';
        });
    </script>

</body>

</html>