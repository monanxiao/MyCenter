<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }} - @yield('title', env('APP_NAME') )|提供软件开发（PHP/C#/Java）、产品策划、设计等服务！</title>
    <meta name="description" content="{{ $user->name . '|' . $user->introduction }} )" />
    <meta name="keywords" content="{{ $user->excerpt }}" />
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/css2.css">
    <!-- <link rel="stylesheet" href="/css/font-icons/lineicons.min.css"> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.1.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="/css/plugins/simplebar/simplebar.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/main.css?v=1.3">
</head>
<body>

    @include('mycenter.layouts._header')

    <main>

        <div id="main-container">

            @yield('content')

        </div>

        @include('mycenter.layouts._footer')

    </main>


    <aside id="splash-screen" class="flex-center">
        <img src="/img/loader/loader.svg" alt="Splash screen loader">
        <span>加载中 ...</span>
    </aside>

<script src="/js/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/js/plugins/imagesloaded.min.js" type="text/javascript"></script>
<script src="/js/plugins/simplebar.min.js" type="text/javascript"></script>
<script src="/js/plugins/isotope.min.js" type="text/javascript"></script>
<script src="/js/custom.js" type="text/javascript"></script>

</body>
</html>

