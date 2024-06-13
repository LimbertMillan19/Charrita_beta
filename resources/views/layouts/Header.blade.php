<header class="flex flex-col  ">
{{--    <div class="grid grid-cols-2 xl:grid-cols-3 bg-white px-6">--}}
{{--        <div class="hidden xl:block"></div>--}}
        <div class="flex flex-row justify-evenly gap-96">
            <div class="flex items-center ">
            <img src="{{ asset('resources/image/logo_charra.png') }}" class="w-[90px] pr-1 md:w-[60px]">
            <h1 class="font-['CatchyMager'] text-[18px] md:text-[15px]">La Charrita</h1>
            </div>

            <div class="flex items-center h-16 bg-white">
                <div class="flex flex-row gap-2 lg:hidden lg:ml-64 p-4">
                    <label>Menu</label>
                    <button class="lg:hidden" id="open-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M3 6h10v2H3V6m0 10h10v2H3v-2m0-5h12v2H3v-2m13-4l-1.42 1.39L18.14 12l-3.56 3.61L16 17l5-5l-5-5Z" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden lg:flex flex-row list-none gap-x-8 font-['CatchyMager']">
                    <li><a class="text-black hover:text-[#ecbd00]" href="{{ route('home') }}">Inicio</a></li>
                    <li><a class="text-black hover:text-[#ecbd00]" href="{{ route('us') }}">Nosotros</a></li>
                    <li><a class="text-black hover:text-[#ecbd00]" href="{{ route('buy') }}">Tienda</a></li>
                    <li><a class="text-black hover:text-[#ecbd00]" href="{{ route('charri') }}">Charricard</a></li>
                    <li><a class="text-black hover:text-[#ecbd00]" href="{{ route('contact') }}">Contacto</a></li>

                </nav>
            </div>

            <div class="flex flex-row items-center gap-2 space-x-5">
                @auth

                    <div class="hidden lg:flex lg:flex-row gap-2">
                        <div class="relative inline-block">
                            <div class="flex flex-col h-full justify-center">
                                <a id="popoverButton" class="text-black cursor-pointer">{{ Auth::user()->name }}
                                    {{ Auth::user()->lastname }}</a>
                            </div>
                            <div  id="popoverContent"
                                 class="hidden z-20 absolute w-max bg-white border border-gray-300 p-3 rounded shadow-md top-0 mt-8">
                                <div class="flex flex-col content-center gap-y-1 z-20  ">
                                    <a href="">Perfil</a>
                                    @if (Auth::user()->rol == 'Administrador')
                                        <a href="/Admin/main">Panel Admin</a>
                                    @endif
                                    <a href="/orders">Pedidos</a>
                                    <hr class="border-[2px solid #000]">
                                    <a href="{{ route('cerrar_Sesion') }}">Cerrar sesión</a>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('resources/image/user.svg') }}" class="bg-white rounded-full w-10 h-10">
                    </div>
                @else
                    <a href="{{ route('index') }}" class="hidden lg:block font-['CatchyMager'] ">Iniciar Sesión</a>
                @endauth

                <a class="rounded-xl hover:bg-gray-300" href="/packetprueba">
                    <i class="fa-solid fa-basket-shopping text-3xl"></i>

                </a>
            </div>

        </div>



{{--    </div>--}}
    <nav class="bg-white shadow-md lg:hidden fixed top-0 left-0 h-full w-64 transform -translate-x-full transition-transform ease-in-out duration-300"
        id="sidebar">
        <div class="flex flex-col h-full">
            <div class="flex flex-row justify-between bg-[#D8D0BB] text-white py-4 px-6">
                <span class="text-2xl font-semibold">Menu</span>
                <button class="text-white focus:outline-none focus:ring" id="close-sidebar">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col items-start space-y-4 p-4">

                <div class="flex flex-row items-center gap-x-2">
                    <img src="{{ asset('resources/image/user.svg') }}" class="bg-white rounded-full w-10 h-10">
                    @auth
                        <div class="relative inline-block">
                            <a id="popoverButtonMobile" class="text-black cursor-pointer">{{ Auth::user()->name }}
                                {{ Auth::user()->lastname }}</a>

                            <div id="popoverContentMobile"
                                class="hidden absolute w-max bg-white border border-[#D8D0BB] p-3 rounded shadow-md top-0 mt-8">
                                <div class="flex flex-col content-center gap-y-1">
                                    <a href="">Perfil</a>
                                    <a href="">Pedidos</a>
                                    <hr class="border-[2px solid #000]">
                                    <a href="{{ route('cerrar_Sesion') }}">Cerrar sesión</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('index') }}">Iniciar Sesión</a>
                    @endauth
                </div>
                <hr class="w-max border-1 border-[#D8D0BB]" style="width: -webkit-fill-available">
                <nav class="flex flex-col gap-y-5 list-none">
                    <li><a class="{{ Route::currentRouteName() == 'home' ? 'text-[#ecbd00]' : 'text-black' }} hover:text-[#ecbd00] active:text-[#ecbd00]"
                            href="{{ route('home') }}">Inicio</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'us' ? 'text-[#ecbd00]' : 'text-black' }} hover:text-[#ecbd00] active:text-[#ecbd00]"
                            href="{{ route('us') }}">Nosotros</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'buy' ? 'text-[#ecbd00]' : 'text-black' }} hover:text-[#ecbd00] active:text-[#ecbd00]"
                            href="{{ route('buy') }}">Tienda</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'contact' ? 'text-[#ecbd00]' : 'text-black' }} hover:text-[#ecbd00] active:text-[#ecbd00]"
                           href="{{ route('charri') }}">Charricard</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'contact' ? 'text-[#ecbd00]' : 'text-black' }} hover:text-[#ecbd00] active:text-[#ecbd00]"
                            href="{{ route('contact') }}">Contacto</a></li>
                </nav>
            </div>
        </div>
    </nav>


</header>
<script>
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
</script>
@auth
    <script>
        const popoverButton = document.getElementById('popoverButton');
        const popoverContent = document.getElementById('popoverContent');

        popoverButton.addEventListener('click', () => {
            popoverContent.classList.toggle('hidden');
        });

        // Cerrar el popover si se hace clic fuera de él
        document.addEventListener('click', (event) => {
            const isClickInside = popoverButton.contains(event.target) || popoverContent.contains(event.target);

            if (!isClickInside) {
                popoverContent.classList.add('hidden');
            }
        });

        const popoverButtonMobile = document.getElementById('popoverButtonMobile');
        const popoverContentMobile = document.getElementById('popoverContentMobile');

        popoverButtonMobile.addEventListener('click', () => {
            popoverContentMobile.classList.toggle('hidden');
        });

        // Cerrar el popover si se hace clic fuera de él
        document.addEventListener('click', (event) => {
            const isClickInside = popoverButtonMobile.contains(event.target) || popoverContentMobile.contains(event
                .target);

            if (!isClickInside) {
                popoverContentMobile.classList.add('hidden');
            }
        });
    </script>
@endauth
