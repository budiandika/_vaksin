<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.head')
</head>
<body>
    <div class="container-scroller">
        <div class="horizontal-menu">
            @include('layout.navbar')
        </div>
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    @include('layout.footer')
</body>
</html>