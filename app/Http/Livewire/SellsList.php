<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SellsList extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.sells-list', [
            'users' => User::where('name', 'LIKE', "%$this->search%")->get()
        ]);
    }
}
