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
                    <div class="row">
                        <div class="col-md-11">
                            <div class="car-title">
                                <h4>All Orders</h4>
                                @if(Session::has('order_msg'))
                                <div class="alert alert-success" role="alert">{{Session::get('order_msg')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-1 float-right">
                            <button type="button" wire:click="export('xlsx')" wire:loading.attr="disabled" class="btn btn-primary p-0 m-0 "><img src="{{asset('admin/assets/images/excel.png')}}" style="width:24px;" alt=""></button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example" class="table table-responsive">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Buyer Name</th>
                                <th>Total</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>City</th>

                                <th>Status</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>

                                <td>{{$order->firstname}} {{$order->lastname}}</td>

                                <td>{{$order->total}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->city}}</td>

                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-success btn-sm dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{$order->status}}
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                            <li class="text-center"><a href="#" style="text-decoration:none;color:black;padding:5px;" wire:click.prevent="updateOrderStatus({{$order->id}},'ordered')">Ordered</a></li>
                                            <li class="text-center"><a href="#" style="text-decoration:none;color:black;padding:5px;" wire:click.prevent="updateOrderStatus({{$order->id}},'process')">Process</a></li>
                                            <li class="text-center"><a href="#" style="text-decoration:none;color:black;padding:5px;" wire:click.prevent="updateOrderStatus({{$order->id}},'dispatch')">Dispatch</a></li>
                                            <li class="text-center"><a href="#" style="text-decoration:none;color:black;padding:5px;" wire:click.prevent="updateOrderStatus({{$order->id}},'onway')">On A Way</a></li>
                                            <li class="text-center"><a href="#" style="text-decoration:none;color:black;padding:5px;" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                            <li class="text-center"><a href="#" style="text-decoration:none;color:black;padding:5px;" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>

                                        </ul>
                                    </div>
                                </td>
                                <td>{{$order->created_at}}</td>
                                <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class='btn btn-success p-1 m-0'><img src="{{asset('admin/assets/images/eye.png')}}" style="width:24px;height:24px;" alt=""></a></td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{$orders->links("pagination::bootstrap-5")}}
                </div>
            </div>
        </div>
    </div>
</div>