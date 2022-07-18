<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="/">Home</a></li>
                <li class="active"><a href="/shop">Shop</a></li>
                <li><a href="javascript:void(0);">Checkout</a></li>
            </ul>
        </div>
    </div>
    <section class="section--checkout">
        <div class="container">
            <h2 class="page__title">Checkout</h2>
            <div class="checkout__content">

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h3 class="checkout__title">Billing Details</h3>
                        <div class="checkout__form">
                            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show()">
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>First name: <span>*</span></label>
                                        <input class="form-control" type="text" name="fname" value="" placeholder="Your first name" wire:model="firstname">
                                        @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Last name<span>*</span></label>
                                        <input class="form-control" type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                                        @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Email address: <span>*</span></label>
                                        <input class="form-control" type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Phone: <span>*</span></label>
                                        <input class="form-control" type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
                                        @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Address Line1:</label>
                                        <input class="form-control" type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line1">
                                        @error('line1') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Address Line2: (Optional)</label>
                                        <input class="form-control" type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line2">
                                        @error('line2') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Town/ City: <span>*</span></label>
                                        <input class="form-control" type="text" rname="city" value="" placeholder="City name" wire:model="city">
                                        @error('city') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Postcode/ ZIP</label>
                                        <input class="form-control" type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                                        @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>State / Province : <span>*</span></label>
                                        <input type="text" class="form-control" name="province" value="" placeholder="province" wire:model="province">
                                        @error('province') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Country : <span>*</span></label>
                                        <input type="text" class="form-control" name="country" value="" placeholder="country" wire:model="country">
                                        @error('country') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>


                                    <div class="col-12 form-group--block">
                                        <div class="form-group--block">
                                            <input class="form-check-input" type="checkbox" name="different-add" id="different-add" value="1" wire:model="ship_to_different">
                                            <label class="label-checkbox" for="different-add"><b class="text-heading">Ship to a different address?</b></label>
                                        </div>
                                    </div>

                                </div>
                                @if($ship_to_different)
                                <h3 class="checkout__title">Shipping Details</h3>
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>First name: <span>*</span></label>
                                        <input class="form-control" type="text" name="fname" value="" placeholder="Your first name" wire:model="s_firstname">
                                        @error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Last name<span>*</span></label>
                                        <input class="form-control" type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
                                        @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Email address: <span>*</span></label>
                                        <input class="form-control" type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
                                        @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Phone: <span>*</span></label>
                                        <input class="form-control" type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
                                        @error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Address Line1:</label>
                                        <input class="form-control" type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
                                        @error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Address Line2: (Optional)</label>
                                        <input class="form-control" type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
                                        @error('s_line2') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Town/ City: <span>*</span></label>
                                        <input class="form-control" type="text" rname="city" value="" placeholder="City name" wire:model="s_city">
                                        @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Postcode/ ZIP</label>
                                        <input class="form-control" type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
                                        @error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>State / Province : <span>*</span></label>
                                        <input type="text" class="form-control" name="province" value="" placeholder="province" wire:model="s_province">
                                        @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="col-6 form-group--block">
                                        <label>Country : <span>*</span></label>
                                        <input type="text" class="form-control" name="country" value="" placeholder="country" wire:model="s_country">
                                        @error('s_country') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>




                                </div>
                                @endif

                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <h3 class="checkout__title">Your Order</h3>
                        <div class="checkout__products">
                           
                           
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__label">Subtotal</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__label">{{Session::get('checkout')['subtotal']}}د.إ</div>
                                </div>
                            </div>
                            <hr>
                            <div class="checkout__label">Shipping</div>
                            <p>Free shipping</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__total">Total</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__money">{{Session::get('checkout')['total']}}د.إ</div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__payment">
                            <div class="checkout__label mb-3">SELECT PAYMENT</div>
                            <div class="form-group--block">
                                <input class="form-check-input" name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                                <label class="label-checkbox" for="payment-method-visa"><b class="text-heading"><span style="margin-left:20px;">Debit / CreditCard Payment</span></b></label>
                                
                            </div>
                            <div class="checkout__payment__detail">Pay Right Now


                                @if($paymentmode == 'card')
                                <h4 class="title-box">Payment Method</h4>
                                <div class="warp-address-billing">
                                    @if(Session::has('message'))
                                    <div class="text-danger">{{Session::get('message')}}</div>
                                    @endif
                                    <p class="row-in-form">
                                        <label for="card-no">Card Number:</label>
                                        <input class="form-control" type="text" name="card-no" value="" placeholder="car number" wire:model="card_no" style=" font-size: 13px;line-height: 19px;height: 43px;padding: 2px 20px;max-width: 300px; width: 100%; border: 1px solid #e6e6e6;">
                                        @error('card_no') <span class="text-danger">{{$message}}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="exp-month">Expiry Month:</label>
                                        <input class="form-control" type="text" name="exp-mont" value="" placeholder="MM" wire:model="exp_month" style=" font-size: 13px;line-height: 19px;height: 43px;padding: 2px 20px;max-width: 300px; width: 100%; border: 1px solid #e6e6e6;">
                                        @error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="exp-year">Expiry year:</label>
                                        <input class="form-control" type="text" name="exp-year" value="" placeholder="YY" wire:model="exp_year" style=" font-size: 13px;line-height: 19px;height: 43px;padding: 2px 20px;max-width: 300px; width: 100%; border: 1px solid #e6e6e6;">
                                        @error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="cvc">CVC:</label>
                                        <input class="form-control" type="password" name="cvc" value="" placeholder="cvc number" wire:model="cvc" style=" font-size: 13px;line-height: 19px;height: 43px;padding: 2px 20px;max-width: 300px; width: 100%; border: 1px solid #e6e6e6;">
                                        @error('cvc') <span class="text-danger">{{$message}}</span> @enderror
                                    </p>
                                </div>
                                @endif

                            </div>
                            <div class="form-group--block">
                                <input class="form-check-input" name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                                <label class="label-checkbox" for="checkboxCash"><b class="text-heading"><span style="margin-left:20px;">Cash on delivery</span></b></label>
                            </div>
                            <div class="checkout__payment__detail">Order Now and Pay On Delivery
                                <div class="triangle-box">
                                    <div class="triangle">

                                    </div>
                                </div>
                            </div>
                            @error('paymentmode') <span class="text-danger">{{$message}}</span>  @enderror
                            <!-- <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" id="checkboxPaypal" value="paypal">
                                <label class="label-checkbox" for="checkboxPaypal"><b class="text-heading">PayPal </b><img src="img/promotion/payment_visa.jpg" alt><img src="img/promotion/payment_mastercart.jpg" alt><img src="img/promotion/payment_electron.jpg" alt><a>What is PayPal?</a></label>
                            </div> -->

                        </div>
                        <!-- <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <span class="text-success">privacy policy.</span></p>
                        <div class="form-group--block">
                            <input class="form-check-input" type="checkbox" id="checkboxAgree" value="agree">
                            <label class="label-checkbox" for="checkboxAgree"><b class="text-heading">I have read and agree to the website
                                    <u class="text-success">terms and conditions </u><span>*</span></b></label>
                        </div> -->
                        @if(Session::has('checkout'))
                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">Rs. {{Session::get('checkout')['total']}}</span></p>
                        @endif
                        @if($errors->isEmpty())
                        <div wire:ignore id="processing" style="fon-size:22px; margin-bottom:20px; padding-left:27px; color:green; display:none;">
                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                            <span>Processing....</span>

                        </div>
                        @endif
                        <button type="submit" class="checkout__order" >Place an order</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>