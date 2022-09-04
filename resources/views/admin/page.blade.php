@extends('admin.template')
 



@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>CNPJ</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{url('assets1/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Atendimento CNPJ</h6>
                        <span>RJ - SP</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    


        <!-- Content Start -->
        <div class="content">
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">CNPJs - FORNECEDORES</h6>

                        <form action="" method="GET" class="d-flex" role="search">
                       <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                       </form>
                        
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    
                                    
                                    <th scope="col">Empresa</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">CNPJ</th>
                                    <th scope="col">Responsavel</th>
                                    <th scope="col">Link</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($dados as $dado)
                                <tr>
                                    
                                    
                                    <td>{{$dado->empresa}}</td>
                                    <td>{{$dado->email}}</td>
                                    <td>{{$dado->cnpj}}</td>
                                    <td>{{$dado->nome}}</td>         
                                    <td><a href="{{ url('/sigilo/' . $dado->id) }}"><button type="button" class="btn btn-success">Doc</button></a></td>                    
                                </tr>
                                
                                @endforeach
                           
                               
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            


           
        </div>
       
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{url('assets1/lib/chart/chart.min.js')}}"></script>
    <script src="{{url('assets1/lib/chart/chart.min.js')}}"></script>
    <script src="{{url('assets1/lib/easing/easing.min.js')}}"></script>

    <script src="{{url('assets1/lib/waypoints/waypoints.min.js')}}"></script>
    
    <script src="{{url('assets1/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets1/lib/tempusdominus/js/moment.min.js')}}"></script>
    
    <script src="{{url('assets1/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{url('assets1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{url('assets1/js/main.js')}}"></script>
    
   <!-- Template Javascript -->
    <script src="js/main.js"></script>

   


@endsection
