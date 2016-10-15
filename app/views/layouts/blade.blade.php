<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="container">

                    <div class="jumbotron">
                        <h1>Bootstrap Tutorial</h1>
                        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                    responsive, mobile-first projects on the web.</p>
                    </div>

                    <div class="col-md-3">
                        @section('sidebar')
                            This is the master sidebar.
                        @show
                    </div>

                    <div class="col-md-9">
                        @yield('content')
                    </div>

                </div>

            </div>

        </div>

    </body>
</html>