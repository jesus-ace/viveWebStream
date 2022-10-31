<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

        <!-- Nucleo Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
      
        <!-- CSS Files -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/adminlte.min.css" />
        <link rel="stylesheet" href="/css/portal.css" />
        <title>Module Admin</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/admin.css') }}"> --}}

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        {{-- <main style="display: flex;flex-wrap: nowrap;height: 100vh; height: -webkit-fill-available;max-height: 100vh;overflow-x: auto;overflow-y: hidden;">
            @yield('content')
        </main> --}}

        <div class="wrapper">
            @include('admin::layouts.navbar')
            @include('admin::layouts.menu') 
            @include('admin::layouts.content') 
        </div>
        

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/admin.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
