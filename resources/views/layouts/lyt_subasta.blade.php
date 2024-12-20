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
    
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('files/bower_components/select2/css/select2.min.css')}}">

    
</head>

<body>



<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-container ">
        <nav class="navbar header-navbar pcoded-header">
        @include('layouts.menu_notificaciones')
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-header">
                                    @include('layouts.headers')
                                </div>
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

<!-- Select 2 js -->
<script type="text/javascript" src="{{asset('files/bower_components/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('files/assets/pages/data-table/js/data-table-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/advance-elements/select2-custom.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="..\files\assets\pages\product-list\product-list.js"></script>

<script src="{{asset('files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('files/assets/js/horizontal-layout.min.js')}}"></script>
<script src="{{asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/script.js')}}"></script>

</body>

</html>
