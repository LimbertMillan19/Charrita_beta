<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('resources/image/logo.png') }}" type="image/x-icon">
</head>

<body>
    @include('layouts.Header')

    <div id="body" class="flex flex-col">
        <div class="flex flex-col p-6">
            <div class="flex justify-center">
                <h1 class="text-[42px]" style="font-family: CM">CONTACTO</h1>
            </div>
        </div>
        <section>
            <div class="flex flex-col lg:flex-row gap-y-2 gap-x-3">
                <form class="flex flex-col w-full lg:w-1/2 py-6 px-12 sm:px-24 md:px-32 lg:px-40 gap-y-3">
                    <div class="flex flex-row jus gap-x-2">
                        <div class="flex flex-col w-full">
                            <h2 class="font-['CM'] text-[24px]" >Escribe tu mensaje en el siguiente:</h2>
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <div class="flex flex-col w-full">
                            <label class="font-['AppleGaramond'] text-[20px]">Nombre completo<span
                                    class="text-red-600">*</span></label>
                            <input type="text"
                                class="w-full font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md">
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <div class="flex flex-col w-full">
                            <label class="font-['AppleGaramond'] text-[20px]">Email<span
                                    class="text-red-600">*</span></label>
                            <input type="email"
                                class="w-full font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md">
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <div class="flex flex-col w-full">
                            <label class="font-['AppleGaramond'] text-[20px]">Telefono<span
                                    class="text-red-600">*</span></label>
                            <input type="tel"
                                class="w-full font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1  rounded-md">
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <div class="flex flex-col w-full">
                            <label class="font-['AppleGaramond'] text-[20px]">Mensaje</label>
                            <textarea class="font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1 h-32 rounded-md">
                                !Quiero más información!
                            </textarea>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center gap-x-2">
                        <div class="flex pt-2">
                            <button
                                class="w-[250px] font-['AppleGaramond'] text-sm/[15px] bg-[#B8A22A] hover:bg-[#C8A22F] text-white rounded-[10px] border-none p-[10px]">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="flex flex-col w-full lg:w-1/2 py-6 px-6 lg:px-24">
                    <div class="flex flex-row jus gap-x-2">
                        <div class="flex flex-col w-full">
                            <h2 class="font-['CatchyMager'] text-[24px]">Puedes visitarnos en nuestra tienda física</h2>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <p class="font-['AppleGaramond'] text-[16px]">
                            Estamos ubicados en eñ municipio de
                            Muxupip en el estado de Yucatán, la
                            dirección (dirección).
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.053855563141!2d-89.3414870558613!3d21.04214836670813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56817897f8b34f%3A0xef9d0b8bdb65bd0d!2sMuxupip%2C%2097457%20Muxupip%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1700523953777!5m2!1ses!2smx" class="w-full h-auto sm:h-56" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="font-['AppleGaramond'] text-[16px]">
                            No dude en comunicarse con nosotros
                            hoy mismo para obtener un
                            presupuesto, realizar pedidos, solicitar
                            información u cualquier otro tipo de
                            consulta. Estaremos encantados de
                            ayudar y responder a todas sus
                            preguntas.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.Footer')
</body>

</html>
