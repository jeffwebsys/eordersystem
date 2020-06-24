<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Profile;


class Index extends Component
{
    public function render()
    {
        $profile = Profile::find(1);
        return view('livewire.index',compact('profile'));
    }
}
