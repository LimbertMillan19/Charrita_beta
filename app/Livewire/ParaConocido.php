<?php

namespace App\Livewire;

use App\Models\TarjetaConocidos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithAuthRedirect;

class ParaConocido extends Component
{


    public $modal = false;
    public $alertModal = false;
    public $nombres = '';
    public $apellidos = '';
    public $telefono = '';
    public $correo = '';

    public function render()
    {
        return <<<'HTML'
        <div>
            <button wire:click="handleButtonClick" class="rounded-xl bg-[#B39555] w-40 px-2 py-2 font-[Libre-Franklin]">
                Para alguien más
            </button>

            <x-confirmation-modal wire:model="modal">

                <x-slot:title>
                    <div class="relative">
                        <div class="absolute translate-x-60">
                            <button wire:click="$set('modal', false)" class="bg-[#B39555] w-10 h-10 text-black text-bold text-2xl">X</button>
                        </div>

                        <div class="flex justify-between items-center">
                            <h1 class="text-4xl font-bold text-black font-[MonteCarlo]">Ingrese los datos</h1>
                        </div>
                    </div>
                </x-slot:title>


                <x-slot:content>
                    <form wire:submit.prevent="save">
                        <div class="flex flex-col space-y-5 justify-center">
                            <div class="flex-col">
                                <h2 class="font-[Libre-Franklin]">Nombre(s): </h2>
                                <input type="text" wire:model="nombres" class="w-full">
                            </div>
                            <div class="flex-col">
                                <h2 class="font-[Libre-Franklin]">Apellidos: </h2>
                                <input type="text" wire:model="apellidos" class="w-full">
                            </div>
                            <div class="flex-col">
                                <h2 class="font-[Libre-Franklin]">Teléfono: </h2>
                                <input type="text" wire:model="telefono" class="w-full" placeholder="Puede omitir este dato..">
                            </div>
                            <div class="flex-col">
                                <h2 class="font-[Libre-Franklin]">Correo: </h2>
                                <input type="text" wire:model="correo" class="w-full" placeholder="Puede omitir este dato..">
                            </div>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button type="submit" class="rounded-xl bg-[#B39555] w-40 px-2 py-2 font-[Libre-Franklin] text-black">Guardar</button>
                        </div>
                    </form>
                </x-slot:content>
                <x-slot:footer></x-slot:footer>
            </x-confirmation-modal>

            <x-confirmation-modal wire:model="alertModal">
                <x-slot:title>
                    <div class="flex justify-between items-center">
                        <h1 class="text-4xl font-bold text-black font-[MonteCarlo] text-center">Aviso</h1>
                        <button wire:click="$set('alertModal', false)" class="rounded-lg bg-[#B39555] w-10 h-10 font-[Libre-Franklin] text-black">X</button>
                    </div>
                </x-slot:title>
                <x-slot:content>
                    <div class="flex flex-col items-center space-y-4">
                        <p class="text-black text-2xl font-[Libre-Franklin]">Usted ya cuenta con una Charricard.</p>
                        <button wire:click="$toggle('alertModal')" class="rounded-xl bg-[#B39555] w-40 px-2 py-2 font-[Libre-Franklin] text-black">Cerrar</button>
                    </div>
                </x-slot:content>
            </x-confirmation-modal>
        </div>
        HTML;
    }

    public function handleButtonClick()
    {
        $this->modal = true;
    }

    public function save()
    {
        $this->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'telefono' => 'nullable|digits_between:7,15',
            'correo' => 'nullable|string|email|max:255',
        ]);

        $userId = Auth::id();
        $numTarjeta = $this->generateUniqueTarjetaNumber();
        $numCliente = $this->generateUniqueClienteNumber();

        $user = User::findOrFail($userId);

        $user->TarjetaConocidos()->create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'num_tarjeta' => $numTarjeta,
            'num_cliente' => $numCliente,
        ]);

        $this->modal = false;
        $this->reset(['nombres', 'apellidos', 'telefono', 'correo']);

        return redirect('/');
    }

    private function generateUniqueTarjetaNumber()
    {
        do {
            $numTarjeta = random_int(1000000000000000, 9999999999999999); // Generar un número de tarjeta de 16 dígitos
        } while (TarjetaConocidos::where('num_tarjeta', $numTarjeta)->exists());

        return $numTarjeta;
    }

    private function generateUniqueClienteNumber()
    {
        do {
            $numCliente = str_pad(random_int(0, 9999999), 7, '0', STR_PAD_LEFT);
        } while (TarjetaConocidos::where('num_cliente', $numCliente)->exists());

        return $numCliente;
    }
}
