<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class MobileCategoriesComponent extends Component
{
    public function render()
    {
        $categories=Category::all();
        return view('livewire.mobile-categories-component',['categories'=>$categories])->layout('layouts.base');
    }
}
