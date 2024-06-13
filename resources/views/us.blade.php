<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('resources/image/logo.png') }}" type="image/x-icon">

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


        <div class="w-full md h-full">
            <img class="md:w-1/2 h-full block md:hidden" src="{{asset('resources/image/adorno.png')}}" alt="recoger">
            <img class="md:w-1/2 h-28 right-0 -translate-y-28 absolute block md:hidden" src="{{asset('/adorno2.png')}}" alt="recoger">

            <div class="w-full h-1/4 flex">
                <div class="md:w-1/2 w-full h-full mt-10 md:mt-0">
                    <p class="md:text-6xl text-4xl montecarlos text-center">De la panadería a tu corazón , la frescura en cada rincón</p>
                    <p class="md:text-6xl text-4xl montecarlos text-center">¿Quienes somos?</p>
                </div>

                <img class="md:w-1/2 h-64 md:block hidden" src="{{asset('resources/image/adorno.png')}}" alt="recoger">
                <img class="md:w-1/2 h-64 right-0 absolute md:block hidden" src="{{asset('resources/image/adorno2.png')}}" alt="recoger">



            </div>

            <div class="w-full h-3/4 flex flex-col md:flex-row md:justify-center md:space-x-28 mt-16">
                <div class="flex-col">

                    <img class=" w-80 h-54 mx-auto md:mx-0" src="{{asset('resources/image/shop.png')}}" alt="shop">

                    <div class="w-72 h-60 bg-[#FFDE59] flex justify-center items-center mx-auto md:mx-0">
                        <div class="w-60 h-48 bg-[#FBF6F6]">
                            <p class="text-center py-12 franks">Somos una panadería hogareña orgullosamente Yucateca ubicada en el municipio de muxipip</p>
                        </div>
                    </div>
                </div>

                <div class="flex-col md:translate-x-10 ">

                    <img class=" w-96 h-54 mb-6 mt-6 mx-auto md:mx-0" src="{{asset('resources/image/bread.png')}}" alt="bread">

                    <div class="w-72 h-60 bg-[#FFDE59] flex justify-center items-center mx-auto md:mx-0">
                        <div class="w-60 h-48 bg-[#FBF6F6]">
                            <p class="text-center py-12 franks">En nuestra panadería hacemos y ofrecemos panes orgullosamente tradicionales y caseros</p>
                        </div>
                    </div>
                </div>


                <div class="flex-col">

                    <img class=" w-80 h-54 mb-2 mt-3 mx-auto md:mx-0" src="{{asset('resources/image/entrega.png')}}" alt="entrega">

                    <div class="w-72 h-60 bg-[#FFDE59] flex justify-center items-center mx-auto md:mx-0">
                        <div class="w-60 h-48 bg-[#FBF6F6]">
                            <p class="text-center py-12 franks">Ofrecemos entregas a domicilio de cualquier parte de Muxupip y otros estados del estado de Yucatán</p>
                        </div>
                    </div>
                </div>

                <img class=" w-52 h-44 left-1 -translate-x-24 translate-y-96 absolute md:block hidden" src="{{asset('resources/image/trigo.png')}}" alt="trigo">

                <img class=" w-52 h-44 -translate-x-56 translate-y-96 absolute md:block hidden" src="{{asset('resources/image/trigo.png')}}" alt="trigo">

                <img class=" w-52 h-44 translate-x-60 translate-y-96 absolute md:block hidden" src="{{asset('resources/image/trigo.png')}}" alt="trigo">

            </div>

            <div class="w-full py-9 bg-[#B39555] md:flex justify-center md:mt-36 mt-20 mb-16">
                <div class="w-[40%] pb-7 text-center flex flex-col justify-center items-center">
                    <img class="w-[30%]" src="{{asset('resources/charra/mirada_baja.png')}}" alt="">
                    <p class="franks" >La panadería “La Charrita” es un negocio familiar que se estableció en el año de 2022, con el propósito de ofrecer pan tanto a particulares como a mayoristas. Está ubicada en Muxupip, Yucatán, y recientemente ha lanzado una página web que lleva el mismo nombre “La Charrita” para mejorar  en ventas y tener presencia en internet. “La Charrita” siempre se ha enfocado en satisfacer las necesidades de sus clientes, garantizando la máxima calidad en sus productos y servicios. Su deseo es brindar a los clientes una experiencia de compra y un servicio de envío rápido, agradable y acogedor además de abarcar a todos los clientes posibles una experiencia y beneficio que da la panadería por igual. </p>
                </div>
            </div>
        </div>

    @include('layouts.Footer')
</body>

</html>
