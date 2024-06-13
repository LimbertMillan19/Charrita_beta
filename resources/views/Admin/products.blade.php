<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Productos</title>

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
        <div class="w-full flex flex-row h-[600px] ">
            @include('layouts.navmain')
            <!-- contenedor -->
            <div class="w-full flex flex-col px-10 py-5 gap-y-5">
                <div class="w-full border-r-2 border-b-2 border-[#D8D0BB]">
                    <h1 class="text-5xl px-3 montecarlos" style="">Productos agregados</h1>
                </div>
                <!-- seccion cambiante -->
                <div class="w-full flex flex-col gap-y-5">

                    <div class="w-full flex flex-row justify-end gap-x-5">
                        <button id="btnMostrar"
                            class="text-[20px] bg-[#B39555] hover:bg-bg-[#B39555] hover:text-white rounded-full border-none px-1 py-0.5 w-1/4"
                            onclick="" style="font-family: AG;">
                            Agregar producto
                        </button>

                    </div>

                    <div class="w-full flex flex-col gap-y-3">
                        <div>
                            <h1 class="franks">Productos</h1>
                        </div>
                        <div class="w-full h-96 overflow-y-scroll">
                            <table class="w-full table-auto border-separate border border-none border-spacing-y-1.5 ">
                                <thead>
                                    <tr>
                                        <th class="border franks border-[#B39555]">Nombre</th>
                                        <th class="border franks border-[#B39555]">Precio</th>
                                        <th class="border franks border-[#B39555]">Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($panes as $pan)
                                    <tr>
                                        <td class="border franks border-[#D8D0BB] px-2">{{$pan->Nombre}}}</td>
                                        <td class="border franks border-[#D8D0BB] px-2">${{$pan->Precio}}</td>
                                        <td class="border franks border-[#D8D0BB] px-2">{{$pan->Descripcion}}</td>
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

    <!-- modal -->
    <div id="modal-registrar" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Contenido del modal -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-3/4">
                <div class="bg-[#D8D0BB] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="w-full px-10 h-24 bg-[#D8D0BB] grid content-center">
                        <h1 class="text-5xl text-center text-black title-seccion font-bold" style="font-family: CM;">
                            REGISTRO DE PANES
                        </h1>
                    </div>
                </div>

                <!-- Paneles -->
                <div class="w-full flex flex-col bg-white gap-y-3 py-5 px-5">
                    <form action="{{route('products.store')}}" method="POST" class=" w-full flex flex-col gap-y-5">
                        @csrf
                        <div class="flex flex-row gap-x-5">
                            <div class="flex w-1/2 ">
                                <div class="w-full flex flex-col gap-y-0.5">
                                    <label for="nom">Nombre:</label>
                                    <input type="text" name="Nombre" class="w-full px-1 border-2 border-[#D8D0BB]"
                                        required>
                                </div>
                            </div>

                            <div class="flex w-1/2 gap-x-1">
                                <div class="flex flex-col gap-y-0.5 w-1/3">
                                    <label for="pre">Precio:</label>
                                    <input type="number" name="Precio" class="w-32 px-1 border-2 border-[#D8D0BB]"
                                        required>
                                </div>

                                <div class="flex flex-col gap-y-0.5 w-2/3">
                                    <label for="cant" class="text-center">Imagen del producto</label>
                                    <input type="file" name="archivo"
                                        class="file:w-full file:rounded-full file:text-xl file:text-white file:border-none file:bg-[#B8A22A] hover:file:bg-[#C8A22F]"
                                        accept="image/png, image/jpeg" style="font-family: AG;">
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-0.5">
                            <label for="desc">Descripción del pan:</label>
                            <textarea name="Descripcion" id="" cols="30" rows="10" class="border-2 border-[#D8D0BB]"></textarea required>
                        </div>

                        <div class="w-full grid justify-items-center">
                            <button type="submit" id=""
                            class="text-[20px] bg-[#ecbd00] hover:bg-[#CC9B1C] hover:text-white rounded-full border-none px-1 py-0.5 w-1/2"
                             style="font-family: AG;">
                            Agregar producto
                        </button>
                        </div>
                    </form>


                </div>

                <!-- Parte final (Botones) -->
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-x-2">
                    <button id="closeModal"
                        class="text-[20px] bg-[#D3837F] hover:bg-[#BF7773] hover:text-white rounded-full border-none px-1 py-0.5 w-1/3"
                        onclick="" style="font-family: AG;">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <Script>
        document.getElementById('btnMostrar').addEventListener('click', function () {
            document.getElementById('modal-registrar').style.display = 'block';
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('modal-registrar').style.display = 'none';
        });

    </Script>
</body>

</html>
