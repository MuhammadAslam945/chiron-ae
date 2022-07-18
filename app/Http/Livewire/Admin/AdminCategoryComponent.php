<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        session()->flash('message','Category Has been Deleted Successfully!');
    }
    public function deleteSubCategory($id){
        $scategory=Subcategory::find($id);
        $scategory->delete();
        session()->flash('message','Sub Category Has been Deleted Successfully!');
    }
    public function render()
    {
        $categories=Category::paginate(8);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.admin.base');
    }
}
