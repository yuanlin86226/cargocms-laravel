<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/assets/admin/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap core CSS     -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet" />
        
    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="/assets/admin/css/app.css" rel="stylesheet">
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/admin/css/demo.css" rel="stylesheet" />
    
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/assets/admin/css/pe-icon-7-stroke.css" rel="stylesheet" />
    

    @show
</head>
<body>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="azure" data-image="/assets/admin/img/full-screen-image-1.jpg"> 
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
  
    <!--   Vue.js   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>


    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="/assets/admin/js/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/admin/js/jquery-ui.min.js" type="text/javascript"></script> 
	<script src="/assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
	
	
	<!--  Forms Validations Plugin -->
	<script src="/assets/admin/js/jquery.validate.min.js"></script>
	
	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="/assets/admin/js/moment.min.js"></script>
	
    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="/assets/admin/js/bootstrap-datetimepicker.js"></script>
    
    <!--  Select Picker Plugin -->
    <script src="/assets/admin/js/bootstrap-selectpicker.js"></script>
    
	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="/assets/admin/js/bootstrap-checkbox-radio-switch-tags.js"></script>
	
	<!--  Charts Plugin -->
	<script src="/assets/admin/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/admin/js/bootstrap-notify.js"></script>
    
    <!-- Sweet Alert 2 plugin -->
	<script src="/assets/admin/js/sweetalert2.js"></script>
        
    <!-- Vector Map plugin -->
	<script src="/assets/admin/js/jquery-jvectormap.js"></script>
	
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<!-- Wizard Plugin    -->
    <script src="/assets/admin/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Datatable Plugin    -->
    <script src="/assets/admin/js/bootstrap-table.js"></script>
    
    <!--  Full Calendar Plugin    -->
    <script src="/assets/admin/js/fullcalendar.min.js"></script>
    
    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="/assets/admin/js/light-bootstrap-dashboard.js"></script>
	
	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="/assets/admin/js/demo.js"></script>

	    
    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
</html>