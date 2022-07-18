<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class PopupComponent extends Component
{
    public $product_id;
    public function mount()
    {
        $this->product_id;
    }
    public function render()
    {
        $model=Product::where('id',$this->product_id)->first();
        return view('livewire.popup-component',['model'=>$model])->layout('layouts.base');
    }
}
