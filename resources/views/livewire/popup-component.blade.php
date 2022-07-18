<div class="modal fade" id="quickViewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid quickview-body">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                
                                        <img class="carousel__thumbnail" id="modal-product-image" src="{{asset('assets/img/products}}/{{$model->image}}"  alt="alt"/></a>

                               
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="quickview__product">
                                    <div class="product__header">
                                        <div class="product__title" ><h3 id="modal-product-name"></h3></div>
                                        <div class="product__meta">
                                            
                                            <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                    <p class="ps-product-price-block text-danger">Price: <span class="ps-product__price-default"  id="modal-product-price"></span>د.إ</p>
                                        <p class="product__unit">Weight: <span id="modal-product-qty"></span>g</p>
                                        <div class="alert__success">Availability: <span  id="modal-product-status"></span></div>
                                        <ul>
                                            <li>Type: Organic</li>
                                            <li>MFG: Jun 4, 2020</li>
                                            <li>LIFE: 30 days</li>
                                        </ul>
                                    </div>
                                    <div class="product__action">
                                        <label>Quantity: </label>
                                        <div class="def-number-input number-input safari_only">
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fa fa-minus"></i></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fa fa-plus"></i></button>
                                        </div>
                                        <button class="btn product__addcart"> <i class="fa fa-shoping-cart"></i>Add to cart</button>
                                        <button class="btn button-icon icon-md"><i class="icon-repeat"></i></button>
                                        <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                    </div>
                                    <div class="product__footer">
                                        <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>