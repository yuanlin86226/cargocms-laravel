    
    <!--   Vue.js   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
    

    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>


	<!--  Forms Validations Plugin -->
	<script src="/assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="/assets/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="/assets/js/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="/assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!--  Charts Plugin -->
	<script src="/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="/assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="/assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Wizard Plugin    -->
    <script src="/assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="/assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="/assets/js/jquery.datatables.js"></script>


    <!--  Full Calendar Plugin    -->
    <script src="/assets/js/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="/assets/js/demo.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

	<script type="text/javascript">
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
	</script>