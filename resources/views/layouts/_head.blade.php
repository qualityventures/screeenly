<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Webshots')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <style>
    body {
    background-color: white;
    }
    .col-sm-4 {
    width: 100% !important;
    }
    .h3, h3 {
    font-size: 40px;
    color: black;
    text-align: center;
    }
    p {
    color: #777;
    text-align: center;
    font-size: 20px;
    }
    .u-white {
    color: #000000;
    }
    .u-background--primary {
    background-color: #ffffff;
    }
    .navbar-default {
    border-color: #cccccc;
    }
    .navbar-brand {
    font-size: 20px;
    }
    .navbar-default .navbar-nav>li>a {
    font-size: 15px;
    }
    </style>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144975993-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-144975993-1');
    </script>


    <link rel="shortcut icon" href="/favicon.ico">
</head>
