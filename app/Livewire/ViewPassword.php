<?php

namespace App\Livewire;

use Livewire\Component;

class ViewPassword extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="flex flex-row">

            <i class="fa-solid fa-lock pr-1  my-auto"></i>

            <input type="{{ $showPassword ? 'text' : 'password' }}" class=" w-full rounded-xl border-2 pl-2" wire:model="password"/>

            <button type="button" wire:click="togglePasswordVisibility()">
                @if($showPassword)

                    <i class="fa-solid fa-eye-slash my-auto pl-1"></i>

                @else
                    <i class="fa-solid fa-eye my-auto pl-1"></i>
                @endif
            </button>
        </div>
        HTML;

    }

    public $showPassword = false;

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }
}
