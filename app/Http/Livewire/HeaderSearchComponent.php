<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat_id;
    public $product_cat;

    public function mount(){
        $this->product_cat='ALL CATEGORY';
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $categories=Category::all();
        $s_products=Product::inRandomOrder()->limit(12)->get();
        return view('livewire.header-search-component',['categories'=>$categories,'s_products'=>$s_products])->layout('layouts.base');
    }
}
