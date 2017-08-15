<!doctype html>
<html>
    <head>
        @include('includes.head')

    </head>
    <body>
        <div class="container">

            <header class="row">
                @include('includes.header')
            </header>

            <button type="button" class="btn btn-primary">Primary</button>
            <a class="btn btn-primary" href="#" role="button">Link</a>
            <button class="btn btn-primary" type="submit">Button</button>
            <input class="btn btn-primary" type="button" value="Input">
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-danger" type="reset" value="Reset">

            <div class="alert alert-primary" role="alert">
                This is a primary alert—check it out!
            </div>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>



            <footer class="row">

            </footer>
            @include('includes.component')
        </div>

    </body>
</html>