<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Principal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=MonteCarlo&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


    <style>
        .montecarlos{
            font-family: "MonteCarlo", cursive;
            font-weight: 400;
            font-style: normal;
        }
        .franks{
            font-family: "Frank Ruhl Libre", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="w-full h-full flex flex-col">
        <!-- header -->
        @include('layouts.Header')

        <!-- body -->
        <div class="w-full flex flex-row h-[600px]">
            @include('layouts.navmain')
            <!-- contenedor -->
            <div class="w-full flex flex-col px-10 py-5 gap-y-5">
                <div class="w-full border-r-2 border-[#D8D0BB] border-b-2">
                    <h1 class="text-5xl px-3 montecarlos" style="">Pedidos</h1>
                </div>
                <!-- seccion cambiante -->
                <div class="w-full flex flex-row gap-x-5">
                    <!-- panel pick up -->
                    <div class="w-1/2 flex flex-col gap-y-3 border border-[#D8D0BB]">
                        <!-- Panel Pick Up header  -->
                        <div class="w-full bg-[#D8D0BB] h-10 flex place-items-center justify-center">
                            <h2 class="text-3xl montecarlos" style="">Pedidos (Pick up)</h2>
                        </div>

                        <!-- Panel Pick Up body -->
                        <div class="w-full flex flex-col px-3 overflow-y-scroll gap-y-3 h-96">
                            @if ($pedidos)
                                @foreach ($pedidos as $pedido)
                                    <div
                                        class="w-full border-2 border-[#D8D0BB] flex flex-col gap-y-1 px-1 rounded-md shadow-lg bg-[#FBF9F6] py-1">

                                        <div class="w-full flex flex-row">
                                            <h1 class="w-2/3 text-xl text-center" style="font-family: AG;">
                                                {{ $pedido->Nombre }} {{ $pedido->Apellido }} </h1>

                                            <h1 class="w-1/3 text-xl text-center" style="font-family: AG;"> Folio:
                                                <span>
                                                    {{ $pedido->folio }} </span>
                                            </h1>
                                        </div>

                                        <div class="w-full grid justify-items-end">
                                            <a class="w-1/2" href="#" data-toggle="modal" data-target="#modal-pedido" onclick="mostrarDetalle({{ $pedido->id_pedido }})"><button
                                                class="text-[20px] bg-[#B39555] hover:bg-[#B39555] hover:text-white rounded-full border-none px-1 py-0.5 w-full"
                                                 style="font-family: AG;">
                                                Ver pedido
                                            </button></a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div
                                    class="w-full border-2 border-[#D8D0BB] flex flex-col gap-y-1 px-1 rounded-md shadow-lg bg-[#FBF9F6] py-1">
                                    <div class="w-full">
                                        <h1 class="text-xl text-center" style="font-family: AG;">No hay pedidos
                                            existentes</h1>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Panel Paquetes Armados -->
                    <div class="w-1/2 flex flex-col gap-y-3 border border-[#D8D0BB]">
                        <!-- Panel Paquetes Armados header  -->
                        <div class="w-full bg-[#D8D0BB] h-10 flex place-items-center justify-center">
                            <h2 class="text-3xl montecarlos " style="">Pedidos (Paquetes Armados)</h2>
                        </div>

                        <!-- Panel Paquetes Armados body -->
                        <div class="w-full flex flex-col px-3 overflow-y-scroll gap-y-3 h-96 ">

                            <!-- Tarjeta -->
                            <div
                                class="w-full border-2 border-[#D8D0BB] flex flex-col gap-y-1 px-1 rounded-md shadow-lg bg-[#FBF9F6] py-1">

                                <div class="w-full flex flex-row">
                                    <h1 class="w-2/3 text-xl text-center" style="font-family: AG;">Zuriel Ismael Pech Dominguez </h1>

                                    <h1 class="w-1/3 text-xl text-center" style="font-family: AG;"> Folio:
                                        <span>
                                            0000000000 </span>
                                    </h1>
                                </div>

                                <div class="w-full grid justify-items-end">
                                    <button id="btnMostrar"
                                        class="text-[20px] bg-[#B39555] hover:bg-[#B39555] hover:text-white rounded-full border-none px-1 py-0.5 w-1/2"
                                        onclick="Open()" style="font-family: AG;">
                                        Ver pedido
                                    </button>
                                </div>
                            </div>

                            <!-- Tarjeta -->
                            <div
                                class="w-full border-2 border-[#D8D0BB] flex flex-col gap-y-1 px-1 rounded-md shadow-lg bg-[#FBF9F6] py-1">
                                <div class="w-full">
                                    <h1 class="text-xl text-center" style="font-family: AG;">No hay pedidos
                                        existentes</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="w-full bg-[#B39555] h-20">
        </div>

        <!-- modal -->
        <div id="modal-pedido" class="hidden fixed z-10 inset-0 overflow-y-auto">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function Open() {
            document.getElementById('modal-pedido').style.display = 'block';
        }

        function Close() {
            document.getElementById('modal-pedido').style.display = 'none';
        }

        function mostrarDetalle(id) {
        $.get('/detalle/' + id, function(data) {
            $('#modal-pedido').html(data);
            Open();
        });
    }
    </script>
</body>

</html>
