 @extends('layouts.app_data')

 @section('content')
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0"></h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><i class="c-info-md nav-icon bi bi-house-door-fill"></i></li>
                         {{-- <li class="breadcrumb-item active">Starter Page</li> --}}
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <div class="row">
         <div class="col-12">
             <h1>Panel administrativo</h1>
         </div>
     </div>
     <style>
         .bg-card-azul {
             background: rgb(58, 103, 180);
             background: linear-gradient(90deg, rgba(58, 103, 180, 1) 0%, rgba(16, 126, 117, 1) 50%, rgba(0, 241, 255, 0.7035189075630253) 100%);
         }

         .color-icon {
             color: #fff !important;
         }
     </style>
     <div class="row">
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-card-azul">
                 <div class="inner text-white">
                     <h3>{{ $user }}</h3>

                     <p>Total de usuarios</p>
                 </div>
                 <div class="icon">
                     <i class="color-icon fa fa-address-card" aria-hidden="true"></i>
                 </div>
                 <a href="{{ route('user.index') }}" class="small-box-footer">Más información <i
                         class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-success">
                 <div class="inner">
                     <h3>53<sup style="font-size: 20px">%</sup></h3>

                     <p>Bounce Rate</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-stats-bars"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-warning">
                 <div class="inner">
                     <h3>44</h3>

                     <p>User Registrations</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-person-add"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-danger">
                 <div class="inner">
                     <h3>65</h3>

                     <p>Unique Visitors</p>
                 </div>
                 <div class="icon">
                     <i class="ion ion-pie-graph"></i>
                 </div>
                 <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
         <!-- ./col -->
     </div>
 @endsection
