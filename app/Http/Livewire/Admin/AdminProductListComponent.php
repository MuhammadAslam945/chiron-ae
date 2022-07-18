<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class AdminProductListComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products=Product::paginate(15);
        return view('livewire.admin.admin-product-list-component',['products'=>$products])->layout('layouts.admin.base');
    }
}
