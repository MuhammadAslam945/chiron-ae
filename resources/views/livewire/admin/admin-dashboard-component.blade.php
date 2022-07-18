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
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Today Orders <img src="{{asset('admin/assets/images/gift.png')}}" alt="">
                                    </h4>
                                    <h2 class="mb-5">{{$todayOrder}}</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Orders <img src="{{asset('admin/assets/images/gift.png')}}" alt="">
                                    </h4>
                                    <h2 class="mb-5">{{$weeklyOrder}}</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Active Orders <img src="{{asset('admin/assets/images/gift.png')}}" alt="">
                                    </h4>
                                    <h2 class="mb-5">{{$activeOrders}}</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-primary card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Total Orders <img src="{{asset('admin/assets/images/gift.png')}}" alt="">
                                    </h4>
                                    <h2 class="mb-5">{{$totalOrders}}</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Today Sale <img src="{{asset('admin/assets/images/chart-line.png')}}" alt="">
                                    </h4>
                                    <h5 class="mb-5 text-dark">{{$todaySale}} د.إ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Sale <img src="{{asset('admin/assets/images/chart-line.png')}}" alt="">
                                    </h4>
                                    <h5 class="mb-5 text-dark">{{$weeklySale}} د.إ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Active Sale <img src="{{asset('admin/assets/images/chart-line.png')}}" alt="">
                                    </h4>
                                    <h5 class="mb-5 text-dark">{{$activeSale}} د.إ</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Total Sale <img src="{{asset('admin/assets/images/chart-line.png')}}" alt="">
                                    </h4>
                                    <h5 class="mb-5 text-dark">{{$totalSale}} د.إ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Each Product Sale Bar Chart</h4>
                               
                                    <div id="chart-div" style="width:100%; height: 30%;"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Each Product Sale Pie </h4>
                               
                                  
                                    <div id="piechart" style="width:100%; height:400px;"></div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                      
                        
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Each Product Sale Bar Chart</h4>
                               
                                    
                                    <div id="barchart_material" style="width: 900px; height:900px;"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Orders</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Order ID</th>
                                                    <th> Order Total </th>
                                                    <th> Order Status </th>
                                                    <th> Order Date </th>
                                                    <th> action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                <tr>
                                                    <td>
                                                         {{$order->id}}
                                                    </td>
                                                    <td> {{$order->total}} </td>
                                                    <td>
                                                        <label class="badge badge-gradient-success">{{$order->status}}</label>
                                                    </td>
                                                    <td> {{$order->created_at}} </td>
                                                    <td> <a href="#" class="btn badge-gradient-success btn-sm"><img src="{{asset('admin/assets/images/eye.png')}}" alt=""></a> </td>
                                                </tr>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
                @push('scripts')
                <script src='https://www.gstatic.com/charts/loader.js'></script>
                <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Product Name', 'Sales', 'Sell Quantity', 'Remaining'],
          @foreach($products as $product)
          ['{{$product->name}}', {{$product->sale_quantity * $product->price}}, {{$product->sale_quanity}}, {{$product->quantity}}],
          @endforeach
          
        ]);

        var options = {
          chart: {
            title: 'Each Product Performance',
            subtitle: 'Sales Income, and Remaining Quantity',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    
    <script>
      google.charts.load('upcoming', {'packages': ['vegachart']}).then(drawChart);

      function drawChart() {
        const dataTable = new google.visualization.DataTable();
        dataTable.addColumn({type: 'string', 'id': 'Product'});
        dataTable.addColumn({type: 'number', 'id': 'amount'});
        dataTable.addRows([
            @foreach($products as $product)
          ['{{$product->id}}', {{$product->sale_quantity * $product->price}} ],
          @endforeach
          
          
        ]);

        const options = {
          "vega": {
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "width": 1000,
            "height": 250,
            "padding": 5,

            'data': [{'name': 'table', 'source': 'datatable'}],

            "signals": [
              {
                "name": "tooltip",
                "value": {},
                "on": [
                  {"events": "rect:mouseover", "update": "datum"},
                  {"events": "rect:mouseout",  "update": "{}"}
                ]
              }
            ],

            "scales": [
              {
                "name": "xscale",
                "type": "band",
                "domain": {"data": "table", "field": "Product"},
                "range": "width",
                "padding": 0.05,
                "round": true
              },
              {
                "name": "yscale",
                "domain": {"data": "table", "field": "amount"},
                "nice": true,
                "range": "height"
              }
            ],

            "axes": [
              { "orient": "bottom", "scale": "xscale" },
              { "orient": "left", "scale": "yscale" }
            ],

            "marks": [
              {
                "type": "rect",
                "from": {"data":"table"},
                "encode": {
                  "enter": {
                    "x": {"scale": "xscale", "field": "Product"},
                    "width": {"scale": "xscale", "band": 1},
                    "y": {"scale": "yscale", "field": "amount"},
                    "y2": {"scale": "yscale", "value": 10}
                  },
                  "update": {
                    "fill": {"value": "steelblue"}
                  },
                  "hover": {
                    "fill": {"value": "red"}
                  }
                }
              },
              {
                "type": "text",
                "encode": {
                  "enter": {
                    "align": {"value": "center"},
                    "baseline": {"value": "bottom"},
                    "fill": {"value": "#333"}
                  },
                  "update": {
                    "x": {"scale": "xscale", "signal": "tooltip.Product", "band": 1.5},
                    "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                    "text": {"signal": "tooltip.amount"},
                    "fillOpacity": [
                      {"test": "datum === tooltip", "value": 0},
                      {"value": 1}
                    ]
                  }
                }
              }
            ]
          }
        };
      
        
        const chart = new google.visualization.VegaChart(document.getElementById('chart-div'));
        chart.draw(dataTable, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          @foreach($products as $product)
          ['{{$product->name}}',{{$product->sale_quantity * $product->price}}],
          @endforeach
          
        ]);

        var options = {
          title: 'My Each Product Sale'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
     
 
                @endpush