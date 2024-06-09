<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Venta</title>

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
                    <h1 class="text-3xl px-3" style="font-family: CM;">VENTAS DEL DÍA</h1>
                </div>
                <!-- seccion cambiante -->
                <div class="w-full flex flex-col gap-y-5">

                    <div class="w-full flex flex-col gap-y-3">
                        <div class="w-full h-96 overflow-y-scroll">
                            <table class="w-full table-auto border-separate border border-none border-spacing-y-1.5 ">
                                <thead>
                                    <tr>
                                        <th class="border border-[#B39555]">Folio</th>
                                        <th class="border border-[#B39555]">Hora de la venta</th>
                                        <th class="border border-[#B39555]">Estado</th>
                                        <th class="border border-[#B39555]">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $item)
                                    <tr>
                                        <td class="border border-[#D8D0BB] px-2">{{$item->folio}}</td>
                                        <td class="border border-[#D8D0BB] px-2">{{$item->Hora}}</td>
                                        <td class="border border-[#D8D0BB] px-2">{{$item->Estado}}</td>
                                        <td class="border border-[#D8D0BB] px-2">${{$item->Total}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="w-full flex justify-end">
                    <button id="btnMostrar"
                        class="text-[20px] bg-[#ecbd00] hover:bg-[#CC9B1C] hover:text-white rounded-full border-none px-1 py-0.5 w-1/5"
                        onclick="Open()" style="font-family: AG;">
                        Cerrar venta
                    </button>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="w-full bg-[#B39555] h-20">
        </div>
    </div>
</body>

</html>