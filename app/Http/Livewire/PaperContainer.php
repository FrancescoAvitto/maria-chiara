<?php

namespace App\Http\Livewire;

use App\Models\Paper;
use Livewire\Component;
use Illuminate\Support\Facades\Response;

class PaperContainer extends Component
{
    public $paper;

    public function donwload(){
        return Response::download(storage_path() . '/app/public/' . $this->paper->file);
    }

    public function mount(Paper $paper){
        $this->paper = $paper;
    }

    public function render()
    {
        return view('livewire.paper-container');
    }
}
