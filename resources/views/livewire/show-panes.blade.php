<div>
    <div class="w-full h-full flex flex-col items-center">



        <div class="w-full h-24 bg-[#B39555] flex justify-end px-10 relative z-50">
            <button id="popoverButton2" class="flex items-center space-x-2">
                <p class="text-xl font-[Libre-Franklin]">Bandeja</p>
                <div class="relative">
                    <img class="w-14 h-14" src="{{ asset('/resources/image/baking-tray.png') }}" alt="bandeja">
                    <span id="cartCounter" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hidden">0</span>
                </div>
            </button>
            <div id="popover2" class="absolute top-full mt-2 p-4 bg-white border border-gray-300 rounded shadow-lg hidden w-72">
                <div id="cartItems" class="space-y-2">
                    <p class="text-lg text-center font-[Libre-Franklin]">Tu bandeja está vacía</p>
                </div>
                <div id="totalPrice" class="text-lg font-bold mt-4 text-right">Total: $0</div>
                <button id="confirmOrder" class="mt-4 bg-[#B39555] text-black py-2 px-4 rounded w-full font-[Libre-Franklin] font-bold">Confirmar pedido</button>
            </div>
        </div>



        <div class="w-full h-full flex justify-center mt-14">
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-x-20">
                @foreach($panes as $pan)
                    <div class="border overflow-hidden shadow-lg mb-4 w-72 h-96 relative group">
                        <div class="w-full h-60">
                            <img src="{{ $pan->img }}.jpg" alt="Imagen" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center space-y-4">
                            <button class="add-to-cart w-40 bg-white text-black py-2 px-4 border-2 border-[#B39555] font-[Libre-Franklin]" data-nombre="{{ $pan->nombre }}" data-descripcion="{{ $pan->descripcion }}" data-precio="{{ $pan->precio }}" data-imagen="{{ $pan->img }}">Agregar al carrito</button>
                            <button class="w-40 bg-white text-black py-2 px-4 border-2 border-[#B39555] font-[Libre-Franklin] opacity-60">Ver producto</button>
                        </div>
                        <div class="px-4 py-4 space-y-5 bg-[#F4F5F7]">
                            <p class="text-xl font-black">{{ $pan->nombre }}</p>
                            <p>{{ $pan->descripcion }}</p>
                            <p class="text-lg precio-unitario" data-precio="{{ $pan->precio }}">$ {{ $pan->precio }} c/u</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-10">{{ $panes->links() }}</div>
    </div>
</div>

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
                if (!popover2.contains(event.target) && !popoverButton2.contains(event.target)) {
                    popover2.classList.add('hidden');
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
hOLAAAA
                            <div class="flex flex-col items-center">
                                <p class="font-bold font-[Libre-Franklin]">${item.nombre}</p>
                                <p class="text-lg whitespace-nowrap overflow-hidden text-ellipsis font-[Libre-Franklin]">$ ${itemTotalPrice}</p>
                            </div>
                            <div class="flex flex-col space-y-2 items-center">
                                <div class="flex items-center space-x-2">
                                    <button class="decrease-quantity bg-gray-300 px-2" data-index="${index}">-</button>
                                    <span>${item.cantidad}</span>
                                    <button class="increase-quantity bg-gray-300 px-2" data-index="${index}">+</button>
                                </div>
                                <button class="remove-item text-red-500 font-[Libre-Franklin]" data-index="${index}">Eliminar</button>
                            </div>
                        </div>
                    `;
                    cartItemsContainer.appendChild(itemElement);
                });

                document.querySelectorAll('.increase-quantity').forEach(button => {
                    button.addEventListener('click', function () {
                        const index = this.getAttribute('data-index');
                        cartItems[index].cantidad++;
                        updateCart();
                        updateCounter();
                        updateTotalPrice();
                    });
                });

                document.querySelectorAll('.decrease-quantity').forEach(button => {
                    button.addEventListener('click', function () {
                        const index = this.getAttribute('data-index');
                        if (cartItems[index].cantidad > 1) {
                            cartItems[index].cantidad--;
                        } else {
                            cartItems.splice(index, 1);
                        }
                        updateCart();
                        updateCounter();
                        updateTotalPrice();
                    });
                });

                document.querySelectorAll('.remove-item').forEach(button => {
                    button.addEventListener('click', function () {
                        const index = this.getAttribute('data-index');
                        cartItems.splice(index, 1);
                        updateCart();
                        updateCounter();
                        updateTotalPrice();
                    });
                });
            }
            updateTotalPrice();
        }

        function updateCounter() {
            const itemCount = cartItems.reduce((total, item) => total + item.cantidad, 0);
            if (itemCount > 0) {
                cartCounter.textContent = itemCount;
                cartCounter.classList.remove('hidden');
            } else {
                cartCounter.classList.add('hidden');
            }
        }

        function updateTotalPrice() {
            const totalPrice = cartItems.reduce((total, item) => total + item.precio * item.cantidad, 0);
            totalPriceElement.textContent = `Total: $${totalPrice.toFixed(2)}`;
        }

        document.getElementById('confirmOrder').addEventListener('click', function () {
            alert('Orden confirmada!');
            console.log(cartItems); // Este es solo un ejemplo. Aquí enviarías los datos al servidor.
            // Limpiar el carrito después de confirmar
            cartItems.length = 0;
            updateCart();
            updateCounter();
            document.getElementById('popover2').classList.add('hidden');
        });
    });
</script>
