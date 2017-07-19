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
                            <li><a href="User">後台帳號管理</a></li>
                            <li><a href="#">後台角色管理</a></li>
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
                            <li><a href="SystemMenu">後台選單管理</a></li>
                            <li><a href="#">備用網址管理</a></li>
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
                        </ul>
                    </div>
                </li>

            </ul>

    	</div>
    </div>