<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Profile;

class Validate extends Component

{

   
    public $fullname;
    public $image;
    public $position;
    public $location;
    public $education;
    public $skills;
    public $notes;

   

    public function mount(){

        $profile = auth()->user()->profile;
        $this->fullname = $profile->fullname;
        $this->position = $profile->position;
        $this->location = $profile->location;
        $this->education = $profile->education;
        $this->skills = $profile->skills;
        $this->notes = $profile->notes;
      
    
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
    
            'fullname' => 'min:5',
            'position' => 'min:1',
            'education' => 'min:1',
            'skills' => 'min:1',
            'location' => 'min:1',
            'notes' => 'min:1',

        ]);
    }

    public function submit()
    {
        $data = $this->validate([
            'fullname' => 'required|min:5',
            'position' => 'required|min:1',
            'education' => 'required|min:1',
            'location' => 'required|min:1',
            'skills' => 'required|min:1',
            'notes' => 'required|min:1',

        ]);
        //     dd($data);
       
        session()->flash('success','Form Submitted');
        $this->reset();
       

        // return back()->with('success', 'Form Submitted');

        
    }
    public function render()
    {
       
        return view('livewire.validate');
    }
}
