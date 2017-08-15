<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello {{$name}}, welcome to Laraland! : )</div>
                <div class="">
                  {{$user}}
                </div>
                <div class="">

                  {{Form::number('name', 'value')}}
                  {{ Form::checkbox('name', 'value', true) }}
                  {{ Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S') }}
                  {{ Form::submit('Click Me!') }}
                  {{ Log::alert('Ciao') }}
                  {{ Form::textarea('notes') }}

                </div>



            </div>
        </div>
    </body>
</html>
