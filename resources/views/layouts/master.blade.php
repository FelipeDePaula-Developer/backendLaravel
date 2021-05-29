@section('style')

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ URL::to('assets/bootstrap/css/bootstrap.min.css') }}">
        <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Mansory -->

        <script src="{{ URL::to('assets/mansory/mansory.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::to('assets/mansory/style-masonry.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

        <!--script -->

        <script src="{{ URL::to('assets/js/fixed-navbar.js') }}"></script>
    </head>

@show
