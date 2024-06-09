<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprar</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('resources/image/logo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=MonteCarlo&display=swap" rel="stylesheet">

    <style>
        .montecarlos{
            font-family: "MonteCarlo", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .frank{
            font-family: "Frank Ruhl Libre", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
@include('layouts.Header')

<div class="w-full md:h-full -z-50">
    <div class="hidden w-full h-1/5 md:flex flex-center items-center">
        <img class="w-full h-full opacity-75" src="{{ asset('resources/image/fondopanes3.jpg') }}" alt="recoger">
        <div class="flex flex-col justify-center w-full items-center text-center absolute">
            <img class="w-32 h-32 md:block hidden" src="{{ asset('resources/charra/logo_charra.png') }}" alt="logo">
            <p class="montecarlos text-center md:text-7xl text-4xl">Mi Bandeja</p>
        </div>
    </div>
</div>

{{--cuadro principal--}}
<div class="w-[80%] pt-14 pb-20 mx-auto">
    {{--    dos cuadros del centro--}}
    <div class="flex flex-row">
        {{--        cuadro de precios--}}
        <div class="w-[70%] mr-10">
            <div class="bg-[#B39555] h-10"></div>

            @foreach ($panesSeleccionados as $selecpanes)
                <div class="flex flex-row items-center">
                    <img class="w-28 h-28 p-2" src="{{ asset($selecpanes->img . '.jpg') }}" >

                    <p class="pl-10 w-36">
                        {{ $selecpanes->Nombre }}
                    </p>

                    <p class="pl-20 w-32">
                        ${{ $selecpanes->Precio }}
                    </p>

                    <p class="pl-28 w-32">
                    <p class="pl-2 pr-2">{{ $cantidad_pan[$selecpanes->id] }}</p>
                    </p>

                    <p class="pl-20">
                        $<span>{{ $cantidad_pan[$selecpanes->id] * $selecpanes->Precio }}</span>
                    </p>

                    <p class="pl-10 w-28">
                        <i class="fa-solid fa-trash-can"></i>
                    </p>
                </div>
            @endforeach
        </div>

        {{--        cuadro de canasta--}}
        <div class="bg-[#B39555] w-[30%] h-[50%]">
            <p class="font-bold montecarlos text-center text-5xl pt-8">Total a pagar</p>
            <p class="franks pt-10 pb-7 text-md text-center">Subtotal: ${{ $total }}</p>
            <p class="franks pb-10 text-lg text-center">Total: ${{ $total }}</p>
            <div class="flex justify-center pb-10">
                <button onclick="openModal()" class="hover:bg-[#8d743f] text-center px-12 py-2 border-2 border-black rounded-xl">Comprar</button>
            </div>
        </div>
    </div>
</div>

@include('modal.apartado')
@include('layouts.Footer')

<script>
    function openModal() {
        document.getElementById('modal-apartado').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal-apartado').classList.add('hidden');
    }

    document.addEventListener("DOMContentLoaded", function() {
        const sidebar = document.getElementById('sidebar');
        const openSidebar = document.getElementById('open-sidebar');
        const closeSidebar = document.getElementById('close-sidebar');

        openSidebar.addEventListener('click', function() {
            sidebar.classList.remove('-translate-x-full');
        });

        closeSidebar.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
        });
    });

    function Descripcionfn(id) {
        let btn = 'popoverButtonDescripcion' + id;
        let content = 'popoverContentDescripcion' + id;
        let popoverButton = document.getElementById(btn);
        let popoverContent = document.getElementById(content);

        popoverContent.classList.toggle('hidden');

        document.addEventListener('click', (event) => {
            const isClickInside = popoverButton.contains(event.target) || popoverContent.contains(event.target);

            if (!isClickInside) {
                popoverContent.classList.add('hidden');
            }
        });
    }
</script>
</body>

</html>
