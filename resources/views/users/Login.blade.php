<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Iniciar Sesión</title>
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

<body class=" ">
@include('layouts.Header')
{{--    Cuerpo principal--}}
<div class="bg-[#F2F2F2] w-screen h-screen flex justify-center items-center " >
    {{--        cuadrado central--}}
    <div class=" w-[90%] md:w-[70%] h-[80%]  flex">

        <div class=" w-full md:w-[50%] h-[100%] bg-white" >

            {{--                Div del form--}}
            <div class="flex flex-col items-center justify-center w-full h-full ">

                <img src="{{ asset('resources/image/charrita.png') }}" alt="Imagen de panes1" class=" md:hidden w-[30%]">

                <h1 class="montecarlos text-7xl pb-16">Bienvenido </h1>

                <form action="{{route('iniciar_Sesion')}}" method="POST" class="">
                    @csrf
                    <div class="flex flex-col pb-6">
                        <label for="email franks  ">Correo</label>
                        <div class="flex flex-row">
                            <i class="fa-solid fa-envelope pr-1  my-auto"></i>
                            <input id="email" name="email" type="email" required autofocus class="rounded-xl w-full border-2 mr-6">
                        </div>

                    </div>

                    <div class="flex flex-col pb-2 ">
                        <label for="password">Contraseña</label>

                        <div>
                            <div class="flex flex-row">
                                <i class="fa-solid fa-lock pr-1 my-auto"></i>
                                <input id="password" name="password" type="password" class="w-full rounded-xl border-2 pl-2" />
                                <button type="button" id="togglePassword">
                                    <i id="toggleIcon" class="fa-solid fa-eye my-auto pl-1"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="pb-12 flex justify-between px-5 " >

                        <div class="flex">
                            <input class="acceblack" type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label text-xs pl-1" for="remember" >
                                Recuérdame
                            </label>

                        </div>

                        <a href="#" class="text-xs">¿Olvidaste tu contraseña?</a>

                    </div>

                    <div class=" flex flex-col">

                        <button type="submit" class="btn btn-primary bg-[#B39555] rounded-xl py-2 px-24">
                            Iniciar Sesión
                        </button>

                        <a href="{{route('register_user')}}" class="text-center pt-3 text-sm underline">
                            ¿No tiene cuenta? Registrese
                        </a>

                    </div>




                </form>

            </div>




        </div>

        {{--            Cuadrados interiores--}}
        <div class="w-[50%] h-[100%] bg-[#B39555] md:flex flex-col items-center justify-center hidden  " >

            <img src="{{ asset('resources/image/paneslogin.png') }}" alt="Imagen de panes1" class="w-[90%] h-[50%] -rotate-0">
            <img src="{{ asset('resources/image/paneslogin.png') }}" alt="Imagen de panes2" class="w-[90%] h-[50%]  scale-x-[-1]">
            <img src="{{ asset('resources/image/charrita.png') }}" alt="Imagen de panes1" class="absolute scale-50">

        </div>




    </div>
</div>

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




</body>
</html>
