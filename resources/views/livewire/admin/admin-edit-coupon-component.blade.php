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
                        <h4>Edit Coupon</h4>
                    </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal justify-content-center" wire:submit.prevent="storeCoupon">



                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Coupon Code/Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control input-md" placeholder="coupon Name" wire:model="code" />
                                @error('coupon')<p class="text-danger">{{$message}}</p>@enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Coupon Type</label>
                            <div class="col-md-12">
                                <select class="form-control" wire:model="type">
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percent</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Value</label>
                            <div class="col-md-12">
                                <input class="form-control" id="value" placeholder="Value" wire:model="value">
                                @error('value')<p class="text-danger">{{$message}}</p>@enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Cart Value</label>
                            <div class="col-md-12">
                                <input class="form-control" id="cart_value" placeholder="Cart Value" wire:model="cart_value">
                                @error('cart_value')<p class="text-danger">{{$message}}</p>@enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Expiry Date</label>
                            <div class="col-md-12">
                                <input type="date" class="form-control" id="expiry-date" placeholder="Expiry Date yyyy-mm-dd" wire:model="expiry_date">
                                @error('expirey_date')<p class="text-danger">{{$message}}</p>@enderror

                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info float-right p-10">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- @push('scripts')
<script>
    $(function() {
        $('#expiry-date').datetimepicker({
            format: 'Y-MM-DD'
        })

    });
</script>
@endpush -->