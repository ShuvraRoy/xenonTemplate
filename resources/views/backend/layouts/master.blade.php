<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.layouts.header_links')
</head>
    <body class="page-body">


    <div class="page-container">
        @include('backend.layouts.left_nav')
        <div class="main-content">
            @include('backend.layouts.top_header')
            @yield('page_content')
            @include('backend.layouts.footer')
        </div>

    </div>

    <div class="page-loading-overlay">
        <div class="loader-2"></div>
    </div>
        @include('backend.layouts.footer_links')
    </body>
</html>>
