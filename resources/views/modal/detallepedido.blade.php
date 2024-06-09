<div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- Contenido del modal -->
    <div
        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-3/4">
        <div class="bg-[#D8D0BB] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="w-full px-10 h-24 bg-[#D8D0BB] grid content-center">
                <h1 class="text-5xl text-center text-black title-seccion font-bold" style="font-family: CM;"> PEDIDO
                </h1>
            </div>
        </div>

        <!-- Paneles -->
        <div class="w-full flex flex-col bg-white gap-y-3 py-5 px-5">
            <div class="w-full flex flex-col gap-y-3">
                @foreach ($pedidos_uno as $item)
                <div class="w-full flex flex-row px-5">
                    <h1 class="w-2/3 text-left text-xl" style="font-family: AG;">Nombre: {{$item->Nombre}} {{$item->Apellido}}</h1>

                    <h1 class="w-1/3 text-right text-xl" style="font-family: AG;"> Folio:
                        <span>
                            {{$item->folio}}
                        </span>
                    </h1>
                </div>

                <div class="w-full flex flex-row justify-around px-5">
                    <h1 class="w-full text-xl" style="font-family: AG;">Productos
                        pedidos:</h1>
                    <h1 class="w-full text-xl text-right" style="font-family: AG;">Precio Total: <span>{{$item->Total}}</span>
                    </h1>

                </div>
                @endforeach
            </div>

            <!-- panel de Panes -->
            <div class="w-full grid grid-cols-3 overflow-y-auto h-[600px] gap-x-2 gap-y-3">
                @foreach ($detalles as $detalle)
                    <!-- Tarjeta -->
                    <div :id="panel" class=" w-full flex flex-col border-2 ">
                        <div class="w-full">
                            <H1 class="text-2xl text-center" style="font-family: CM;">{{$detalle->pan_nombre}}</H1>
                        </div>

                        <div class="w-auto flex justify-center">
                            <img class="w-auto h-40" src="{{ asset($detalle->img . '.jpg')}}" alt="pan">
                        </div>

                        <div class=" w-full flex flex-col">
                            <div class="w-full px-4 flex flex-row justify-around">
                                <H2 style="font-family: AG;" class="text-xl">Precio: <span style="font-family: AG;"
                                        class="text-xl">${{$detalle->precio}}</span> </H2>
                                <H2 style="font-family: AG;" class="text-xl">Total: <span style="font-family: AG;"
                                        class="text-xl"> ${{$detalle->pan_total}} </span> </H2>

                            </div>

                            <div class=" grid content-center p-2">
                                <label class="xl:text-center text-xl" style="font-family: AG;">Cantidad: <span
                                        style="font-family: AG;" class="text-xl">
                                        {{$detalle->pan_cantidad}}
                                    </span></label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Parte final (Botones) -->
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
            <button id="closeModal"
                class="text-[20px] bg-[#D3837F] hover:bg-[#BF7773] hover:text-white rounded-full border-none px-1 py-0.5 w-1/3"
                onclick="Close()" style="font-family: AG;">
                Cerrar
            </button>
        </div>
    </div>
</div>
