<!doctype html>
<html>

<head>
{{-- <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>  --}}

    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>




    <meta charset="utf-8">
    <title>Laravel</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8"> @yield('content') </div>
    </div>
</div>
</body>

<link rel="stylesheet" href="{{ URL::asset('my_lib/x-editable-develop/dist/bootstrap3-editable/js/bootstrap-editable.min.js')}}">
<script src="{{ URL::asset('my_lib/x-editable-develop/dist/bootstrap3-editable/css/bootstrap-editable.css')}}"></script>


</html>
