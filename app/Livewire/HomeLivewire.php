<?php

namespace App\Livewire;

use Livewire\Component;

class HomeLivewire extends Component
{
    public function render()
    {
        return view('livewire.home-livewire')
            ->layout('components.layouts.app');
    }
}
