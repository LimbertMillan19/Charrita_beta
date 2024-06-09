<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arma tu paquete</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('resources/image/logo.png') }}" type="image/x-icon">
</head>

<body>
@include('layouts.Header')

<div>
    <div class="w-full h-full flex flex-col items-center">

        <div class="w-full h-24 bg-[#B39555] flex justify-end px-10 relative z-10">
            <button id="popoverButton2" class="flex items-center space-x-2">
                <p class="text-xl font-[Libre-Franklin]">Bandeja</p>
                <div class="relative">
                    <img class="w-14 h-14" src="{{ asset('/resources/image/baking-tray.png') }}" alt="bandeja">
                    <span id="cartCounter" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hidden">0</span>
                </div>
            </button>
            <div id="popover2" class="absolute top-full mt-2 p-4 bg-white border border-gray-300 rounded shadow-lg hidden w-96">
                <div id="cartItems" class="space-y-2">

                    <div class="flex flex-col gap-y-5 list-none w-full h-[350px] md:h-[350px] overflow-y-scroll">
                        @foreach ($panesSeleccionados as $selecpanes)
                            <div class="grid grid-cols-2 lg:grid-cols-4 w-full border-2 border-[#D8D0BB]">
                                <div class="flex flex-row items-center justify-center p-2 lg:p-2">
                                    <img src="{{ asset($selecpanes->img . '.jpg') }}" class="rounded-xl h-20 w-40">
                                </div>
                                <div class="flex items-center p-2">
                                    <label>{{ $selecpanes->Nombre }}</label>
                                </div>
                                <div class="grid items-center p-2">
                                    <div class="flex flex-col gap-2 xl:gap-0">
                                        <label class="text-center">Cantidad</label>
                                        <p class='text-center'> {{ $cantidad_pan_packet[$selecpanes->id] }} </p>
                                    </div>
                                </div>
                                <div class="grid items-center p-2">
                                    <div class="flex flex-col gap-2 xl:gap-0">
                                        <label class="text-center">Total</label>
                                        <p class='text-center'> $
                                            <span>{{ $cantidad_pan_packet[$selecpanes->id] * $selecpanes->Precio }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div id="totalPrice" class="text-lg font-bold mt-4 text-center">Total: {{$total}}</div>
                <button onclick="openModal()" class="mt-4 bg-[#B39555] text-black py-2 px-4 rounded w-full font-[Libre-Franklin] font-bold">Confirmar pedido</button>
            </div>
        </div>

        <div class="w-full h-full flex justify-center mt-14">
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-x-20">
                @foreach($panes as $pan)
                    <div class="border shadow-lg mb-4 w-72 h-96 relative group">
                        <div class="w-full h-60">
                            <img src="{{ $pan->img }}.jpg" alt="Imagen" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center space-y-4">
                            <form method="POST" action="{{ route('agregar.carrito.packet') }}" class="flex flex-col items-center space-y-3 xl:gap-0">
                                @csrf
                                <input name="ID" type="text" class="hidden" value="{{ $pan->id }}" />
                                <input name="Disponible" type="text" class="hidden" value="{{ $pan->Cantidad }}" />
                                <p class="font-[Libre-Franklin]">{{ $pan->Cantidad }} disponibles</p>
                                <input name="Cantidad" class="w-full text-black xl:w-40 border-2 border-[#D8D0BB] p-1 text-center" type="number" value="0" />
                                <button type="submit" class="bg-[#D8D0BB] p-1 w-40 bg-white text-black py-2 px-4 border-2 border-[#B39555] font-[Libre-Franklin]">Agregar al carrito</button>
                            </form>


                            <div class="flex flex-col gap-y-2 col-span-2 xl:col-span-1">
                                <div class="relative inline-block w-full">
                                    <button id="popoverButtonDescripcion{{ $pan->id }}" onclick="Descripcionfn({{ $pan->id }})" class="bg-[#D8D0BB] p-1 w-40 bg-white text-black py-2 px-4 border-2 border-[#B39555] font-[Libre-Franklin]">Descripcion</button>
                                    <div id="popoverContentDescripcion{{ $pan->id }}" class="hidden absolute z-50 w-56 lg:w-72 bg-white border border-[#D8D0BB] p-3 rounded shadow-md top-0 mt-8">
                                        <div class="flex flex-col content-center gap-y-1">
                                            <label>Descripcion</label>
                                            <hr class="w-max border-1 border-[#D8D0BB]" style="width: -webkit-fill-available">
                                            <p class="text-black">{{ $pan->Descripcion }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-4 space-y-5 bg-[#F4F5F7]">
                            <p class="text-xl font-black">{{ $pan->Nombre }}</p>
                            <p class="text-lg precio-unitario" data-precio="{{ $pan->Precio }}">${{ $pan->Precio }} c/u</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-10">{{ $panes->links() }}</div>
    </div>
</div>

@include('modal/formaPago')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popoverButton = document.getElementById('popoverButton2');
        const popover = document.getElementById('popover2');
        const cartItemsContainer = document.getElementById('cartItems');
        const cartCounter = document.getElementById('cartCounter');
        const totalPriceElement = document.getElementById('totalPrice');
        const cartItems = [];

        if (popoverButton) {
            popoverButton.addEventListener('click', function (event) {
                event.stopPropagation();
                popover.classList.toggle('hidden');
            });

            document.addEventListener('click', function (event) {
                if (!popover.contains(event.target) && !popoverButton.contains(event.target)) {
                    popover.classList.add('hidden');
                }
            });
        } else {
            console.error('popoverButton not found');
        }

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function () {
                const nombre = this.getAttribute('data-nombre');
                const descripcion = this.getAttribute('data-descripcion');
                const precio = parseFloat(this.getAttribute('data-precio'));
                const imagen = this.getAttribute('data-imagen');

                const existingItem = cartItems.find(item => item.nombre === nombre);
                if (existingItem) {
                    existingItem.cantidad++;
                } else {
                    cartItems.push({ nombre, descripcion, precio, imagen, cantidad: 1 });
                }
                updateCart();
                updateCounter();
            });
        });

        function updateCart() {
            cartItemsContainer.innerHTML = '';
            if (cartItems.length === 0) {
                cartItemsContainer.innerHTML = '<p class="text-lg text-center font-[Libre-Franklin]">Tu bandeja está vacía</p>';
            } else {
                cartItems.forEach((item, index) => {
                    const itemElement = document.createElement('div');
                    itemElement.classList.add('p-2', 'border-b', 'flex', 'items-center', 'space-x-4');
                    const itemTotalPrice = (item.precio * item.cantidad).toFixed(2);
                    itemElement.innerHTML = `
                            <img src="${item.imagen}" alt="${item.nombre}" class="w-16 h-16 object-cover">
                            <div class="flex space-x-6 w-full justify-center items-center">
                                <div class="flex flex-col items-center">
                                    <p class="font-bold font-[Libre-Franklin]">${item.nombre}</p>
                                </div>
                                <div class="flex flex-col items-center">
                                    <p>Cantidad</p>
                                    <input type="number" value="${item.cantidad}" min="1" class="cantidad bg-gray-200 w-16 text-center border border-[#B39555]">
                                </div>
                                <div class="flex flex-col items-center">
                                    <p>Total</p>
                                    <p class="text-center">$<span>${itemTotalPrice}</span></p>
                                </div>
                                <button class="bg-red-500 text-white py-1 px-2 rounded remove-item" data-index="${index}">Eliminar</button>
                            </div>
                        `;
                    cartItemsContainer.appendChild(itemElement);
                });
            }
            updateTotalPrice();
            attachRemoveEventListeners();
            attachQuantityChangeEventListeners();
        }

        function updateTotalPrice() {
            let total = 0;
            cartItems.forEach(item => {
                total += item.precio * item.cantidad;
            });
            totalPriceElement.innerText = `Total: $${total.toFixed(2)}`;
        }

        function updateCounter() {
            cartCounter.innerText = cartItems.length;
            cartCounter.classList.toggle('hidden', cartItems.length === 0);
        }

        function attachRemoveEventListeners() {
            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function () {
                    const index = parseInt(this.getAttribute('data-index'), 10);
                    cartItems.splice(index, 1);
                    updateCart();
                    updateCounter();
                });
            });
        }

        function attachQuantityChangeEventListeners() {
            document.querySelectorAll('.cantidad').forEach(input => {
                input.addEventListener('change', function () {
                    const index = parseInt(this.closest('.remove-item').getAttribute('data-index'), 10);
                    const newQuantity = parseInt(this.value, 10);
                    if (newQuantity > 0) {
                        cartItems[index].cantidad = newQuantity;
                        updateCart();
                    }
                });
            });
        }
    });

    function Descripcionfn(panID) {
        const popoverButton = document.getElementById(`popoverButtonDescripcion${panID}`);
        const popoverContent = document.getElementById(`popoverContentDescripcion${panID}`);
        popoverContent.classList.toggle('hidden');
    }

    function openModal() {
        const modal = document.getElementById('modal-formapago');
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('modal-formapago');
        modal.classList.add('hidden');
    }
</script>
</body>

</html>
