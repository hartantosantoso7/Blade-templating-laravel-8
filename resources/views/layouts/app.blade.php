<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | Landing Page</title>

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')


</head>
<body>

    @include('includes.header')
        @yield('content')
    @include('includes.footer')

    @stack('before-style')
    @include('includes.script')
    @stack('after-style')

</body>
</html>
