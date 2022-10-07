<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body class="base">
    @include('layout.partials.nav-editor')
    @yield('content')
    @include('layout.partials.footer')
</body>
</html>