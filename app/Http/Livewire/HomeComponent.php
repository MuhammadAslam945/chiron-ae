<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Cart;

class HomeComponent extends Component
{
    
    public $qty;
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function mount()
    {
       
        $this->qty = 1;
    }
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        $this->emitTo('mobile-cart-count-component','refreshComponent');
       // session()->flash('success_message','Item added to Cart');
       // sleep(5);
        return redirect()->back();
    }
    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        $this->emitTo('mobile-wishlist-count-component','refreshComponent');
        return redirect()->back();
    }
   
    public function removeFromWishlist($product_id)
    {
         foreach(Cart::instance('wishlist')->content() as $witems)
         {
             if($witems->id == $product_id)
             {
              Cart::instance('wishlist')->remove($witems->rowId);
              $this->emitTo('wishlist-count-component','refreshComponent');
              $this->emitTo('mobile-wishlist-count-component','refreshComponent');
              return;
               
             }
         }
    }
    public function increaseQunatity()
    {
        $this->qty++;
    }
    public function decreaseQuantity()
    {
        if($this->qty > 1)
        {
            $this->qty--;
        }
    }
    public function render()
    {
        $categories=Category::all();
        $meals=Product::where('category_id',8)->take(12)->get();
        $drinks=Product::where('category_id',5)->take(8)->get();
        $kitchens=Product::where('category_id',1)->take(8)->get();
        return view('livewire.home-component',['categories'=>$categories,'meals'=>$meals,'drinks'=>$drinks,'kitchens'=>$kitchens])->layout('layouts.base');
    }
}
