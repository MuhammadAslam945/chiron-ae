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
                    <span></span>Products Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="row">
    <div class="conatiner">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><h4>All Products List</h4></div>
            </div>
            <div class="card-body">
                <table class="table table-responsive table-border table-striped ">
                    <thead>
                        <tr>
                           
                            <th>Product ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sale</th>
                            <th>Remaining Quantity</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                      
                        @foreach($products as $product)
                        <tr>
                            
                            <td>{{$product->id}}</td>
                            <td><img src="{{asset('assets/img/products')}}/{{$product->image}}" alt="{{$product->name}}"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->sale_quantity}}</td>
                            <td>{{$product->quantity - $product->sale_quantiy}}</td>
                            <td>{{$product->created_at}}</td>
                            <td><a href="#" class="btn btn-success btn-sm"><img class="m-0 p1" src="{{asset('admin/assets/images/eye.png')}}" alt=""></a>
                        <a href="#" class="btn btn-info btn-sm"><img class="m-0 p1" src="{{asset('admin/assets/images/edit.png')}}" alt=""></a>
                        <a href="#" class="btn btn-danger btn-sm"><img class="m-0 p1" src="{{asset('admin/assets/images/delete.png')}}" alt=""></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links("pagination::bootstrap-5")}}
            </div>
        </div>
    </div>
</div>