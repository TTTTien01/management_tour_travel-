<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$attributes['title'] ?? 'QL_tour'}}</title>
        <!-- Custom fonts for this template -->
    <link href="{{asset('/style/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/style/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{asset('/style/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>
<body id="page-top">
    <div id="wrapper">
        @include('common.navbar') <!--tách file-->

        <div class="d-flex flex-column" id="content-wrapper">
        {{ $slot }}
        </div>
    </div>

    


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/public/layout/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/style/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/style/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('/style/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/style/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/style/js/demo/datatables-demo.js')}}"></script>
</body>
</html>