<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería - Carrito de Compras</title>
    @vite('resources/css/app.css')

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
    @include('layouts.Header')

    <br>
    <div class="border md:border-2 md:border-t-0 md:border-b-0 border-[#D8D0BB] w-full h-full">
        <h1 class="montecarlos text-center font-bold text-6xl pb-10 ">Pedidos</h1>
        <!-- Primer Bloque -->
        <div class="max-w-7xl mx-auto bg-white p-6 border-2 border-[#D8D0BB] rounded-md shadow-md relative">
            <div class="flex flex-row px-2 p-1 justify-between w-full">
                <div class="flex flex-row items-center justify-center">
                    <div class="rounded-full bg-blue-500 w-3 h-3"></div>
                    <p class="px-2 font-['CatchyMager'] ">Pendiente</p>
                </div>
            </div>

            <!-- Nombre del Pedido y Imagen -->
            <div class="flex flex-col w-full gap-y-3 px-0">
                @foreach ($pedidos_Apartados as $pedido_Apartado)
                    <div class="flex flex-col">
                        <!-- Header-->
                        <div class="h-max bg-[#D8D0BB] w-full py-4 px-4">
                            <div class="flex flex-row p-1 justify-between w-full">
                                <div class="flex flex-row items-center justify-center">
                                    <img src="{{ asset('resources/image/logo.png') }}" alt="Imagen del Producto"
                                        class="w-12 h-12 mr-4 rounded-md">
                                    <h1 class="text-xl md:text-2xl font-['AppleGaramondBold'] font-bold">
                                        Folio: {{$pedido_Apartado->folio}}
                                    </h1>
                                </div>
                                <button id="mostrarDetallesBtn{{$pedido_Apartado->id}}" onclick="toggleDetalles('mostrarDetallesBtn{{$pedido_Apartado->id}}','detallesPedido{{$pedido_Apartado->id}}')"
                                    class="top-14 md:top-6 right-0 text-black p-2 md:p-2 justify-between items-center rounded-md transform rotate-90">▼</button>
                            </div>
                        </div>

                        <!-- Botón para Mostrar Detalles -->


                        <!-- Detalles de las Compras (Inicialmente Ocultos) -->
                        <div id="detallesPedido{{$pedido_Apartado->id}}" class="hidden px-4">
                            <p class="font-['CatchyMager'] font-bold text-sm">Folio: #{{$pedido_Apartado->folio}}
                            <h2 class="text-md Font-['CatchyMager'] font-bold mb-2">Compra realizada el {{$pedido_Apartado->Hora}}</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 w-full">
                                @foreach ($infopedidos as $infopedido)
                                    @if ($infopedido->IDPedido == $pedido_Apartado->id)
                                    <div class="flex flex-row py-10 border-2 border-[#D8D0BB] justify-between w-full ">
                                        <div class="flex flex-row items-center justify-center w-full">
                                            <div class="flex flex-row py-1 px-2 w-full">
                                                <img src="{{ asset($infopedido->img) }} .jpg" alt="Imagen del Producto"
                                                    class="w-full md:w-full md:h-auto mr-4 rounded-md">
                                            </div>
                                            <div>
                                                <h2 class="text-1xl md:text-2xl font-['AppleGaramondBold'] font-bold mb-2">
                                                    {{$infopedido->pan_nombre}}
                                                </h2>
                                                <p class="font-['CatchyMager'] text-sm">Piezas: {{$infopedido->pan_cantidad}}</p>
                                                <p class="font-['CatchyMager'] text-sm">Precio por pieza: ${{$infopedido->precio}}</p>
                                                <p class="font-['CatchyMager'] text-sm">Cantidad total: ${{$infopedido->pan_total}}</p>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            <p class="font-['CatchyMager']">Cantidad a Pagar: ${{$pedido_Apartado->Total}}</p>
                            <p class="font-['CatchyMager']">Método de Pago: Tarjeta de Crédito</p>
                            <p class="font-['CatchyMager']">Direccion: Calle 26 entre 3 y 5 Colonia Felipe Carrillo
                                Puerto
                                Motul Yucatan Mexico</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <br>

        <!-- Segundo Bloque -->
        <div class="max-w-7xl mx-auto bg-white p-6 border-2 border-[#D8D0BB] rounded-md shadow-md relative">
            <div class="flex flex-row px-2 p-1 justify-between w-full">
                <div class="flex flex-row items-center justify-center">
                    <div class="rounded-full bg-red-500 w-3 h-3"></div>
                    <p class="px-2 font-['CatchyMager']">Apartado</p>
                </div>
            </div>
            <!-- Nombre del Pedido y Imagen -->
            <div class="flex flex-col w-full px-0">
                @foreach ($pedidos_Pendientes as $pedidos_Pendiente)
                    <div class="flex flex-col">
                        <!-- Header-->
                        <div class="h-max bg-[#D8D0BB] w-full py-4 px-4">
                            <div class="flex flex-row p-1 justify-between w-full">
                                <div class="flex flex-row items-center justify-center">
                                    <img src="{{ asset('resources/image/charrita.png') }}" alt="Imagen del Producto"
                                        class="w-12 h-12 mr-4 rounded-md">
                                    <h1 class="text-xl md:text-2xl font-['AppleGaramondBold'] font-bold">
                                        Folio: {{$pedidos_Pendiente->folio}}
                                    </h1>
                                </div>
                                <button id="mostrarDetallesBtn{{$pedidos_Pendiente->id}}" onclick="toggleDetalles('mostrarDetallesBtn{{$pedidos_Pendiente->id}}','detallesPedido{{$pedidos_Pendiente->id}}')"
                                    class="top-14 md:top-6 right-0 text-black p-2 md:p-2 justify-between items-center rounded-md transform rotate-90">▼</button>
                            </div>
                        </div>

                        <!-- Botón para Mostrar Detalles -->


                        <!-- Detalles de las Compras (Inicialmente Ocultos) -->
                        <div id="detallesPedido{{$pedidos_Pendiente->id}}" class="hidden px-4">
                            <p class="font-['CatchyMager'] font-bold text-sm">Folio: #{{$pedidos_Pendiente->folio}}
                            <h2 class="text-md Font-['CatchyMager'] font-bold mb-2">Compra realizada el {{$pedidos_Pendiente->Hora}}</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 w-full">
                                @foreach ($infopedidos as $infopedido)
                                    @if ($infopedido->IDPedido == $pedidos_Pendiente->id)
                                    <div class="flex flex-row py-10 border-2 border-[#D8D0BB] justify-between w-full ">
                                        <div class="flex flex-row items-center justify-center w-full">
                                            <div class="flex flex-row py-1 px-2 w-full">
                                                <img src="{{ asset($infopedido->img . '.jpg') }}"" alt="Imagen del Producto"
                                                    class="w-full md:w-full md:h-auto mr-4 rounded-md">
                                            </div>
                                            <div>
                                                <h2 class="text-1xl md:text-2xl font-['AppleGaramondBold'] font-bold mb-2">
                                                    {{$infopedido->pan_nombre}}
                                                </h2>
                                                <p class="font-['CatchyMager'] text-sm">Piezas: {{$infopedido->pan_cantidad}}</p>
                                                <p class="font-['CatchyMager'] text-sm">Precio por pieza: ${{$infopedido->precio}}</p>
                                                <p class="font-['CatchyMager'] text-sm">Cantidad total: ${{$infopedido->pan_total}}</p>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            <p class="font-['CatchyMager']">Cantidad a Pagar: ${{$pedidos_Pendiente->Total}}</p>
                            <p class="font-['CatchyMager']">Método de Pago: Tarjeta de Crédito</p>
                            <p class="font-['CatchyMager']">Direccion: Calle 26 entre 3 y 5 Colonia Felipe Carrillo
                                Puerto
                                Motul Yucatan Mexico</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <br>

        <!-- Tercer Bloque -->
        <div class="max-w-7xl mx-auto bg-white p-6 border-2 border-[#D8D0BB] rounded-md shadow-md relative">
            <div class="flex flex-row px-2 p-1 justify-between w-full">
                <div class="flex flex-row items-center justify-center">
                    <div class="rounded-full bg-green-500 w-3 h-3"></div>
                    <p class="px-2 font-['CatchyMager']">Entregado</p>
                </div>
            </div>

            <!-- Nombre del Pedido y Imagen -->
            <div class="flex flex-col w-full px-0">
                @foreach ($pedidos_Entregados as $pedidos_Entregado)
                    <div class="flex flex-col">
                        <!-- Header-->
                        <div class="h-max bg-[#D8D0BB] w-full py-4 px-4">
                            <div class="flex flex-row p-1 justify-between w-full">
                                <div class="flex flex-row items-center justify-center">
                                    <img src="{{ asset('resources/image/logo.png') }}" alt="Imagen del Producto"
                                        class="w-12 h-12 mr-4 rounded-md">
                                    <h1 class="text-xl md:text-2xl font-['AppleGaramondBold'] font-bold">
                                        Folio: {{$pedidos_Entregado->folio}}
                                    </h1>
                                </div>
                                <button id="mostrarDetallesBtn{{$pedidos_Entregado->id}}" onclick="toggleDetalles('mostrarDetallesBtn{{$pedidos_Entregado->id}}','detallesPedido{{$pedidos_Entregado->id}}')"
                                    class="top-14 md:top-6 right-0 text-black p-2 md:p-2 justify-between items-center rounded-md transform rotate-90">▼</button>
                            </div>
                        </div>

                        <!-- Botón para Mostrar Detalles -->


                        <!-- Detalles de las Compras (Inicialmente Ocultos) -->
                        <div id="detallesPedido{{$pedidos_Entregado->id}}" class="hidden px-4">
                            <p class="font-['CatchyMager'] font-bold text-sm">Folio: #{{$pedidos_Entregado->folio}}
                            <h2 class="text-md Font-['CatchyMager'] font-bold mb-2">Compra realizada el {{$pedido_Apartado->Hora}}</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 w-full">
                                @foreach ($infopedidos as $infopedido)
                                    @if ($infopedido->IDPedido == $pedidos_Entregado->id)
                                    <div class="flex flex-row py-10 border-2 border-[#D8D0BB] justify-between w-full ">
                                        <div class="flex flex-row items-center justify-center w-full">
                                            <div class="flex flex-row py-1 px-2 w-full">
                                                <img src="{{ asset($infopedido->img . '.jpg') }}"" alt="Imagen del Producto"
                                                    class="w-full md:w-full md:h-auto mr-4 rounded-md">
                                            </div>
                                            <div>
                                                <h2 class="text-1xl md:text-2xl font-['AppleGaramondBold'] font-bold mb-2">
                                                    {{$infopedido->pan_nombre}}
                                                </h2>
                                                <p class="font-['CatchyMager'] text-sm">Piezas: {{$infopedido->pan_cantidad}}</p>
                                                <p class="font-['CatchyMager'] text-sm">Precio por pieza: ${{$infopedido->precio}}</p>
                                                <p class="font-['CatchyMager'] text-sm">Cantidad total: ${{$infopedido->pan_total}}</p>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            <p class="font-['CatchyMager']">Cantidad a Pagar: ${{$pedidos_Entregado->Total}}</p>
                            <p class="font-['CatchyMager']">Método de Pago: Tarjeta de Crédito</p>
                            <p class="font-['CatchyMager']">Direccion: Calle 26 entre 3 y 5 Colonia Felipe Carrillo
                                Puerto
                                Motul Yucatan Mexico</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="px-32 md:px-16  py-5">
            <a class="" href="{{route('home')}}"><button id=""
                class=" bg-[#B39555]  text-black  w-20 justify-between items-center rounded-md">Inicio</button>
            </a>
        </div>
    </div>

    <script>
        function toggleDetalles(btnId, detallesId) {
            const mostrarDetallesBtn = document.getElementById(btnId);
            const detallesPedido = document.getElementById(detallesId);

            //mostrarDetallesBtn.addEventListener('click', () => {
                detallesPedido.classList.toggle('hidden');
                mostrarDetallesBtn.classList.toggle('rotate-90');
            //});
        }

        // Llamar la función para cada par de botón y detalles
        //toggleDetalles('mostrarDetallesBtn1', 'detallesPedido1');
        //toggleDetalles('mostrarDetallesBtn2', 'detallesPedido2');
        //toggleDetalles('mostrarDetallesBtn3', 'detallesPedido3');
    </script>
</body>

</html>
