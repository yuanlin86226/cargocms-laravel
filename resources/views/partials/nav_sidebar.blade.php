    <div class="sidebar" data-color="orange" data-image="/assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo" style="border-bottom:1px solid rgba(255, 255, 255, 0.2);">
            <a href="#" class="logo-text">
                <img src="/assets/img/logo.png" style="max-width: 180px;padding:50px 0;"/>
            </a>
        </div>

    	<div class="sidebar-wrapper">

            <ul class="nav">
                @if( strpos($_SERVER['REQUEST_URI'],'user') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="user">
                        <i class="pe-7s-users"></i>
                        <p>會員管理</p>
                    </a>
                </li>

                @if( strpos($_SERVER['REQUEST_URI'],'index') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="index">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="pe-7s-plugin"></i>
                        <p>Components
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li><a href="components/buttons.html">Buttons</a></li>
                            <li><a href="components/grid.html">Grid System</a></li>
                            <li><a href="components/icons.html">Icons</a></li>
                            <li><a href="components/notifications.html">Notifications</a></li>
                            <li><a href="components/panels.html">Panels</a></li>
                            <li><a href="components/sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="components/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#formsExamples">
                        <i class="pe-7s-note2"></i>
                        <p>Forms
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li><a href="forms/regular.html">Regular Forms</a></li>
                            <li><a href="forms/extended.html">Extended Forms</a></li>
                            <li><a href="forms/validation.html">Validation Forms</a></li>
                            <li><a href="forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#tablesExamples">
                        <i class="pe-7s-news-paper"></i>
                        <p>Tables
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tablesExamples">
                        <ul class="nav">
                            <li><a href="tables/regular.html">Regular Tables</a></li>
                            <li><a href="tables/extended.html">Extended Tables</a></li>
                            <li><a href="tables/bootstrap-table.html">Bootstrap Table</a></li>
							<li><a href="tables/datatables.net.html">DataTables.net</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#mapsExamples">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="mapsExamples">
                        <ul class="nav">
                            <li><a href="maps/google.html">Google Maps</a></li>
                            <li><a href="maps/vector.html">Vector Maps</a></li>
                            <li><a href="maps/fullscreen.html">Full Screen Map</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="charts.html">
                        <i class="pe-7s-graph1"></i>
                        <p>Charts</p>
                    </a>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="pe-7s-date"></i>
                        <p>Calendar</p>
                    </a>
                </li>

                <li>
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="pe-7s-gift"></i>
                        <p>Pages
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li><a href="pages/login.html">Login Page</a></li>
                            <li><a href="pages/register.html">Register Page</a></li>
                            <li><a href="pages/lock.html">Lock Screen Page</a></li>
                            <li><a href="pages/user.html">User Page</a></li>
                            <li><a href="#">More coming soon...</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
    	</div>
    </div>