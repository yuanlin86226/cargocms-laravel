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

    	<div class="sidebar-wrapper" style="height:auto;">

            <ul class="nav">

                @if( strpos($_SERVER['REQUEST_URI'],'index') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="index">
                        <i class="pe-7s-graph"></i>
                        <p>控制台</p>
                    </a>
                </li>

                @if( strpos($_SERVER['REQUEST_URI'],'member') )
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

                @if( strpos($_SERVER['REQUEST_URI'],'System') )
                <li class="active">
                @else
                <li>
                @endif
                    <a data-toggle="collapse" href="#SystemManagement">
                        <i class="pe-7s-config"></i>
                        <p>系統管理
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="SystemManagement">
                        <ul class="nav">
                            <li><a href="SystemMenu">後台選單管理</a></li>
                            <li><a href="SystemUser">後台帳號管理</a></li>
                            <li><a href="#">後台角色管理</a></li>
                        </ul>
                    </div>
                </li>

                @if( strpos($_SERVER['REQUEST_URI'],'activity') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="#">
                        <i class="pe-7s-gift"></i>
                        <p>活動管理</p>
                    </a>
                </li>

                @if( strpos($_SERVER['REQUEST_URI'],'content') )
                <li class="active">
                @else
                <li>
                @endif
                    <a data-toggle="collapse" href="#ContentManagement">
                        <i class="pe-7s-config"></i>
                        <p>內容管理
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="ContentManagement">
                        <ul class="nav">
                            <li><a href="#">公告管理</a></li>
                            <li><a href="#">連結管理</a></li>
                            <li><a href="#">文章管理</a></li>
                            <li><a href="#">上網導航方塊管理</a></li>
                        </ul>
                    </div>
                </li>

                @if( strpos($_SERVER['REQUEST_URI'],'guide') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="#">
                        <i class="pe-7s-map-2"></i>
                        <p>上網導航上網導航管理</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>