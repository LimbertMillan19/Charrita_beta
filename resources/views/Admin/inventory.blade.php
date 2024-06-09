<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Inventario</title>

    <style>
        @font-face {
            font-family: CM;
            src: url("font/CatchyMagerRegular.ttf");
        }

        @font-face {
            font-family: AG;
            src: url("font/AppleGaramond.ttf");
        }
    </style>
</head>

<body>
    <div class="w-full h-full flex flex-col">
        <!-- header -->
        @include('layouts.HeaderSec')

        <!-- body -->
        <div class="w-full flex flex-row h-[600px] ">
            @include('layouts.navmain')
            <!-- contenedor -->
            <div class="w-full flex flex-col px-10 py-5 gap-y-5">
                <div class="w-full border-r-2 border-b-2 border-[#D8D0BB]">
                    <h1 class="text-3xl px-3" style="font-family: CM;">INVENTARIO</h1>
                </div>
                <!-- seccion cambiante -->
                <div class="w-full flex flex-col gap-y-5">

                    <div class="w-full flex flex-row justify-end gap-x-5">
                        <button id="btnMostrar"
                            class="text-[20px] bg-[#ecbd00] hover:bg-[#CC9B1C] hover:text-white rounded-full border-none px-1 py-0.5 w-1/5"
                            style="font-family: AG;">
                            Bloquear ventas de hoy
                        </button>

                    </div>

                    <div class="w-full flex flex-col gap-y-3">
                        <div>
                            <h1>Productos para la venta de hoy</h1>
                        </div>
                        <div class="w-full h-96 overflow-y-scroll">
                            <table class="w-full table-auto border-separate border border-none border-spacing-y-1.5 ">
                                <thead>
                                    <tr>
                                        <th class="border border-[#B39555]">Nombre</th>
                                        <th class="border border-[#B39555]">Precio</th>
                                        <th class="border border-[#B39555]">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($panes as $pan)
                                    <tr>
                                        <td class="border border-[#D8D0BB] px-2">{{$pan->Nombre}}</td>
                                        <td class="border border-[#D8D0BB] px-2">${{$pan->Precio}}</td>
                                        <td class="border border-[#D8D0BB] px-2"><input class="w-full text-center"
                                                value="{{$pan->Cantidad}}" type="number">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="w-full bg-[#B39555] h-20">
        </div>
    </div>

</body>

</html>