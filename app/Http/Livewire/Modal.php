<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $status = false;
    public $deleted = '';

    public function open() {
        $this->status = true;
    }

    public function close() {
        $this->status = false;
    }

    public function delete($id) {
        $this->deleted = "Item {$id} removido com sucesso";
        $this->close();
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
