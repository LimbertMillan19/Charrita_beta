<div id="modal-formapago" class="hidden fixed z-10 inset-0 overflow-y-auto">
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
                <div class=" p-5 w-full">
                    <div class="panel-body">
                        <div class="flex flex-col items-center gap-y-2">
                            <div class="flex flex-col w-full md:w-1/2 items-center">
                                <label for="Forma_Pago" class="font-['AppleGaramondBold'] text-[15px]">Forma de
                                    pago</label>
                                <select name="Forma_Pago"
                                    class="w-full font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1 rounded-md">
                                    <option value="Caja">Caja</option>
                                    <option value="PayPal">Paypal</option>
                                </select>
                            </div>
                        </div>
                        <form id="panel-caja" class="flex flex-col items-center gap-y-2 mt-5" style="display: none">
                            <div class="flex flex-row gap-x-2 w-full">
                                <div class="flex flex-col w-full md:w-1/2 items-center">
                                    <label for="titular" class="font-['AppleGaramondBold'] text-[15px]">Nombre
                                        titular*</label>
                                    <input name="titular"
                                        class="w-full font-['AppleGaramond'] text-[16px] border-2 border-[#D8D0BB] px-2 py-1 rounded-md"
                                        type="text" />
                                </div>
                            </div>
                        </form>
                        <div id="panel-paypal" class="flex flex-col items-center gap-y-2 mt-5">
                            <div class="flex flex-col w-full items-center">
                                <button>PayPal</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button onclick="closeModal()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
