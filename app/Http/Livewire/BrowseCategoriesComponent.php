<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class BrowseCategoriesComponent extends Component
{
    public function render()
    {
        $categories=Category::all();
        return view('livewire.browse-categories-component',['categories'=>$categories])->layout('layouts.base');
    }
}
