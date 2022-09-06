 @extends('backend.layouts.app')
 @section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0"> Hi, {{Auth::user()->name }}. Welcome to Dashboard! </h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Dashboard v2</li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Info boxes -->
             <div class="row">
             @foreach ($results as $result)
                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box">
                         <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">CPU Traffic</span>
                             <span class="info-box-number">
                             {{ $result->cpu_traffic}}
                                 <small>%</small>
                             </span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->
                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">Likes</span>
                             <span class="info-box-number">{{ $result->likes}}</span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->

                 <!-- fix for small devices only -->
                 <div class="clearfix hidden-md-up"></div>

                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">Sales</span>
                             <span class="info-box-number">{{ $result->sales}}</span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->
                 <div class="col-12 col-sm-6 col-md-3">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">New Members</span>
                             <span class="info-box-number">{{ $result->new_members}}</span>
                         </div>
                         <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                 </div>
                 <!-- /.col -->

               @endforeach
                </div>
             <!-- /.row -->

             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header">
                             <h5 class="card-title">Monthly Recap Report</h5>

                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                     <i class="fas fa-minus"></i>
                                 </button>
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                         <i class="fas fa-wrench"></i>
                                     </button>
                                     <div class="dropdown-menu dropdown-menu-right" role="menu">
                                         <a href="#" class="dropdown-item">Action</a>
                                         <a href="#" class="dropdown-item">Another action</a>
                                         <a href="#" class="dropdown-item">Something else here</a>
                                         <a class="dropdown-divider"></a>
                                         <a href="#" class="dropdown-item">Separated link</a>
                                     </div>
                                 </div>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                                     <i class="fas fa-times"></i>
                                 </button>
                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-md-8">
                                     <p class="text-center">
                                         <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                     </p>

                                     <div class="chart">
                                         <!-- Sales Chart Canvas -->
                                         <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                     </div>
                                     <!-- /.chart-responsive -->
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-md-4">
                                     <p class="text-center">
                                         <strong>Goal Completion</strong>
                                     </p>

                                     <div class="progress-group">
                                         Add Products to Cart
                                         <span class="float-right"><b>{{$sum_add_prod_to_card}}</b>/1750</span>
                                         <div class="progress progress-sm">
                                             <div class="progress-bar bg-primary" style="width: 95%"></div>
                                         </div>
                                     </div>
                                     <!-- /.progress-group -->

                                     <div class="progress-group">
                                         Complete Purchase
                                         <span class="float-right"><b>{{$complete_purchase}}</b>/3600</span>
                                         <div class="progress progress-sm">
                                             <div class="progress-bar bg-danger" style="width: 75%"></div>
                                         </div>
                                     </div>

                                     <!-- /.progress-group -->
                                     <div class="progress-group">
                                         <span class="progress-text">Visit Premium Page</span>
                                         <span class="float-right"><b>{{$visit_prem_page}}</b>/3000</span>
                                         <div class="progress progress-sm">
                                             <div class="progress-bar bg-success" style="width: 60%"></div>
                                         </div>
                                     </div>

                                     <!-- /.progress-group -->
                                     <div class="progress-group">
                                         Send Inquiries
                                         <span class="float-right"><b>{{$send_inquiries}}</b>/3700</span>
                                         <div class="progress progress-sm">
                                             <div class="progress-bar bg-warning" style="width: 50%"></div>
                                         </div>
                                     </div>
                                     <!-- /.progress-group -->
                                 </div>
                                 <!-- /.col -->
                             </div>
                             <!-- /.row -->
                         </div>
                         <!-- ./card-body -->
                         <div class="card-footer">
                             <div class="row">
                                 <div class="col-sm-3 col-6">
                                     <div class="description-block border-right">
                                         <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                         <h5 class="description-header">$35,210.43</h5>
                                         <span class="description-text">TOTAL REVENUE</span>
                                     </div>
                                     <!-- /.description-block -->
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-3 col-6">
                                     <div class="description-block border-right">
                                         <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                         <h5 class="description-header">$10,390.90</h5>
                                         <span class="description-text">TOTAL COST</span>
                                     </div>
                                     <!-- /.description-block -->
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-3 col-6">
                                     <div class="description-block border-right">
                                         <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                         <h5 class="description-header">$24,813.53</h5>
                                         <span class="description-text">TOTAL PROFIT</span>
                                     </div>
                                     <!-- /.description-block -->
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-sm-3 col-6">
                                     <div class="description-block">
                                         <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                         <h5 class="description-header">1200</h5>
                                         <span class="description-text">GOAL COMPLETIONS</span>
                                     </div>
                                     <!-- /.description-block -->
                                 </div>
                             </div>
                             <!-- /.row -->
                         </div>
                         <!-- /.card-footer -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->

             <!-- Main row -->
             <div class="row">
                 <!-- Left col -->
                 <div class="col-md-12">
                     <!-- MAP & BOX PANE -->

                     <!-- /.card -->

                     <!-- /.row -->

                     <!-- TABLE: LATEST ORDERS -->
                     <div class="card">
                         <div class="card-header border-transparent">
                             <h3 class="card-title">Latest Orders</h3>

                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                     <i class="fas fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                                     <i class="fas fa-times"></i>
                                 </button>
                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body p-0">
                             <div class="table-responsive">
                                 <table class="table m-0">
                                     <thead>
                                         <tr>
                                             <th>Order ID</th>
                                             <th>Item</th>
                                             <th>Status</th>
                                             <th>Popularity</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($orders as $order)
                                         <tr>
                                             <td>{{ $order->order_id}}</td>
                                             <td>{{ $order->item}}</td>
                                             <td>
                                                 @switch($order->status)
                                                 @case('shipped')
                                                 <span class="badge badge-success text-capitalize">{{ $order->status}}</span>
                                                 @break
                                                 @case('pending')
                                                 <span class="badge badge-warning text-capitalize">{{ $order->status}}</span>
                                                 @break
                                                 @case('delivered')
                                                 <span class="badge badge-danger text-capitalize">{{ $order->status}}</span>
                                                 @break
                                                 @case('ready')
                                                 <span class="badge badge-info text-capitalize">{{ $order->status}}</span>
                                                 @break
                                                 @endswitch
                                             </td>
                                             <td>
                                                 <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $order->popularity}}</div>
                                             </td>
                                         </tr>

                                         @endforeach

                                     </tbody>
                                 </table>
                             </div>
                             <!-- /.table-responsive -->
                         </div>
                         <!-- /.card-body -->

                         <!-- /.card-footer -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->


                 <!-- /.col -->
             </div>
             <!-- /.row -->
         </div>
         <!--/. container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 @endsection
