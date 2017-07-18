<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.login_head')
    @show
</head>

<body>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="orange" data-image="/assets/img/full-screen-image-1.jpg"> 
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@include('partials.login_end')
</html>