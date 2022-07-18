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
                    <div class="card-title">
                    <h4>All Coupons</h4>
                    </div>
                    
                </div>

                <div class="card-body">
                    <div >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="p-2 text-center">
                                        Coupon ID
                                    </th>
                                    <th class="p-2 text-center">
                                        Coupon Code
                                    </th>
                                    <th class="p-2 text-center">
                                        Type
                                    </th>
                                    <th class="p-2 text-center">
                                        Value
                                    </th>
                                    <th class="p-2 text-center">
                                        Cart Value
                                    </th>
                                    <th class="p-2 text-center">
                                        Expiry Date
                                    </th>
                                    <th class="p-2 text-center">
                                        Created At
                                    </th>
                                    <th class="p-2 text-center">
                                        Updated At

                                    </th>

                                    <th class="p-2 text-center">
                                        Action

                                    </th>
                                </tr>
                                <thead>
                                    @foreach($coupons as $coupon)
                                    <tr>
                                        <td class="p-2 text-center">{{$coupon->id}}</td>
                                        <td class="p-2 text-center">{{$coupon->code}}</td>
                                        <td class="p-2 text-center">{{$coupon->type}}</td>
                                        @if($coupon->type=="fixed")
                                        <td class="p-2 text-center">{{$coupon->value}}&nbsp;د.إ</td>
                                        @else
                                        <td class="p-2 text-center">{{$coupon->value}} %</td>
                                        @endif
                                        <td class="p-2 text-center">{{$coupon->cart_value}}&nbsp;د.إ</td>
                                        <td class="p-2 text-center">{{$coupon->expiry_date}}</td>
                                        <td class="p-2 text-center">{{$coupon->created_at}}</td>
                                        <td class="p-2 text-center">{{$coupon->updated_at}}</td>
                                        <td class="p-2 text-center">
                                            <a class="btn btn-info p-0" href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" style="width:30px;height:30px;"><img src="{{asset('admin/assets/images/edit.png')}}" style="width:24px;height:24px;" alt=""></a>
                                            <a class="btn btn-danger p-0" href="#" onclick="confirm('Are You Sure, You want to delete the coupon!.') || event.stopImmediatePropagation()" wire:click.prevent="deletecoupon({{$coupon->id}})" style="width:30px;height:30px;"><img src="{{asset('admin/assets/images/delete.png')}}" style="width:24px;height:24px;" alt=""></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    {{$coupons->links("pagination::bootstrap-4")}}
                        </table>

                        {{$coupons->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
