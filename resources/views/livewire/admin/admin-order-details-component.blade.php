<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><h4 class="pl-5 pt-2">Order Items</h4></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shoping-cart-inner">
                                <div class="shoping-cart-table table-responsive">

                                    <table class="table table-striped">
                                        <thead>

                                            <th >Order Id</th>
                                            <th >Order Status</th>
                                            <th >Order Date</th>
                                            @if($order->status =='delivered')
                                            <th >Order Delivery Date</th>
                                            @elseif($order->status == 'canceled')
                                            <th >Order Canceled Date</th>
                                            @else
                                            <th>Order Status</th>
                                            @endif
                                        </thead>


                                        <tbody>

                                            <tr>

                                                <td>{{$order->id}}</td>
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->created_at}}</td>
                                                @if($order->status =='delivered')
                                                <td>{{$order->delivered_date}}</td>
                                                @elseif($order->status == 'canceled')
                                                <td>{{$order->canceled_date}}</td>
                                                @else
                                                <td>{{$order->status}}</td>
                                                @endif
                                            </tr>


                                        </tbody>

                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">

                                <table class="table table-striped">
                                    <thead>

                                        <th >Image</th>
                                        <th >Product Name</th>
                                        <th >Order Status</th>
                                        <th >Delivery Date</th>
                                        <th >Quantity</th>
                                        <th >Product Price</th>
                                    </thead>


                                    <tbody>
                                        @foreach($order->orderItems as $item)
                                        <tr>

                                            <td >
                                                <a href="{{route('product-detail',['slug'=>$item->product->slug])}}"><img src="{{asset('assets/img/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}" style="width:75px; height:45px;"></a>
                                            </td>
                                            <td >
                                                <p><a href="{{route('product-detail',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></p>
                                            </td>
                                            <td>{{$order->status}}</td>
                                            @if($order->delivered_date)
                                            <td>{{$order->delivered_date}}</td>
                                            @else
                                            <td>Product is Yet Not Delivered</td>
                                            @endif
                                        
                                            <td >
                                               
                                                       {{$item->quantity}}
                                                

                                            </td>
                                           
                                            <td>{{$item->price}} د.إ</td>
                                        </tr>
                                    
                                        @endforeach

                                    </tbody>

                                </table>
                                <div class="summary">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Cart Subtotal</td>
                                                <td>${{$order->subtotal}} د.إ</td>
                                            </tr>
                                            <tr>


                                                <td>Discount</td>
                                                <td>{{$order->discount}} د.إ</td>
                                            </tr>
                                            <tr>


                                                <td>Shipping and Handing</td>
                                                <td>Free</td>
                                            </tr>
                                            <tr>
                                                <td>Tax</td>
                                                <td>{{$order->tax}} د.إ</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Order Total</strong></td>
                                                <td><strong>${{$order->total}} د.إ</strong></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>