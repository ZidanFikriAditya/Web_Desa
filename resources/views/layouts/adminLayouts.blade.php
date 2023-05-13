<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name')  }}</title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
    >


    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
<div class="fixed top-0 left-0 h-screen w-[40%] md:w-[16.7%] duration-300 z-50" id="sidebar">
    @include('partials.sidebar')
</div>
<div class="absolute left-0 md:left-[16.7%]" id="wrapperContent">
    @include('partials.topbar')
    <div class="mt-[3rem]">
        @yield('content-admin')
    </div>
</div>
<script>
    $(document).ready(function () {

    })

    var activeSidebar = true
    $('#dashboardBar').on('click', function () {

        if (activeSidebar){
            $('#wrapperContent')[0].classList = 'absolute left-0 md:left-[0%] duration-300'
            $('#topbar')[0].classList = 'fixed top-0 right-0 w-full bg-slate-600 py-1 px-2 duration-300'
            $('#sidebar')[0].classList = 'fixed top-0 left-0 h-screen w-[0%] duration-300 z-50'
            activeSidebar = false
        } else {
            $('#wrapperContent')[0].classList = 'absolute left-0 md:left-[16.7%] duration-300'
            $('#topbar')[0].classList = 'fixed top-0 right-0 w-full md:w-[83.3%] bg-slate-600 py-1 px-2 duration-300'
            $('#sidebar')[0].classList = 'fixed top-0 left-0 h-screen w-[40%] md:w-[16.7%] duration-300 z-50'
            activeSidebar = true
        }
    })
</script>
</body>
</html>
