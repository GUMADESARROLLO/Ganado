<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Laravel') }} |  Optimización del Ciclo de Producción </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}">  
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/themify-icons/themify-icons.css')}}">  
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/icofont/css/icofont.css')}}">  
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/feather/css/feather.css')}}">  
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">  
    
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\j-forms.css">
    
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/style.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/jquery.mCustomScrollbar.css')}}">
    

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/slick-carousel/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/slick-carousel/css/slick-theme.css')}}">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">

    <!-- jquery file upload Frame work -->
    <link href="{{asset('files/assets/pages/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet">

    
</head>

<body>

<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header" header-theme="theme6">
        @include('layouts.menu_notificaciones')
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                
                @include('layouts.menu_principal')
                    
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    @include('layouts.headers')
                                </div>
                                <!-- Page-header end -->

                                <!-- Page-body start -->
                                <div class="page-body">
                                    @yield('content')
                                </div>
                                <!-- Page-body end -->
                                
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Warning Section Starts -->

<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<!-- data-table js -->
<script src="{{asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('files/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>

    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="..\files\assets\pages\advance-elements\moment-with-locales.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="..\files\assets\pages\product-list\product-list.js"></script>

<script src="{{asset('files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('files/assets/js/vartical-layout.min.js')}}"></script>
<script src="{{asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/script.js')}}"></script>

<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<!-- barrating js -->
<script type="text/javascript" src="{{asset('files/bower_components/jquery-bar-rating/js/jquery.barrating.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/rating/rating.js')}}"></script>
<!-- slick js -->
<script type="text/javascript" src="{{asset('files/bower_components/slick-carousel/js/slick.min.js')}}"></script>
<!-- product detail js -->
<script type="text/javascript" src="{{asset('files/assets/pages/product-detail/product-detail.js')}}"></script>

<!-- jquery file upload js -->
<script src="{{asset('files/assets/pages/jquery.filer/js/jquery.filer.min.js')}}"></script>
<script src="{{asset('files/assets/pages/filer/custom-filer.js')}}" type="text/javascript"></script>

<!-- Metodos Js -->
@yield('MetodosJs')

</body>

</html>
