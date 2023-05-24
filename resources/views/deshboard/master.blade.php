<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/mdb.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/sidenav.css')}}" rel="stylesheet" >
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet" >
	<link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/datatables-select.min.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css"
        integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="fix-header fix-sidebar">
        @include('deshboard.menu')
      @yield('content')
    </div>
</div>

<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.min-2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"
        integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   
  



    @if(session()->has('success'))
    <script>
    toastr.success("{!!session()->get('success')!!}");
    </script>
    @endif
@yield('script')


</body>
</html>







