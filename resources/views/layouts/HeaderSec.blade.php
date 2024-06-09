<div class="flex items-center h-max bg-[#B39555]">
    <div class="flex flex-row p-1 justify-between w-full">
        <a href="/">
            <div class="flex flex-row items-center justify-center">
                <img src="{{ asset('resources/image/logo.png') }}" class="w-[60px] md:w-[75px]">
                <h1 class="font-['CatchyMager'] text-[20px] mdtext-[25px]">La Charrita</h1>
            </div>
        </a>
        <div class="flex items-center lg:flex-row gap-2">
            <div class="relative inline-block">
                <a id="popoverButtonMenu" class="text-white cursor-pointer">{{ Auth::user()->name }} <br
                        class="sm:hidden">{{ Auth::user()->lastname }}</a>

                <div id="popoverContentMenu"
                    class="hidden absolute z-[100] w-max bg-white border border-gray-300 p-3 rounded shadow-md top-0 mt-8">
                    <div class="flex flex-col content-center gap-y-1">
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
    </div>
</div>

<script>
    const popoverButtonMenu = document.getElementById('popoverButtonMenu');
    const popoverContentMenu = document.getElementById('popoverContentMenu');

    popoverButtonMenu.addEventListener('click', () => {
        popoverContentMenu.classList.toggle('hidden');
    });

    // Cerrar el popover si se hace clic fuera de él
    document.addEventListener('click', (event) => {
        const isClickInside = popoverButtonMenu.contains(event.target) || popoverContentMenu.contains(event
            .target);

        if (!isClickInside) {
            popoverContentMenu.classList.add('hidden');
        }
    });
</script>
