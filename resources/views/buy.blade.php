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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

<body >
@include('layouts.Header')

<div  class=" w-full md h-full" >

    <div class=" hidden w-full h-1/4 md:flex flex-center items-center">

        <img class="w-full h-full opacity-60" src="{{asset('resources/image/pann.jpg')}}" alt="recoger">
        <div class="flex flex-col justify-center  w-full items-center text-center items-center absolute md:">
            <img class=" w-40 h-40 md:block hidden" src="{{asset('resources/image/charrita.png')}}" alt="logo">
            <p class="montecarlos text-center md:text-7xl text-4xl md:">¿Cómo quiere recoger su pedido?</p>

        </div>
    </div>

    <div class="w-full h-3/4 flex flex-col md:flex-row md:justify-center  items-center gap-x-12">
        <a href="#" class="">
            <div class="md:w-96 md:h-80 w-64 h-52 bg-[#F9F1E7] md:mt-20 mt-10 md:mb-32 mb-16  hover:bg-gray-100 hover:scale-110 flex-col space-y-5">
                <a href="/packet"><img class="w-full h-full" src="{{asset('resources/image/recoger.png')}}" alt="recoger"></a>
                <p class="frank text-center text-2xl">Pasar a buscar</p>
            </div>
        </a>

        <a href="#" class="">
            <div class="md:w-96 md:h-80 w-64 h-52 bg-[#F9F1E7] md:mt-20 mt-10 md:mb-32 mb-16  hover:bg-gray-100 hover:scale-110 flex-col space-y-5">
                <a href="/createPacket"><img class="w-full h-full" src="{{asset('resources/image/deliver.png')}}" alt="deliver"></a>
                <p class="frank text-center text-2xl">Entrega a domicilio</p>
            </div>
        </a>

    </div>



</div>
{{--    @include('layouts.Header')--}}

{{--    <div id="body" class="flex flex-col">--}}
{{--        <div class="flex flex-col px-6 py-6 md:p-6">--}}
{{--            <div class="flex justify-center">--}}
{{--                <h1 class="font-['CatchyMager'] text-[42px]">Tienda</h1>--}}
{{--            </div>--}}
{{--            <div class="flex justify-center">--}}
{{--                <h2 class="font-['CatchyMager'] text-[24px]">¿Comó desea su pedido?</h2>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-1 lg:grid-cols-2 pt-6 px-0 md:px-32">--}}
{{--                <div class="flex flex-col items-center w-full px-6 py-36 border-2 border-[#D8D0BB] gap-2"--}}
{{--                    style="background-image: url('{{ asset('resources/image/pickup.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgba(255, 255, 255, 0.7);">--}}
{{--                    <a href="/packet">--}}
{{--                    <button--}}
{{--                        class="w-56 font-['AppleGaramond'] text-[15px] bg-[#000] hover:bg-[#fff] hover:text-black text-white rounded-[10px] border-none p-[10px]">--}}
{{--                        Pasar a buscar--}}
{{--                    </button>--}}
{{--                    </a>--}}
{{--                    <div class="">--}}
{{--                        <div class="flex justify-center items-center content-center">--}}
{{--                            <div class="border-2 border-[#D8D0BB] w-80 rounded-tl-lg rounded-br-lg h-36">--}}
{{--                                <div class=" px-5 w-full">--}}
{{--                                    <div class="panel-body p-6">--}}
{{--                                        <p class="font-['AppleGaramond'] text-[16px] text-white">Elige los panes que--}}
{{--                                            desees--}}
{{--                                            disponibles en stock nuestra--}}
{{--                                            panadería y pasa por ellos, una--}}
{{--                                            compra rápida.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col items-center px-6 py-36 border-2 border-[#D8D0BB] gap-2 mt-5 lg:mt-0"--}}
{{--                    style="background-image: url('{{ asset('resources/image/domicilio.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-color: rgba(255, 255, 255, 0.7);">--}}
{{--                    --}}{{-- <img src="{{ asset('resources/image/pickup.jpg') }}" class="" alt=""> --}}
{{--                    <a href="/createPacket">--}}
{{--                        <button--}}
{{--                            class="w-56 font-['AppleGaramond'] text-[15px] bg-[#fff] hover:bg-[#000] hover:text-white rounded-[10px] border-none p-[10px]">--}}
{{--                            Deseo armar un paquete--}}
{{--                        </button>--}}
{{--                    </a>--}}
{{--                    <div class="">--}}
{{--                        <div class="flex justify-center items-center">--}}
{{--                            <div class="border-2 border-[#D8D0BB] w-80 rounded-tl-lg rounded-br-lg h-36">--}}
{{--                                <div class=" px-5 w-full">--}}
{{--                                    <div class="panel-body p-6">--}}
{{--                                        <p class="font-['AppleGaramond'] text-[16px] text-white">--}}
{{--                                            Elige, selecciona y crea tu pedido--}}
{{--                                            grande con los panes que gustes--}}
{{--                                            directo a la puerta de tu casa--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @include('layouts.Footer')

     <script src="{{ asset('app/resources/js/Tienda.js')}}"></script>
</body>

</html>
