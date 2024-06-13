<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="overflow-x-hidden">

@include('layouts.Header')
{{--    Cuerpo principal--}}
<div class="bg-[#F2F2F2] w-screen h-screen flex justify-center items-center " >
    {{--        cuadrado central--}}
    <div class=" w-[90%] md:w-[70%] h-[80%]  flex">

        {{--            Cuadrados interiores--}}
        <div class="w-[50%] h-[100%] bg-[#B39555] md:flex flex-col items-center justify-center hidden  " >

            <h1 class="montecarlos text-7xl pb-7">Registrate </h1>

            <img src="{{ asset('resources/image/paneslogin.png') }}" alt="Imagen de panes1" class="w-[90%] h-[70%] -rotate-0">

            <img src="{{ asset('resources/image/charrita.png') }}" alt="Imagen de panes1" class="absolute scale-50">

        </div>

        <div class=" w-full md:w-[50%] h-[100%] bg-white" >
            {{--                Div del form--}}
            <div class="flex flex-col items-center justify-center w-full h-full ">

                <img src="{{ asset('resources/image/logoo.png') }}" alt="Imagen de panes1" class=" md:hidden w-[30%]">



                <form action="{{route('validar_Registro')}}" method="POST" class="">
                    @csrf
{{--                  Cuadro Name--}}
                    <div class="flex flex-col pb-3">
                        <label for="name" class="franks pl-5 pt-7">Nombre</label>
                        <div class="flex flex-row">
                            <i class="fa-solid fa-user pr-1  my-auto"></i>
                            <input id="name" name="name" type="text" required autofocus class="rounded-xl w-full border-2 mr-6 pl-2">
                        </div>
                    </div>

                    {{--                  Cuadro lastname--}}
                    <div class="flex flex-col pb-3">
                        <label for="lastname" class="franks pl-5 ">Apellido</label>
                        <div class="flex flex-row">
                            <i class="fa-solid fa-user pr-1  my-auto"></i>
                            <input id="lastname" name="lastname" type="text" required autofocus class="rounded-xl w-full border-2 pl-2 mr-6">
                        </div>
                    </div>

{{--                    Cuadro Correo--}}
                    <div class="flex flex-col pb-3">
                        <label for="email" class="franks pl-5">Correo</label>
                        <div class="flex flex-row">
                            <i class="fa-solid fa-envelope pr-1  my-auto"></i>
                            <input id="email" name="email" type="email" required autofocus class="rounded-xl w-full border-2 pl-2 mr-6">
                        </div>
                    </div>

                    <div class="flex flex-col pb-3">
                        <label for="email" class="franks pl-5">Teléfono</label>
                        <div class="flex flex-row">
                            <i class="fa-solid fa-phone pr-1  my-auto"></i>
                            <input id="phone" name="phone" type="number" required autofocus class="rounded-xl w-full border-2 pl-2 mr-6">
                        </div>
                    </div>

                    <div class="flex flex-col pb-3">
                        <label for="location" class="franks pl-5">Comunidad/Localidad</label>
                        <div class="flex flex-row">
                            <i class="fa-solid fa-map-location-dot pr-1  my-auto"></i>
                            <input id="location" name="location" type="text" required autofocus class="rounded-xl w-full border-2 pl-2 mr-6">
                        </div>
                    </div>

                    <div class="flex flex-col pb-3 ">
                        <label for="password">Contraseña</label>


                        <div>
                            <div class="flex flex-row">
                                <i class="fa-solid fa-lock pr-1 my-auto"></i>
                                <input id="password" name="password" type="password" class="w-full rounded-xl border-2 pl-2 " />
                                <button type="button" id="togglePassword">
                                    <i id="toggleIcon" class="fa-solid fa-eye my-auto pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col pb-9 ">
                        <label for="password">Confirmar contraseña</label>

                        <div>
                            <div class="flex flex-row">
                                <i class="fa-solid fa-lock pr-1 my-auto"></i>
                                <input id="verif_password" name="verif_password" type="password" class="w-full rounded-xl border-2 pl-2" />
                                <button type="button" id="togglePassword2">
                                    <i id="toggleIcon2" class="fa-solid fa-eye my-auto pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class=" flex flex-col">

                        <button type="submit" class="btn btn-primary bg-[#B39555] rounded-xl py-2 px-24">
                            Iniciar Sesión
                        </button>

                    </div>




                </form>

            </div>




        </div>






    </div>
</div>






{{--    <!-- Panel-->--}}
{{--    <div class="grid content-center h-screen px-[3%] lg:px-[30%]">--}}
{{--        <div class="w-full border-2 border-[#B39555] rounded-tl-lg rounded-br-lg">--}}
{{--            <!-- Header-->--}}
{{--            <div class="flex justify-center h-20 bg-[#B39555] rounded-tl md:w-full ">--}}
{{--                <img src="{{ asset('resources/image/logo.png') }}" width="100px" class="radius-b absolute w-28 -mt-9 md:-mt-12 md:w-1/6 lg:w-32 lg:-mt-18">--}}
{{--            </div>--}}
{{--            <!-- Body-->--}}
{{--            <form class=" px-5 py-5 w-full" action="{{route('validar_Registro')}}" method="post">--}}
{{--                @csrf--}}
{{--                <div class="panel-body">--}}
{{--                    <div class="flex flex-row gap-x-4">--}}
{{--                        <h1 class="font-['CatchyMager'] text-[24px] w-full text-center">REGISTRO</h1>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col md:flex-row gap-x-4">--}}
{{--                        <div class="flex flex-col w-1/2">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Nombre</label>--}}
{{--                            <input name="name" type="text" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-col w-1/2">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Apellido</label>--}}
{{--                            <input name="lastname" type="text" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-row gap-x-4">--}}
{{--                        <div class="flex flex-col w-full">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Correo</label>--}}
{{--                            <input name="email" type="email" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-row gap-x-4">--}}
{{--                        <div class="flex flex-col w-1/2">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Telefono</label>--}}
{{--                            <input name="phone" type="number" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-col w-1/2">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Comunidad/Localidad</label>--}}
{{--                            <input name="location" type="text" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-row gap-x-4">--}}
{{--                        <div class="flex flex-col w-1/2">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Contraseña</label>--}}
{{--                            <input id="password" name="password" type="password" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                            <div class="flex flex-row gap-x-2 pt-2">--}}
{{--                                <img src="{{ asset('resources/image/MdiEye.png') }}" onclick="togglePasswordVisibility()" class="w-6 h-8 cursor-pointer">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-col w-1/2">--}}
{{--                            <label class="font-['AppleGaramond'] text-[20px]">Confirmar</label>--}}
{{--                            <input name="verif_password" type="password" class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col pt-4 gap-y-2 px-[25%]">--}}
{{--                    <button type="submit" class="w-full font-['AppleGaramond'] text-sm/[15px] bg-[#ecbd00] hover:bg-[#CC9B1C] hover:text-white rounded-[10px] border-none p-[10px]">Registrar</button>--}}
{{--                    <button type="button" class="w-full font-['AppleGaramond'] text-sm/[15px] bg-[#B8A22A] hover:bg-[#C8A22F] text-white rounded-[10px] border-none p-[10px]">Iniciar Sesion</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.getElementById('togglePassword');
            const toggleIcon = document.getElementById('toggleIcon');
            let showPassword = false;

            toggleButton.addEventListener('click', function () {
                showPassword = !showPassword;
                if (showPassword) {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('verif_password');
            const toggleButton = document.getElementById('togglePassword2');
            const toggleIcon = document.getElementById('toggleIcon2');
            let showPassword = false;

            toggleButton.addEventListener('click', function () {
                showPassword = !showPassword;
                if (showPassword) {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                }
            });
        });
    </script>
</body>
</html>
