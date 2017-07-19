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
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="/assets/admin/img/full-screen-image-3.jpg">
            <!--

                Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                Tip 2: you can also add an image using data-image tag

            -->

            <div class="logo" style="border-bottom:1px solid rgba(255, 255, 255, 0.2);">
                <a href="#" class="logo-text">
                    <img src="/assets/admin/img/logo.png" style="max-width: 180px;padding:50px 0;"/>
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="＃" class="logo-text">
                    
                </a>
            </div>

            <div class="sidebar-wrapper">

                <ul class="nav">

                    @if( strpos($_SERVER['REQUEST_URI'],'User') )
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a data-toggle="collapse" href="#UserManagement">
                            <i class="pe-7s-users"></i>
                            <p>後台帳號管理
                            <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="UserManagement">
                            <ul class="nav">
                                <li><a href="user">後台帳號管理</a></li>
                                <li><a href="role">後台角色管理</a></li>
                            </ul>
                        </div>
                    </li>

                    @if( strpos($_SERVER['REQUEST_URI'],'System') )
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a data-toggle="collapse" href="#SystemManagement">
                            <i class="pe-7s-config"></i>
                            <p>系統參數管理
                            <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="SystemManagement">
                            <ul class="nav">
                                <li><a href="#">系統參數管理</a></li>
                                <li><a href="menu">後台選單管理</a></li>
                            </ul>
                        </div>
                    </li>

                    @if( strpos($_SERVER['REQUEST_URI'],'Member') )
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a data-toggle="collapse" href="#MemberManagement">
                            <i class="pe-7s-users"></i>
                            <p>會員管理
                            <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="MemberManagement">
                            <ul class="nav">
                                <li><a href="#">會員資料管理</a></li>
                                <li><a href="#">資料匯入作業</a></li>
                                <li><a href="#">資料匯出作業</a></li>
                            </ul>
                        </div>
                    </li>

                    @if( strpos($_SERVER['REQUEST_URI'],'Event') )
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a data-toggle="collapse" href="#EventManagement">
                            <i class="pe-7s-gift"></i>
                            <p>活動管理
                            <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="EventManagement">
                            <ul class="nav">
                                <li><a href="#">活動管理</a></li>
                                <li><a href="#">提示訊息管理</a></li>
                            </ul>
                        </div>
                    </li>

                    @if( strpos($_SERVER['REQUEST_URI'],'Page') )
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a data-toggle="collapse" href="#PageManagement">
                            <i class="pe-7s-config"></i>
                            <p>內容管理
                            <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="PageManagement">
                            <ul class="nav">
                                <li><a href="#">頁面圖文管理</a></li>
                                <li><a href="#">圖片檔案管理</a></li>
                            </ul>
                        </div>
                    </li>

                    @if( strpos($_SERVER['REQUEST_URI'],'Nav') )
                    <li class="active">
                    @else
                    <li>
                    @endif
                        <a data-toggle="collapse" href="#NavManagement">
                            <i class="pe-7s-map-2"></i>
                            <p>上網導航上網導航管理
                            <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="NavManagement">
                            <ul class="nav">
                                <li><a href="#">導航連結管理</a></li>
                                <li><a href="#">熱門遊戲管理</a></li>
                                <li><a href="#">常用連結管理</a></li>
                                <li><a href="#">頁尾連結管理</a></li>
                                <li><a href="#">備用網址管理</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </div>

        <div class="main-panel">

			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
							<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
							<i class="fa fa-navicon visible-on-sidebar-mini"></i>
						</button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">@yield('page_title')</a>
					</div>
					<div class="collapse navbar-collapse">

						

						<ul class="nav navbar-nav navbar-right">

							<li class="dropdown dropdown-with-icons">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-user"></i>
									<p>
										{{ Auth::user()->username }}
										<b class="caret"></b>
									</p>
								</a>
								<ul class="dropdown-menu dropdown-with-icons">
									<li>
										<a href="#">
											<i class="pe-7s-lock"></i> 修改帳號資料
										</a>
									</li>
									<li>
										<a href="logout" class="text-danger swal-prompt">
											<i class="pe-7s-close-circle"></i>
											登出
										</a>
									</li>
								</ul>
							</li>

						</ul>
					</div>
				</div>
			</nav>

            <div class="content">
                @yield('content')
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        Copyright &copy; 2017 F1娛樂客服系統
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
    
    <!--   Vue.js   -->
    <script src="/lib/vue/dist/vue.min.js"></script>
    <script src="/lib/vue-resource/dist/vue-resource.min.js"></script>
    <script src="/lib/vee-validate/dist/vee-validate.min.js"></script>
    <script src="/lib/vee-validate/dist/locale/zh_TW.js"></script>
    <script src="/lib/moment/min/moment.min.js"></script>

    

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

    <!--  Bootstrap Table Plugin    -->
    <script src="/assets/admin/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="/assets/admin/js/jquery.datatables.js"></script>


    <!--  Full Calendar Plugin    -->
    <script src="/assets/admin/js/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="/assets/admin/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="/assets/admin/js/demo.js"></script>

    <!-- Scripts -->
     <!-- <script src="{{ asset('js/app.js') }}"></script>  -->
     <!-- <script src="/js/app.js"></script>  -->

    <!-- Dashboard開啟通知 -->
     <!-- <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initDashboardPageCharts();
        	demo.initVectorMap();

        	$.notify({
            	icon: 'pe-7s-bell',
            	message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

            },{
                type: 'warning',
                timer: 4000
            });

    	});
    </script>  -->
    
    <script type="text/javascript">

        var notifyAfterHttpSuccess = function(response) {
            if (!response) return;
            var body = response.body || response;
            if (body && body.message) {
                $.notify({
                    message: body.message
                }, {
                    type: body.type || (body.result?'success':'danger'),
                    timer: 1500
                });
            }
        };

        var notifyAfterHttpError = function(response) {
            var message = response?'操作失敗(代碼: ' + response.status + ' - ' + response.statusText + ')':'操作失敗';
            $.notify({
                message: message
            }, {
                type: 'danger',
                timer: 2000
            });
        };

        var getUrlParameter = function(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };

        Vue.use(VeeValidate, {locale: 'zh_TW'}); // good to go. 

        // Setup Vue Filters
        Vue.filter('formatDate', function(value) {
            if (!value) return value;
            return moment(String(value)).format('YYYY/MM/DD HH:mm:ss');
        });

        Vue.filter('formatBasename', function(value) {
            if (!value) return value;
            return value.split('/').pop();
        });

        Vue.filter('showdown', function(value) {
            if (!value) return value;
            return showdown.makeHtml(value);
        });
	</script>
    @yield('script')
</html>
