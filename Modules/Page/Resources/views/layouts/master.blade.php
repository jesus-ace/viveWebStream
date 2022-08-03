<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <!--  <link rel="stylesheet" href="\css\app.css">
        <link rel="stylesheet" href="\css\menu.css"> -->

        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/slick.css" />
        <link rel="stylesheet" href="/css/slick-theme.css" />
        <link rel="stylesheet" href="/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="/css/animate.min.css" />
        <link rel="stylesheet" href="/css/magnific-popup.css" />
        <link rel="stylesheet" href="/css/select2.min.css" />
        <link rel="stylesheet" href="/css/select2-bootstrap4.min.css" />

        <link rel="stylesheet" href="/css/slick-animation.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>streaming Vive</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/page.css') }}"> --}}

    </head>
    <body>
    {{-- <script src="/js/jquery-3.5.1.min.js"></script> --}}
        @include('page::navbar')
        @yield('content')
        {{-- @include('page::layouts.footer') --}}

        

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="Modules\Page\Resources\assets\js\app.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/select2.min.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/slick-animation.min.js"></script>
      
        <script src="/js/main.js"></script>
    </body>
</html>
