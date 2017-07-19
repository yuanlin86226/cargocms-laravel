    
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