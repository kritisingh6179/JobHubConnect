
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>@yield('title')</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="" />
            <meta name="author" content="http://webthemez.com" />
            <!-- css -->
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <link href="{{asset('plugins/home-plugins/css/bootstrap.min.css')}}" rel="stylesheet" />
            <link href="{{asset('plugins/home-plugins/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet"> 
            <link href="{{asset('plugins/home-plugins/css/flexslider.css')}}" rel="stylesheet" /> 
            <link href="{{asset('plugins/home-plugins/css/style.css')}}" rel="stylesheet" />
            <!-- <link rel="stylesheet" href="plugins/dataTables/dataTables.bootstrap.css')}}">  --> 
            <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}"> 
    
            <link rel="stylesheet" href="{{asset('plugins/dataTables/jquery.dataTables.min.css')}}"> 
            <link rel="stylesheet" href="{{asset('plugins/dataTables/jquery.dataTables_themeroller.css')}}"> 
            <!-- datetime picker CSS -->
            <link href="{{asset('plugins/datepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
            <link href="{{asset('plugins/datepicker/datepicker3.css')}}" rel="stylesheet" media="screen">
            <style>
               .float-end{
                margin:10px 10px;
               }
                .navbar {
                    background-color: #90aac6;
                    color:black;
                    padding: 10px;
                    margin:10px;
                }
                .navbar a {
               
                text-decoration: none;
                margin: 0 10px;
            }
            
            .nav-item {
    margin: 0 20px;
    list-style: none; /* Remove list bullets */
}
        
                .navbar-nav .nav-link {
                    color: #007BFF;
                    list-style: none;
    padding: 0;
    display: flex; 
    justify-content: center;
                }
                .content {
            background-color: #fff; /* Background color of the content box */
            padding: 20px; /* Padding around the content */
          /* Border around the content box */
            /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); Box shadow for a subtle depth effect */
        }
            </style>
        </head>
    
        <body>
    
            <div id="wrapper" class="home-page">
    
                <!-- start header -->
                @include("client_layout.header")    
                <!-- end header --> 
                <section id="inner-headline">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <h2 class="pageTitle">Jobs</h2>
                            
                          </div>
                      </div>
                  </div>
              </section> 
             
            <div class="float-end">
                <a href="{{ route('job.create') }}" class="btn btn-info">
                    <i class="fa fa-plus-circle"></i> Create Job Listing
                </a>
                <a class="btn btn-info" aria-current="page" href="{{ route('jobindex') }}"><i class="fa fa-arrow-left"></i>Home</a>
            </div>
    {{-- start-content --}}
    <div class="content">
        @yield('content')
    </div>
   
    
    {{-- end-content --}}
                <!-- start footer -->
                @include("client_layout.footer")
    
         <!-- end footer -->
        <!-- javascript ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{asset('plugins/home-plugins/js/jquery.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/dataTables/dataTables.bootstrap.min.js')}}" ></script>  
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script> 
        <script type="text/javascript" src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{asset('plugins/datepicker/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" src="{{asset('plugins/datepicker/locales/bootstrap-datetimepicker.uk.js')}}" charset="UTF-8"></script>
        <script type="text/javascript" language="javascript" src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script> 
        <script type="text/javascript" language="javascript" src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script> 
        <script type="text/javascript" language="javascript" src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script> 
        <script src="{{asset('plugins/home-plugins/js/jquery.fancybox.pack.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/jquery.fancybox-media.js')}}"></script>  
        <script src="{{asset('plugins/home-plugins/js/jquery.flexslider.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/animate.js')}}"></script>
        <!-- Vendor Scripts -->
        <script src="{{asset('plugins/home-plugins/js/modernizr.custom.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/animate.js')}}"></script>
        <script src="{{asset('plugins/home-plugins/js/custom.js')}}"></script> 
        <script src="{{asset('plugins/home-plugins/js/script.js')}}"></script>     
    </body>
    </html>