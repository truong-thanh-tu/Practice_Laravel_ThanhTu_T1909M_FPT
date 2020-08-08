<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="main">
    <div class="header mt-5">
     @include('Component.Header')
    </div>
    <div class="content">
       @yield('Content')
    </div>
    <div class="backHome">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="btn btn-danger" href="{{ Route('List_Product') }}" role="button">Back List Product</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.css') }}"></script>
</body>
</html>
