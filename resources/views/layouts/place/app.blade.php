<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dmrse') }}</title>




        <link rel="stylesheet" href="Oreo/html-dark/assets/plugins/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="Oreo/html-dark/assets/css/main.css">
        <link rel="stylesheet" href="Oreo/html-dark/assets/css/color_skins.css">


</head>
</body>


            @yield('content')



<!-- Jquery Core Js -->
<script src="Oreo/html-dark/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="Oreo/html-dark/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="Oreo/html-dark/assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->

<script src="Oreo/html-dark/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="Oreo/html-dark/assets/js/pages/ui/notifications.js"></script> <!-- Custom Js -->
</body>
</html>
