<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body class="base">
    @include('layout.partials.nav-admin')
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
</body>
</html>