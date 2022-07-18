<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PRoduct;

class CompareComponent extends Component
{
    public $slug;
    
    public function mount($slug)
    {
        $this->slug=$slug;
       
    }
    public function render()
    {
        $product=Product::where('slug',$this->slug)->first();
        $compares=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(2)->get();
        return view('livewire.compare-component',['product'=>$product,'compares'=>$compares])->layout('layouts.base');
    }
}
