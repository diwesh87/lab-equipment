<!DOCTYPE html>
<html>
    <head>
        <title>Home :: Lab Equipment</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="app">
            <!--header-->
            <div class="container">
                <div class="top-nav">
                    <div class="clearfix"> </div>
                    <!--script-->
                </div>
                <div class="clearfix"> </div>
            </div>
            @yield('content')
            <div class="container">
                <div class="row">
                 <hr>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center" style="padding: 20px;">Copyright UNIST, Department of Chemistry &copy <?php echo date('Y'); ?> all rights reserved</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{ asset('js/moment.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />
        <script src="{{ asset('js/bootbox.min.js') }}"></script>
        <script src="{{ asset('js/jquery.table2excel.min.js') }}"></script>
        <script src="{{ asset('js/keep_alive.js') }}"></script>
        <script src="{{ asset('js/user.js') }}"></script>
        <script src="{{ asset('js/lab.js') }}"></script>
        <script src="{{ asset('js/add_equipment.js') }}"></script>
        <script src="{{ asset('js/book_equipment.js') }}"></script>
        <script src="{{ asset('js/training_request.js') }}"></script>
        <script src="{{ asset('js/lab_usage.js') }}"></script>
        <script src="{{ asset('js/notification.js') }}"></script>
        @include('student.cancel_booking_modal')
        @include('student.contact_the_admin_modal')
    </body>
</html>