<!doctype html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TBLISS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />


    <style>
        .juicer-feed.modern li.feed-item {
            background: transparent;
            border: none;
        }

        .juicer-feed.modern .j-message {
            color: white;
        }

        .j-poster h3 {
            color: white;
        }

        .juicer-feed.modern .j-poster {
            padding: 14px 0 12px;
        }

        .juicer-feed.modern .j-text {
            padding: 20px 0;
        }

        .juicer-feed h1.referral {
            display: none !important;
        }

        .j-poster {
            display: none !important;
        }

        .j-text {
            display: none !important;
        }

        .juicer-feed {
            max-height: none !important;
        }

        .j-image .j-content-image {
            height: 300px !important;
            object-fit: cover;
        }

        .j-overlay .j-overlay-content .j-post-overlay .image .j-image .j-content-image {
            height: auto !important;
        }

        /* .j-overlay-text.j-gallery {
            height: 300px !important;
        } */
    </style>
    {!! htmlScriptTagJsApi() !!}
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://assets.juicer.io/embed-no-jquery.js" type="text/javascript"></script>







</head>

<body class="overflow-x-hidden">
    @yield('container')
    @stack('javascript-internal')

</body>

</html>