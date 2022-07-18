<main class="no-main">
    <div class="ps-home--full-width">
        <div class="container" wire:ignore>
            <div class="row ps-home__banner">
                <div class="col-12 col-lg-12">
                    <div class="section-slide--default">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-banner"><img class="mobile-only" src="{{asset('assets/img/slider/home-dark/sidebar-01.jpg')}}" alt="alt" /><img class="desktop-only" src="{{asset('assets/img/slider/home-dark/sidebar-02.jpg')}}" alt="alt" />
                                <div class="ps-content">
                                    <div class="container">
                                        <div class="ps-content-box">
                                            <div class="ps-node"><span class='text-success'>frozen foods</span></div>
                                            <div class="ps-title">Meat Distributors In <br /> New England Black <br /> River Meats.</div>

                                            <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="fa fa-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-banner"><img class="mobile-only" src="{{asset('assets/img/slider/home-dark/sidebar-03.jpg')}}" alt="alt" /><img class="desktop-only" src="{{asset('assets/img/slider/home-dark/sidebar-01.jpg')}}" alt="alt" />
                                <div class="ps-content">
                                    <div class="container">
                                        <div class="ps-content-box">
                                            <div class="ps-title">Italian Bread Traditions <br /> Macrina Bakeries <br /> <span class='text-success'>Speical Offer.</span></div>

                                            <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="fa fa-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-banner"><img class="mobile-only" src="{{asset('assets/img/slider/home-dark/sidebar-01.jpg')}}" alt="alt" /><img class="desktop-only" src="{{asset('assets/img/slider/home-dark/sidebar-03.jpg')}}" alt="alt" />
                                <div class="ps-content">
                                    <div class="container">
                                        <div class="ps-content-box">
                                            <div class="ps-node">Sale off 30%</div>
                                            <div class="ps-title">Fresh Wholesale Produce <br /> From The New York Area.</div>

                                            <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="fa fa-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="ps-component ps-component--category">
                <div class="component__header">
                    <h3 class="component__title">Browse By Categories <a class="component__view" href="shop-categories.html">All Categories <i class="fa fa-arrow-right"></i></a></h3>
                </div>
                <div class="component__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach($categories as $category)
                        <div class="ps-category__item"><a href="{{route('product.category',['category_slug'=>$category->slug])}}"><img class="ps-categories__thumbnail" src="{{asset('assets/img/category')}}/{{$category->logo}}" alt></a><a class="ps-categories__name" href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}} </a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <section class="ps-component">
                <div class="container-fluid">
                    <div class="component__header">
                        <h3 class="component__title">Featured Brands <a class="component__view">All offers<i class="fa fa-arrow-right" style="padding:2px;"></i></a></h3>

                    </div>
                    <div class="component__content promotion__carousel">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="promotion__thumbnail">
                                <a href="shop-view-grid.html"><img src="{{asset('assets/img/promotion/home-dark/home-dark-promo-01.jpg')}}" style="width:330px; height:220px; border-radius:6px;" alt></a>
                                <div class="col-md-12">
                                    <h4 style="padding-top:5px;">FoodPouch</h4>
                                    <h3>New Snacks Release</h3>
                                </div>
                            </div>
                            <div class="promotion__thumbnail"><a href="shop-view-grid.html">
                                    <img src="{{asset('assets/img/promotion/home-dark/home-dark-promo-02.jpg')}}" style="width:330px; height:220px; border-radius:6px;" alt></a>
                                <div class="col-md-12">
                                    <h4 style="padding-top:5px;">FoodPouch</h4>
                                    <h3>New Snacks Release</h3>
                                </div>
                            </div>
                            <div class="promotion__thumbnail"><a href="shop-view-grid.html">
                                    <img src="{{asset('assets/img/promotion/home-dark/home-dark-promo-03.jpg')}}" style="width:330px; height:220px; border-radius:6px;" alt></a>
                                <div class="col-md-12">
                                    <h4 style="padding-top:5px;">FoodPouch</h4>
                                    <h3>New Snacks Release</h3>
                                </div>
                            </div>
                            <div class="promotion__thumbnail">
                                <a href="shop-view-grid.html"><img src="{{asset('assets/img/promotion/home-dark/home-dark-promo-04.jpg')}}" style="width:330px; height:220px; border-radius:6px;" alt></a>
                                <div class="col-md-12">
                                    <h4 style="padding-top:5px;">FoodPouch</h4>
                                    <h3>New Snacks Release</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="ps-home--block">
                <div class="ps-block__header mobile">
                    <div class="ps-block__title d-flex">Ready Meals &nbsp;
                        <div class="ps-block__list component__view">
                            <ul>
                                <li><a href="shop-categories.html">On Sales</a></li>
                                <li class="active"><a href="shop-categories.html">Meals for 1</a></li>
                                <li><a href="shop-categories.html">Traditional British</a></li>
                                <li><a href="shop-categories.html">Indian</a></li>
                                <li><a href="shop-categories.html">Italian</a></li>
                                <li><a href="shop-categories.html">Chinese</a></li>
                                <li class="active"><a href="shop-categories.html">View all <i class='fa fa-arrow-right'></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="ps-block__content">
                    <div class="desktop-only ps-block--products">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">
                            @foreach($meals as $meal)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            <div class="ps-product--standard"><a href="{{route('product-detail',['slug'=>$meal->slug])}}">
                                    <img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$meal->image}}" alt="{{$meal->name}}" /></a>
                                <a class="product-wish btnQuickView" data-link="{{route('product-detail',['slug'=>$meal->slug])}}" data-product-sku="{{$meal->SKU}}" data-product-cat="{{$meal->category->name}}" data-created="{{$meal->created_at}}" data-product-name="{{$meal->name}}" data-image="http://127.0.0.1:8000/assets/img/products/{{$meal->image}}" data-product-price="{{$meal->price}}" data-product-qty="{{$meal->weight}}" data-product-status="{{$meal->stock_status}}"><i class="fa fa-expand"></i></a>
                                @if($witems->contains($meal->id))
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="removeFromWishlist({{$meal->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                @else
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="addToWishlist({{$meal->id}},'{{$meal->name}}',{{$meal->price}})"><i class="fa fa-heart-o"></i></a>
                                @endif
                                <a class="product-wish" style="margin-top:60px;" href="{{route('compare',['slug'=>$meal->slug])}}"><i class="fa fa-retweet"></i></a>

                                <div class="ps-product__content">

                                    <h5><a class="ps-product__name" href="{{route('product-detail',['slug'=>$meal->slug])}}">{{$meal->name}}</a></h5>

                                    <p class="ps-product-price-block"><span class="ps-product__price-default">{{$meal->price}}د.إ</span>
                                        <span class=" d-inline-block">
                                            @php
                                            $avgrating=0;
                                            @endphp
                                            @foreach($meal->orderItems->where('rstatus',1) as $orderItem)
                                            @php
                                            $avgrating=$avgrating + $orderItem->review->rating;
                                            @endphp
                                            @endforeach
                                            @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star" aria-hidden="true" style="color:gold;"></i>
                                                @else
                                                <i class="fa fa-star" aria-hidden="true" style="color:gray;"></i>
                                                @endif
                                                @endfor
                                                <a href="#" class="count-review"> ( {{$meal->orderItems->where('rstatus',1)->count()}} )</a></span>
                                    </p>
                                </div>
                                <div class="justify-content-center">
                                    <div class="def-number-input number-input safari_only">
                                        <a class="minus" href="#" wire:click.prevent="decreaseQuantity"><i class="fa fa-minus"></i></a>
                                        <input class="quantity" type="number" min="0" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty" />
                                        <a class="plus" href="#" href="#" wire:click.prevent="increaseQunatity"><i class="fa fa-plus"></i></a>
                                    </div>

                                    <button style="margin-top:5px;" class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart" wire:click.prevent="store({{$meal->id}},'{{$meal->name}}',{{$meal->price}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="/wishlist">Wishlist</a><a class="ps-product__compare" href="{{route('compare',['slug'=>$meal->slug])}}">Compare</a></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="mobile-only">
                        <div class="row">
                            @foreach($meals as $meal)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            <div class="col-6 col-md-4">
                                <div class="ps-product--standard"><a href="{{route('product-detail',['slug'=>$meal->slug])}}"><img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$meal->image}}" alt="{{$meal->name}}" /></a>
                                    <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-expand"></i></a>
                                    @if($witems->contains($meal->id))
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="removeFromWishlist({{$meal->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                @else
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="addToWishlist({{$meal->id}},'{{$meal->name}}',{{$meal->price}})"><i class="fa fa-heart-o"></i></a>
                                @endif
                                    <a class="ps-product__expand" style="margin-top:40px;" href="javascript:void(0);" href="{{route('compare',['slug'=>$meal->slug])}}"><i class="fa fa-retweet"></i></a>
                                    <div class="ps-product__content">

                                        <h5><a class="ps-product__name" href="{{route('product-detail',['slug'=>$meal->slug])}}">{{$meal->name}}</a></h5>

                                        <p class="ps-product-price-block"><span class="ps-product__price-default">{{$meal->price}}د.إ</span>
                                            <span class=" d-inline-block">
                                                @php
                                                $avgrating=0;
                                                @endphp
                                                @foreach($meal->orderItems->where('rstatus',1) as $orderItem)
                                                @php
                                                $avgrating=$avgrating + $orderItem->review->rating;
                                                @endphp
                                                @endforeach
                                                @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star" aria-hidden="true" style="color:gold;"></i>
                                                    @else
                                                    <i class="fa fa-star" aria-hidden="true" style="color:gray;"></i>
                                                    @endif
                                                    @endfor
                                                    <a href="#" class="count-review"> ( {{$meal->orderItems->where('rstatus',1)->count()}} )</a></span>
                                        </p>
                                    </div>
                                    <div class="justify-content-center">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fa fa-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fa fa-plus"></i></button>
                                        </div>

                                        <button style="margin-top:5px;" class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart" wire:click.prevent="store({{$meal->id}},'{{$meal->name}}',{{$meal->price}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        <div class="ps-product__box"><a class="ps-product__wishlist" href="/wishlist">Wishlist</a><a class="ps-product__compare" href="{{route('compare',['slug'=>$meal->slug])}}">Compare</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-home--block ps-block--promo">
                <div class="row">
                    <div class="col-12 col-lg-4 ps-promo__item"><a href="shop-view-grid.html"><img src="{{asset('assets/img/promotion/full-width/promo-04.jpg')}}" alt></a></div>
                    <div class="col-12 col-lg-4 ps-promo__item"><a href="shop-view-grid.html"><img src="{{asset('assets/img/promotion/full-width/promo-05.jpg')}}" alt></a></div>
                    <div class="col-12 col-lg-4 ps-promo__item"><a href="shop-view-grid.html"><img src="{{asset('assets/img/promotion/full-width/promo-06.jpg')}}" alt></a></div>
                </div>
            </div>
            <div class="ps-home--block">
                <div class="ps-block__header mobile">
                    <div class="ps-block__title d-flex">Drinks, Tea & Coffee &nbsp;
                        <div class="ps-block__list component__view">
                            <ul>
                                <li><a href="shop-categories.html">Tea & Coffee</a></li>
                                <li><a href="shop-categories.html">Hot Drinks</a></li>
                                <li><a href="shop-categories.html">Fizzy Drinks</a></li>
                                <li><a href="shop-categories.html">Water</a></li>
                                <li><a href="shop-categories.html">Squash</a></li>
                                <li><a href="shop-categories.html">Juices</a></li>
                                <li class="active"><a href="shop-categories.html">View all <i class='fa fa-arrow-right'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ps-block__content">
                    <div class="desktop-only ps-block--products">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">
                            @foreach($drinks as $drink)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            <div class="ps-product--standard">
                                <a href="{{route('product-detail',['slug'=>$drink->slug])}}">
                                    <img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$drink->image}}" alt="{{$drink->name}}" /></a>
                                <a class="product-wish btnQuickView" data-link="{{route('product-detail',['slug'=>$drink->slug])}}" data-product-sku="{{$drink->SKU}}" data-product-cat="{{$drink->category->name}}" data-created="{{$drink->created_at}}" data-product-name="{{$drink->name}}" data-image="http://127.0.0.1:8000/assets/img/products/{{$drink->image}}" data-product-price="{{$drink->price}}" data-product-qty="{{$drink->weight}}" data-product-status="{{$drink->stock_status}}"><i class="fa fa-expand"></i></a>

                                @if($witems->contains($drink->id))
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="removeFromWishlist({{$drink->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                @else
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="addToWishlist({{$drink->id}},'{{$drink->name}}',{{$drink->price}})"><i class="fa fa-heart-o"></i></a>
                                @endif
                                <a class="product-wish" style="margin-top:60px;" href="{{route('compare',['slug'=>$drink->slug])}}"><i class="fa fa-retweet"></i></a>

                                <div class="ps-product__content">

                                    <h5><a class="ps-product__name" href="{{route('product-detail',['slug'=>$drink->slug])}}">{{$drink->name}}</a></h5>

                                    <p class="ps-product-price-block"><span class="ps-product__price-default">{{$drink->price}}د.إ</span>
                                        <span class=" d-inline-block">
                                            @php
                                            $avgrating=0;
                                            @endphp
                                            @foreach($drink->orderItems->where('rstatus',1) as $orderItem)
                                            @php
                                            $avgrating=$avgrating + $orderItem->review->rating;
                                            @endphp
                                            @endforeach
                                            @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star" aria-hidden="true" style="color:gold;"></i>
                                                @else
                                                <i class="fa fa-star" aria-hidden="true" style="color:gray;"></i>
                                                @endif
                                                @endfor
                                                <a href="#" class="count-review"> ( {{$drink->orderItems->where('rstatus',1)->count()}} )</a></span>
                                    </p>
                                </div>
                                <div class="justify-content-center">
                                    <div class="def-number-input number-input safari_only">
                                        <a class="minus" href="#" wire:click.prevent="decreaseQuantity"><i class="fa fa-minus"></i></a>
                                        <input class="quantity" type="number" min="0" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty" />
                                        <a class="plus" href="#" href="#" wire:click.prevent="increaseQunatity"><i class="fa fa-plus"></i></a>
                                    </div>

                                    <button style="margin-top:5px;" class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart" wire:click.prevent="store({{$drink->id}},'{{$drink->name}}',{{$drink->price}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="/wishlist">Wishlist</a><a class="ps-product__compare" href="{{route('compare',['slug'=>$drink->slug])}}">Compare</a></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="mobile-only">
                        <div class="row">
                            @foreach($drinks as $drink)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            <div class="col-6 col-md-4">
                                <div class="ps-product--standard"><a href="{{route('product-detail',['slug'=>$drink->slug])}}"><img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$drink->image}}" alt="{{$drink->name}}" /></a>
                                    <a class="product-wish btnQuickView" data-link="{{route('product-detail',['slug'=>$drink->slug])}}" data-product-sku="{{$drink->SKU}}" data-product-cat="{{$drink->category->name}}" data-created="{{$drink->created_at}}" data-product-name="{{$drink->name}}" data-image="http://127.0.0.1:8000/assets/img/products/{{$drink->image}}" data-product-price="{{$drink->price}}" data-product-qty="{{$drink->weight}}" data-product-status="{{$drink->stock_status}}"><i class="fa fa-expand"></i></a>
                                    @if($witems->contains($drink->id))
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="removeFromWishlist({{$drink->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                @else
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="addToWishlist({{$drink->id}},'{{$drink->name}}',{{$drink->price}})"><i class="fa fa-heart-o"></i></a>
                                @endif
                                    <a class="ps-product__expand" style="margin-top:40px;" href="{{route('compare',['slug'=>$drink->slug])}}"><i class="fa fa-retweet"></i></a>
                                    <div class="ps-product__content">

                                        <h5><a class="ps-product__name" href="{{route('product-detail',['slug'=>$drink->slug])}}">{{$drink->name}}</a></h5>

                                        <p class="ps-product-price-block"><span class="ps-product__price-default">{{$drink->price}}د.إ</span>
                                            <span class=" d-inline-block">
                                                @php
                                                $avgrating=0;
                                                @endphp
                                                @foreach($drink->orderItems->where('rstatus',1) as $orderItem)
                                                @php
                                                $avgrating=$avgrating + $orderItem->review->rating;
                                                @endphp
                                                @endforeach
                                                @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star" aria-hidden="true" style="color:gold;"></i>
                                                    @else
                                                    <i class="fa fa-star" aria-hidden="true" style="color:gray;"></i>
                                                    @endif
                                                    @endfor
                                                    <a href="#" class="count-review"> ( {{$drink->orderItems->where('rstatus',1)->count()}} )</a></span>
                                        </p>
                                    </div>
                                    <div class="justify-content-center">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fa fa-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fa fa-plus"></i></button>
                                        </div>

                                        <button style="margin-top:5px;" class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart" wire:click.prevent="store({{$drink->id}},'{{$drink->name}}',{{$drink->price}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        <div class="ps-product__box"><a class="ps-product__wishlist" href="/wishlist">Wishlist</a><a class="ps-product__compare" href="{{route('compare',['slug'=>$drink->slug])}}">Compare</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-home--block">
                <div class="ps-block__header mobile">
                    <div class="ps-block__title d-flex">Kitchen, Dishes &nbsp;
                        <div class="ps-block__list component__view">
                            <ul>
                                <li><a href="shop-categories.html">Tea & Coffee</a></li>
                                <li><a href="shop-categories.html">Hot Drinks</a></li>
                                <li><a href="shop-categories.html">Fizzy Drinks</a></li>
                                <li><a href="shop-categories.html">Water</a></li>
                                <li><a href="shop-categories.html">Squash</a></li>
                                <li><a href="shop-categories.html">Juices</a></li>
                                <li class="active"><a href="shop-categories.html">View all <i class='fa fa-arrow-right'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="ps-block__content">
                    <div class="desktop-only ps-block--products">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">
                            @foreach($kitchens as $kitchen)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            <div class="ps-product--standard"><a href="{{route('product-detail',['slug'=>$kitchen->slug])}}"><img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$kitchen->image}}" alt="{{$kitchen->name}}" /></a>
                                <a class="product-wish btnQuickView" data-link="{{route('product-detail',['slug'=>$kitchen->slug])}}" data-product-sku="{{$kitchen->SKU}}" data-product-cat="{{$kitchen->category->name}}" data-created="{{$kitchen->created_at}}" data-product-name="{{$kitchen->name}}" data-image="http://127.0.0.1:8000/assets/img/products/{{$kitchen->image}}" data-product-price="{{$kitchen->price}}" data-product-qty="{{$kitchen->weight}}" data-product-status="{{$kitchen->stock_status}}"><i class="fa fa-expand"></i></a>
                                @if($witems->contains($kitchen->id))
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="removeFromWishlist({{$kitchen->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                @else
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="addToWishlist({{$kitchen->id}},'{{$kitchen->name}}',{{$kitchen->price}})"><i class="fa fa-heart-o"></i></a>
                                @endif
                                <a class="product-wish" style="margin-top:60px;" href="{{route('compare',['slug'=>$kitchen->slug])}}"><i class="fa fa-retweet"></i></a>

                                <div class="ps-product__content">

                                    <h5><a class="ps-product__name" href="{{route('product-detail',['slug'=>$kitchen->slug])}}">{{$kitchen->name}}</a></h5>

                                    <p class="ps-product-price-block"><span class="ps-product__price-default">{{$kitchen->price}}د.إ</span>
                                        <span class=" d-inline-block">
                                            @php
                                            $avgrating=0;
                                            @endphp
                                            @foreach($kitchen->orderItems->where('rstatus',1) as $orderItem)
                                            @php
                                            $avgrating=$avgrating + $orderItem->review->rating;
                                            @endphp
                                            @endforeach
                                            @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star" aria-hidden="true" style="color:gold;"></i>
                                                @else
                                                <i class="fa fa-star" aria-hidden="true" style="color:gray;"></i>
                                                @endif
                                                @endfor
                                                <a href="#" class="count-review"> ( {{$kitchen->orderItems->where('rstatus',1)->count()}} )</a></span>
                                    </p>
                                </div>
                                <div class="justify-content-center">
                                    <div class="def-number-input number-input safari_only">
                                        <a class="minus" href="#" wire:click.prevent="decreaseQuantity"><i class="fa fa-minus"></i></a>
                                        <input class="quantity" type="number" min="0" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty" />
                                        <a class="plus" href="#" href="#" wire:click.prevent="increaseQunatity"><i class="fa fa-plus"></i></a>
                                    </div>

                                    <button style="margin-top:5px;" class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart" wire:click.prevent="store({{$kitchen->id}},'{{$kitchen->name}}',{{$kitchen->price}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    <div class="ps-product__box"><a class="ps-product__wishlist" href="/wishlist">Wishlist</a><a class="ps-product__compare" href="{{route('compare',['slug'=>$kitchen->slug])}}">Compare</a></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="mobile-only">
                        <div class="row">
                            @foreach($kitchens as $kitchen)
                            @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            <div class="col-6 col-md-4">
                                <div class="ps-product--standard"><a href="{{route('product-detail',['slug'=>$kitchen->slug])}}"><img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$kitchen->image}}" alt="{{$kitchen->name}}" /></a>
                                    <a class="product-wish btnQuickView" data-link="{{route('product-detail',['slug'=>$kitchen->slug])}}" data-product-sku="{{$kitchen->SKU}}" data-product-cat="{{$kitchen->category->name}}" data-created="{{$kitchen->created_at}}" data-product-name="{{$kitchen->name}}" data-image="http://127.0.0.1:8000/assets/img/products/{{$kitchen->image}}" data-product-price="{{$kitchen->price}}" data-product-qty="{{$kitchen->weight}}" data-product-status="{{$kitchen->stock_status}}"><i class="fa fa-expand"></i></a>
                                    @if($witems->contains($kitchen->id))
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="removeFromWishlist({{$kitchen->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                @else
                                <a class="product-wish" style="margin-top:30px;" href="#" wire:click.prevent="addToWishlist({{$kitchen->id}},'{{$kitchen->name}}',{{$kitchen->price}})"><i class="fa fa-heart-o"></i></a>
                                @endif
                                    <a class="ps-product__expand" style="margin-top:40px;" href="{{route('compare',['slug'=>$kitchen->slug])}}"><i class="fa fa-retweet"></i></a>
                                    <div class="ps-product__content">

                                        <h5><a class="ps-product__name" href="{{route('product-detail',['slug'=>$kitchen->slug])}}">{{$kitchen->name}}</a></h5>

                                        <p class="ps-product-price-block"><span class="ps-product__price-default">{{$kitchen->price}}د.إ</span>
                                            <span class=" d-inline-block">
                                                @php
                                                $avgrating=0;
                                                @endphp
                                                @foreach($kitchen->orderItems->where('rstatus',1) as $orderItem)
                                                @php
                                                $avgrating=$avgrating + $orderItem->review->rating;
                                                @endphp
                                                @endforeach
                                                @for($i=1; $i<=5; $i++) @if($i<=$avgrating) <i class="fa fa-star" aria-hidden="true" style="color:gold;"></i>
                                                    @else
                                                    <i class="fa fa-star" aria-hidden="true" style="color:gray;"></i>
                                                    @endif
                                                    @endfor
                                                    <a href="#" class="count-review"> ( {{$kitchen->orderItems->where('rstatus',1)->count()}} )</a></span>
                                        </p>
                                    </div>
                                    <div class="justify-content-center">
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fa fa-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fa fa-plus"></i></button>
                                        </div>

                                        <button style="margin-top:5px;" class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart" wire:click.prevent="store({{$kitchen->id}},'{{$kitchen->name}}',{{$kitchen->price}})"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        <div class="ps-product__box"><a class="ps-product__wishlist" href="/wishlist">Wishlist</a><a class="ps-product__compare" href="{{route('compare',['slug'=>$kitchen->slug])}}">Compare</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <hr style="opacity:.5">

        </div>
    </div>
    <div class="modal fade" id="quickViewModal" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid quickview-body">
                        <div class="row">
                            <div class="col-12 col-lg-5">

                                <a class="btn btn-danger" id="modal-product-link" href=""> <img class="carousel__thumbnail" id="modal-product-image" src="" alt="alt" /></a>


                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="quickview__product">
                                    <div class="product__header">
                                        <div class="product__title"><a id="modal-product-link" href="">
                                                <h3 id="modal-product-name"></h3>
                                            </a></div>
                                        <div class="product__meta">

                                            <div class="product__code">SKU:#<span id="modal-product-sku"></span></div>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <p class="ps-product-price-block text-danger">Price: <span class="ps-product__price-default" id="modal-product-price"></span>د.إ</p>
                                        <p class="product__unit">Weight: <span id="modal-product-qty"></span>g</p>
                                        <div class="alert__success">Availability: <span id="modal-product-status"></span></div>
                                        <ul>
                                            <li>Type: <span id="modal-product-cat"></span></li>
                                            <li><a class="text-center" style="font-size:15px; font-weight:700;" id="modal-product-link" href=""><i class="fa fa-eye text-danger"></i> Product Detail</a></li>

                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore id="popupAddToCart" role="dialog" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        @if(Cart::instance('cart')->count()>0)

                        <div class="alert__success " style="color:#ed1d2d;font-size:22px;font-weight:600;text-align:center;">
                            <i class="fa fa-shopping-cart fa-2x"></i>&nbsp; New Item Has been successfully added to you cart.
                            {{Cart::instance('cart')->count()}}
                        </div>

                        @else
                        <div class="alert__success text-center" style="color:#ed1d2d; font-size:22px;font-weight:600;text-align:center;">
                        <i class="fa fa-shopping-cart fa-2x"></i>&nbsp;
                            New Item Has been successfully added to you cart. &nbsp;1
                        </div>
                        @endif
                        <hr>
                        <h3 class="cart__title"><a href="/cart" class="btn btn-success"><h5 class="text-light">View your cart</h5></a></h3>
                        <h3 class="cart__title">Previously added items in your cart are following</h3>
                        @if(Cart::instance('cart')->count() > 0)
                        <div class="cart__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="{{Cart::count()}}" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="{{Cart::count()}}" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                @foreach(Cart::instance('cart')->content() as $item)
                                <div class="cart-item">
                                    <div class="ps-product--standard">
                                        <a href="{{route('product-detail',['slug'=>$item->model->slug])}}"><img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}" /></a>
                                        <div class="ps-product__content">
                                            <a href="{{route('product-detail',['slug'=>$item->model->slug])}}">
                                                <h5 class="ps-product__name">{{$item->model->name}}</h5>
                                            </a>
                                            <p class="ps-product__unit">{{$item->model->weight}}g</p>

                                            <p class="ps-product-price-block">
                                                @if($item->model->sale_price)
                                                <span class="ps-product__sale">{{$item->model->sale_price}}</span><span class="ps-product__price">{{$item->model->price}}</span>
                                                @else
                                                <span class="ps-product__sale">{{$item->model->price}}</span>
                                                @endif
                                                <span class=" d-inline-block pl-2">


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@push('scripts')

<script>
    $(function() {
        $('body').on('click', '.btnQuickView', function(e) {
            e.preventDefault();

            var data = $(this).data();
            $('#quickViewModal #modal-product-name').html(data.productName);
            $('#quickViewModal #modal-product-image').attr('src', data.image);
            $('#quickViewModal #modal-product-link').attr('href', data.link);
            $('#quickViewModal #modal-product-sku').html(data.productSku);
            $('#quickViewModal #modal-product-price').html(data.productPrice);
            $('#quickViewModal #modal-product-qty').html(data.productQty);
            $('#quickViewModal #modal-product-status').html(data.productStatus);
            $('#quickViewModal #modal-product-cat').html(data.productCat);
            $('#quickViewModal #modal-product-created').html(data.created);
            $('#quickViewModal').modal();
        });
    });
</script>
@endpush