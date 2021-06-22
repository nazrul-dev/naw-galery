<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Base extends Component
{
    public $layout = 'layouts.admin';



    public function alert($tipe, $text){
        $this->alert($tipe,  $text, [
            'position' =>  'top-right',
            'timer' =>  3000,
            'toast' =>  true,
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }
}
