<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.master_head')
    @show
</head>

<body>
    <div class="wrapper">
        @include('partials.nav_sidebar')

        <div class="main-panel">
            @include('partials.nav_header')

            <div class="content">
                @yield('content')
            </div>

            @include('partials.footer')
        </div>
    </div>
</body>
@include('partials.master_end')
@yield('script')
</html>
