<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'webshots')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <style>
    body {
    background-color: white;
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
