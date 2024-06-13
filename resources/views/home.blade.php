<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
<body>
{{-- file header --}}
@include('layouts.Header')

{{-- Body --}}
<div id="body" class="flex flex-col md:flex-row h-auto md:h-[700px] bg-[#FBF6F6]">
    {{-- Imagen banner --}}
    <div class="flex w-full h-auto md:h-90 md:w-1/2 overflow-hidden order-2 md:order-1 md:flex">
        <img src="{{ asset('resources/image/BaguetteVector.png') }}" class="absolute scale-x-100 md:scale-x-[1.60] scale-y-100 md:scale-y-125 px-4 md:px-12 xl:px-60 translate-y-0 md:translate-y-24 translate-x-0 md:-translate-x-52">
        <img src="{{ asset('resources/image/Baguette.png') }}" class="w-full px-4 md:px-12 xl:px-8 object-center rotate-0 md:rotate-[-2deg] translate-y-0 md:translate-y-24 translate-x-0 md:-translate-x-28 scale-x-100 md:scale-x-[-1.2]">
    </div>
    <div class="flex flex-col justify-center items-center order-1 md:order-2 mb-8 md:mb-0">
        <img src="{{ asset('resources/charra/saludo.png') }}" class="w-[80px] md:w-[160px] translate-x-0 pb-3 md:translate-x-36 translate-y-0 md:-translate-y-20">
        <h1 class="montecarlos text-[18px] md:text-[46px] md:font-bold text-center translate-x-0 md:translate-x-40 translate-y-0 md:-translate-y-24">De la panadería a tu corazón, la frescura <br class="hidden md:block"> en cada rincón</h1>
        <h2 class=" frank text-[12px] md:text-[16px]   text-center translate-x-0 md:translate-x-40 translate-y-0 md:-translate-y-24">Descubre nuestros productos La Charrita, ingresando a <br class="hidden md:block"> nuestro sitio web <br>
            <br> “La tradición, tu satisfacción y el amor al pan nos impulsa a continuar”</h2>
        <a class=" frank text-[14px] md:text-[20px] md:mt-10    w-2/3 md:w-1/3 text-center rounded-full border border-black px-4 py-2 mt-4 translate-x-0 md:translate-x-40 translate-y-0 md:-translate-y-24 hover:bg-[#CC9B1C]" href="{{ route('buy') }}">Ver tienda</a>
    </div>
</div>
<div id="body" class="flex flex-col md:flex-row bg-[#35261D] h-auto md:h-[580px] justify-center items-center text-center overflow-hidden">
    <div class="w-full md:w-1/3">
        <h1 class="frank text-white text-[18px] md:text-[48px] text-center">Tramite su Charricard</h1><br>
        <h2 class="frank text-white text-[18px] md:text-[18px] text-center">Obtenga su tarjeta de puntos "Charricard" y acceda a descuentos exclusivos y ofertas especiales en nuestra tienda. Además, podrá acumular puntos por cada compra y canjearlos por recompensas exclusivas.</h2>
        <br>
        <a href="/charricard" class="text-[14px] md:text-[12px] w-2/3 md:w-1/3 text-center rounded-full border border-white px-10 py-4 mt-4 items-center text-white hover:bg-[#CC9B1C] frank text-xl">Ver Beneficios</a>
    </div>

    <img src="{{ asset('resources/image/canastapan.png') }}" class="relative scale-x-100 md:scale-x-150 scale-y-100 md:scale-y-[1.5] translate-x-0 md:translate-x-60 translate-y-0 md:translate-y-5">
    <img src="{{ asset('resources/image/charricard.jpeg') }}" class="absolute w-48 rounded-2xl h-28 md:w-96 md:h-52 translate-y-36 md:translate-y-4 translate-x-0 md:translate-x-[500px]">
</div>

<div id="body" class="bg-[#FBF6F6] h-auto md:h-[820px] flex flex-col justify-center items-center text-center overflow-hidden">
    <br><br>
    <h1 class="montecarlos text-black text-[38px] md:text-[82px] text-center mb-12 md:mb-48">Variedades de Pan</h1>
    <div class="flex flex-col md:flex-row space-y-16 md:space-y-0 md:space-x-12 justify-center items-center text-center">
        <div class="bg-[#E9DBBE] w-64 md:w-96 h-48 md:h-72">
            <img src="{{ asset('resources/image/sombrero.png') }}" class="-translate-y-12 md:-translate-y-[90%] -translate-x-2 md:-translate-x-8 rotate-6 w-32 md:w-auto">
            <h1 class="frank text-base md:text-2xl -translate-y-5 md:-translate-y-[380%] text-left ml-3 md:ml-6">Pan Dulce</h1>
            <h1 class="frank -translate-y-5 md:-translate-y-[480%] text-left ml-3 md:ml-6 text-sm md:text-base">Ver más <i class="fa-solid fa-arrow-right"></i></h1>
            <img src="{{ asset('resources/image/concha.png') }}" class="-translate-y-8  md:-translate-y-[53%] h-36 md:h-56 translate-x-20 md:translate-x-28 -rotate-6">
        </div>
        <div class="bg-[#E9DBBE] w-64 md:w-96 h-48 md:h-72">
            <img src="{{ asset('resources/image/sombrero.png') }}" class="-translate-y-12 md:-translate-y-[90%] -translate-x-2 md:-translate-x-8 rotate-6 w-32 md:w-auto">
            <h1 class="frank text-base md:text-2xl -translate-y-5 md:-translate-y-[380%] text-left ml-3 md:ml-6">Pan Salado</h1>
            <h1 class="frank -translate-y-5 md:-translate-y-[480%] text-left ml-3 md:ml-6 text-sm md:text-base">Ver más <i class="fa-solid fa-arrow-right"></i></h1>
            <img src="{{ asset('resources/image/Bizcocho.png') }}" class="-translate-y-10 md:-translate-y-[50%] h-44 md:h-64 translate-x-24 md:translate-x-44 -rotate-6">
        </div>
        <div class="bg-[#E9DBBE] w-64 md:w-96 h-48 md:h-72">
            <img src="{{ asset('resources/image/sombrero.png') }}" class="-translate-y-12 md:-translate-y-[90%] -translate-x-2 md:-translate-x-8 rotate-6 w-32 md:w-auto">
            <h1 class="frank text-base md:text-2xl -translate-y-5 md:-translate-y-[380%] text-left ml-3 md:ml-6">Pan Temporada</h1>
            <h1 class="frank -translate-y-5 md:-translate-y-[480%] text-left ml-3 md:ml-6 text-sm md:text-base">Ver más <i class="fa-solid fa-arrow-right"></i></h1>
            <img src="{{ asset('resources/image/elote.png') }}" class="-translate-y-12 md:-translate-y-[62%] h-36 md:h-56 translate-x-28 md:translate-x-44 -rotate-6">
        </div>
    </div>
</div>

<div class="bg-[#B39555] p-6 md:w-auto md:h-[510px]">
    <h1 class="montecarlos text-3xl md:text-6xl text-center">Visítanos</h1>
    <div class="flex flex-col md:flex-row mt-6 md:mt-20">
        <div class="flex flex-col w-full md:w-1/2 text-center items-center justify-center md:-translate-y-10 mb-10 md:mb-0">
            <img src="{{ asset('resources/charra/guiño.png') }}" class="w-24 md:w-[140px]">
            <p class="frank text-sm md:text-[15px] w-full md:w-1/2 mt-4 md:mt-0 px-4 md:px-0">
                No olvides darnos una visita y probar nuestros productos, La Charrita es una panadería presente en la localidad de muxupip, la cual se dedica a hacer y vender panes orgullosamente tradicionales ofreciéndolos de manera de envíos a domicilio venta directa desde la misma tienda física.
            </p>
        </div>
        <div class="relative flex justify-center items-center w-full h-[200px] md:w-[500px] md:h-[250px] md:translate-x-14">
            <div class="absolute bg-[#797267] w-full h-full md:w-[550px] md:h-[300px]"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.053855563141!2d-89.3414870558613!3d21.04214836670813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56817897f8b34f%3A0xef9d0b8bdb65bd0d!2sMuxupip%2C%2097457%20Muxupip%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1700523953777!5m2!1ses!2smx" class="relative w-full h-full md:w-[500px] md:h-[250px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


        {{-- Seccion 1 --}}
{{--        <div class="flex flex-col p-6">--}}
{{--            <div class="flex justify-center">--}}
{{--                <h1 class="font-['CatchyMager'] text-[42px]">¿Quienes Somos?</h1>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 pt-6 px-6 xl:px-32">--}}
{{--                <div class="">--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <div class="flex justify-center items-center p-6">--}}
{{--                            <img src="{{ asset('resources/image/SolarHomeOutline.png') }}" class="w-24 h-24">--}}
{{--                        </div>--}}
{{--                        <div class="flex justify-center items-center">--}}
{{--                            <div class="border-2 border-[#D8D0BB] w-80 rounded-tl-lg rounded-br-lg">--}}
{{--                                <!-- Header-->--}}
{{--                                <div class="h-6 bg-[#D8D0BB] rounded-tl-md w-full ">--}}
{{--                                </div>--}}
{{--                                <!-- Body-->--}}
{{--                                <div class=" px-5 w-full">--}}
{{--                                    <div class="panel-body p-6">--}}
{{--                                        <p>Somos una panadería hogareña orgullosamente Yucateca ubicada en el municipio de Muxuxpip.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="">--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <div class="flex justify-center items-center p-6">--}}
{{--                            <img src="{{ asset('resources/image/FluentEmojiHighContrastBagel.png') }}" class="w-24 h-24">--}}
{{--                        </div>--}}
{{--                        <div class="flex justify-center items-center">--}}
{{--                            <div class="border-2 border-[#D8D0BB] w-80 rounded-tl-lg rounded-br-lg">--}}
{{--                                <!-- Header-->--}}
{{--                                <div class="h-6 bg-[#D8D0BB] rounded-tl-md w-full ">--}}
{{--                                </div>--}}
{{--                                <!-- Body One Piece ZZZZzzz-->--}}
{{--                                <div class=" px-5 w-full">--}}
{{--                                    <div class="panel-body p-6">--}}
{{--                                        <p>En nuestra panadería hacemos y ofrecemos panes orgullosamente tradicionales y caseros.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="">--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <div class="flex justify-center items-center p-6">--}}
{{--                            <img src="{{ asset('resources/image/HealthiconsVespaMotorcycleOutline.png') }}" class="w-24 h-24">--}}
{{--                        </div>--}}
{{--                        <div class="flex justify-center items-center">--}}
{{--                            <div class="border-2 border-[#D8D0BB] w-80 rounded-tl-lg rounded-br-lg">--}}
{{--                                <!-- Header-->--}}
{{--                                <div class="h-6 bg-[#D8D0BB] rounded-tl-md w-full ">--}}
{{--                                </div>--}}
{{--                                <!-- Body-->--}}
{{--                                <div class=" px-5 w-full">--}}
{{--                                    <div class="panel-body p-6">--}}
{{--                                        <p>Ofrecemos entregas a domicilio de cualquier parte de Muxupip, y otros municipios del estado de Yucatán.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        {{-- Seccion 2 --}}
{{--        <div class="flex flex-col p-6">--}}

{{--            <div class="flex justify-center">--}}
{{--                <h1 class="font-['CatchyMager'] text-[42px]">Contacto</h1>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-6 xl:px-32">--}}
{{--                <div class="flex flex-col pb-0 p-6 md:p-12">--}}
{{--                    <label class="font-['AppleGaramond'] text-[20px]">Nombre</label>--}}
{{--                    <input type="text" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md">--}}
{{--                    <label class="font-['AppleGaramond'] text-[20px]">Telefono</label>--}}
{{--                    <input type="tel" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md">--}}
{{--                    <label class="font-['AppleGaramond'] text-[20px]">Correo</label>--}}
{{--                    <input type="email" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md">--}}
{{--                </div>--}}
{{--                <div class="flex flex-col pt-0 p-6 md:p-12">--}}
{{--                    <label class="font-['AppleGaramond'] text-[20px]">Mensaje:</label>--}}
{{--                    <textarea class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1 h-32 rounded-md"></textarea>--}}
{{--                    <div class="flex justify-center pt-2">--}}
{{--                        <button class="w-[250px] font-['AppleGaramond'] text-sm/[15px] bg-[#B8A22A] hover:bg-[#C8A22F] text-white rounded-[10px] border-none p-[10px]">Enviar</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col items-center justify-center">--}}
{{--                    <img src="{{ asset('resources/image/logo.png') }}" width="200px">--}}
{{--                    <label class="font-['AppleGaramond'] text-[20px]">Muxupip Yucatán <br>Calle 29 entre 26 y 25</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    {{-- File Footer --}}
{{--    @include('layouts.Footer')--}}
</body>
</html>
