<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body class="base">
    @include('layout.partials.registered-nav')
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
</body>
</html>