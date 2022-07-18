<main class="no-main">
   <div class="container" >
       <div class="col-12 col-lg-12 col-md-12 col-sm-6" style="margin:20px;">
           <div class="row">
               <div class="col-md-3">
                   <div class="card  justify-content-center" style="background:#ed1d2d;">
                       <div class="card-body text-center">
                           <div class="card-title">
                               <h4 class="text-center text-light">Order's Placed</h4>
                           </div>
                           <div class="text-center">
                               <p class="text-light"><b class="text-dark">{{$totalOrders}}</b> No's</p>
                           </div>

                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="card  justify-content-center" style="background:#ed1d2d;">
                       <div class="card-body text-center">
                           <div class="card-title">
                               <h4 class="text-center text-light">Order's Total Cost</h4>
                           </div>
                           <div class="text-center">
                               <p class="text-light"><b class="text-dark">{{$totalcost}}</b> د.إ</p>
                           </div>

                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="card  justify-content-center" style="background:#ed1d2d;">
                       <div class="card-body text-center">
                           <div class="card-title">
                               <h4 class="text-center text-light">Order's Deliverd</h4>
                           </div>
                           <div class="text-center">
                               <p class="text-light"><b class="text-dark">{{$totaldelivered}}</b> No's</p>
                           </div>

                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="card  justify-content-center" style="background:#ed1d2d;">
                       <div class="card-body text-center">
                           <div class="card-title">
                               <h4 class="text-center text-light">Order's Canceled</h4>
                           </div>
                           <div class="text-center">
                               <p class="text-light"><b class="text-dark">{{$totalcancel}}</b> No's</p>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-12 col-lg-12 col-md-12 col-sm-6" style="margin:20px;">
       <table class="table table-striped table-bordered table-responsive">
           <thead style="background:#ed1d2d;color:white;">
               <tr>
                   <th style="color:white;">Order No</th>
                   <th style="color:white;">Order ID</th>
                   <th style="color:white;">Order Amount</th>
                   <th style="color:white;">Order Status</th>
                   <th style="color:white;">Order Billing Address</th>
                   <th style="color:white;">Mobile</th>
                   <th style="color:white;">Email</th>
                   <th style="color:white;">Order Date</th>
                   <th style="color:white;">Order Detail</th>
                   
               </tr>
           </thead>
           <tbody >
               @php
               $i=1;
               @endphp
           @foreach($orders as $order)
               <tr>
                   <td>{{$i++}}</td>
                   <td>{{$order->id}}</td>
                   <td>{{$order->total}}</td>
                   <td>{{$order->status}}</td>
                   <td>{{$order->line1}}</td>
                   <td>{{$order->mobile}}</td>
                   <td>{{$order->email}}</td>
                   <td>{{$order->created_at}}</td>
                   <td><a href="{{route('user.orderdetail',['order_id'=>$order->id])}}" class="btn btn-primary"><i class="fa fa-eye fa-2x text-light"></i></a></td>
               </tr>
            @endforeach
           </tbody>
           
       </table>
       </div>
   </div>
</main>
