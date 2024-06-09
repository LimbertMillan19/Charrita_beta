<div id="modal-apartado" class="hidden fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- Contenido del modal -->
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-32 sm:align-middle sm:w-1/3">
            <div class="border-2 border-[#B39555] w-full h-max rounded-tl-lg rounded-br-lg">
                <!-- Header-->
                <div class="h-10 bg-[#B39555] rounded-tl-md w-full flex flex-col justify-center">
                    <h2 class=" text-center text-white">Para finalizar la compra...</h2>
                </div>
                <!-- Body-->
                <div class="flex flex-col gap-y-3 p-5 w-full">
                    <div class="panel-body">
                        <div class="flex flex-col items-center gap-y-2">
                            <div class="flex flex-col w-full items-center">
                                <h2 class="font-['CatchyMager'] text-[24px]">¿Desea apartar su pedido?</h2>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-y-2 mt-5">
                            <div class="flex flex-col w-full items-center">
                                <p class="font-['AppleGaramond'] text-[16px]">
                                    Recuerde que el apartado de su pedido solo dura 2 horas,
                                    despues de ese tiempo el pedido se cancelara y los productos apartados saldran a la
                                    venta...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer flex flex-col-reverse md:flex-row justify-center gap-y-2 md:gap-x-2">

                        <button type="submit"
                            class="w-full md:w-[200px]  font-['AppleGaramond'] text-sm/[15px] bg-[#D3837F] hover:bg-[#BF7773] text-white hover:text-black rounded-[10px] border-none py-[10px]"
                            onclick="closeModal()">Cerrar</button>

                        <form action="{{ route('crear.pedido', Auth::user()->id) }}" method="get">
                            @csrf
                            <button
                                class="w-full md:w-[200px] font-['AppleGaramond'] text-sm/[15px] bg-[#ecbd00] hover:bg-[#CC9B1C] hover:text-white rounded-[10px] border-none p-[10px]">Apartar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
