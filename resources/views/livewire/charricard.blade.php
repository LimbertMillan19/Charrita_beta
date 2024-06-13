<div class="w-full h-full overflow-hidden mb-10">
    <div class="w-full h-1/2 md:flex-row flex flex-col">
        <div class="md:w-1/2 h-full flex flex-col space-y-14 items-center mt-auto mb-auto ">
            <p class="font-[MonteCarlo] text-7xl">Beneficios</p>
            <p class="font-[Libre-Franklin] text-xl text-justify md:pl-6 px-5">La Charricard es la oportunidad de que todo cliente tenga acceso y pueda tener todos los beneficios que ofrece usar la web de “La Charrita”.
                La Charricard está disponible para todo tipo de usuario, todos pueden solicitar la suya sin costo alguno, esto para:
                <br>
                <br>
                - La acumulación de puntos en las compras.
                <br>
                - Obtención de descuentos.
                <br>
                - Promociones o participación en dinámicas donde podrás ganar regalos.
                <br>
                <br>
                Todos pueden tener su tarjeta, en el caso de los clientes de edad avanzada que no tengan acceso a la web de La Charrita estos pueden solicitar
                su tarjeta en la web con ayuda de algún conocido o directamente desde la tienda física.</p>
        </div>

        <div class="relative md:w-1/2 h-full flex flex-col space-y-6 items-center">
            <img class="w-full h-full block " src="{{asset('resources/image/adorno_tarjeta.png')}}" alt="adornoA">
            <img  class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 md:w-96 md:h-52 w-56 h-36 rounded-xl " src="{{asset('resources/image/charricard.jpeg')}}" alt="adorno2">

        </div>
    </div>

    <div class="flex flex-col items-center mt-5">
        <p class="font-[MonteCarlo] md:text-7xl text-5xl">Solicitar la charricard</p>
        <div class="w-full md:flex-row flex flex-col md:justify-center items-center md:space-x-14 space-y-8 md:space-y-0 md:mt-5 mt-10">
            <livewire:ParaMi />
            <livewire:ParaConocido />
        </div>
    </div>


    <div class="w-full h-1/2 flex md:flex-row flex-col mt-16 space-y-10 md:space-y-0 ">
        <div class="md:w-1/2 w-full md:h-full h-1/2 flex justify-center items-center">
            <div class="w-[500px] h-72 bg-white">
                <img class="w-full h-full" src="{{asset('resources/image/fondocard.jpeg')}}" alt="adornoB">
                @foreach($tarjetas as $tarjeta)
                    <div class="flex items-center space-x-2 -translate-y-64 translate-x-4">
                        <img class="w-20 h-20 " src="{{asset('resources/image/logo_charra.png')}}" alt="logo">
                    </div>

                    <div class="w-full flex flex-col -translate-y-80 items-center">
                        <img class="w-56 h-56 " src="{{asset('resources/image/comer_pan.png')}}" alt="logo">

                        <div class="w-full flex justify-between px-6 -translate-y-6">
                            <p class="font-[Libre-Franklin]">Tarjeta No. {{$tarjeta->num_tarjeta}}</p>
                            <p class="font-[Libre-Franklin]">Lacharrita.com</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="md:w-1/2 w-full md:h-full h-1/2 flex justify-center items-center">
            <div class="w-[500px] h-72 bg-white relative">
                <img class="w-full h-full" src="{{asset('resources/image/fondocard.jpeg')}}" alt="adorno">
                @foreach($tarjetas as $tarjeta)
                    <div class="flex items-center space-x-2 -translate-y-64 translate-x-4">
                        <img class="w-20 h-20 " src="{{asset('resources/image/logo_charra.png')}}" alt="logo">
                        <div class="flex flex-col items-center">
                            <p class="font-[Libre-Franklin]">LA CHARRICARD</p>
                            <p class="font-[Libre-Franklin]">Cliente leal</p>
                        </div>
                        <img class="w-16 h-10 md:block hidden mb-4" src="{{asset('resources/image/sombrero.png')}}" alt="logo">
                    </div>

                    <div class="flex flex-col -translate-y-64 translate-x-28 space-y-3">
                        <div class="flex flex-col">
                            <p class="font-[Libre-Franklin]">Nombre del cliente</p>
                            <p class="font-[Libre-Franklin]">{{$tarjeta->nombres}} {{$tarjeta->apellidos}}</p>
                        </div>

                        <div class="flex flex-col">
                            <p class="font-[Libre-Franklin]">N. de cliente</p>
                            <p class="font-[Libre-Franklin]">{{$tarjeta->num_cliente}}</p>
                        </div>
                    </div>

                    <p class="font-[Libre-Franklin] -translate-y-56 px-4">Tarjeta No. {{$tarjeta->num_tarjeta}}</p>
                @endforeach

                <div class="absolute top-1/2 left-1/2 transform translate-x-8 -translate-y-32 flex flex-col items-center">
                    <img class="w-36 h-30 mb-4 translate-y-6 translate-x-4" src="{{asset('resources/image/globo_charra.png')}}" alt="logo">
                    <img class="w-40 h-40  mb-4" src="{{asset('resources/image/guiño.png')}}" alt="logo">
                </div>
            </div>
        </div>
    </div>

</div>
