<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Matthew McMullen Smith | Design Technologist</title>

    <!-- Bootstrap core CSS -->
    {{--{{ HTML::style('css/style.css') }}--}}
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('css/blog.css') }}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
@include('_layouts.nav')
<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">
            @yield('content')

        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

            <div class="sidebar-module sidebar-module-inset">
                <img src="/images/matthew.png">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            {{--<div class="sidebar-module">--}}
                {{--<h4>Archives</h4>--}}
                {{--<ol class="list-unstyled">--}}
                    {{--<li><a href="#">March 2014</a></li>--}}
                    {{--<li><a href="#">February 2014</a></li>--}}
                    {{--<li><a href="#">January 2014</a></li>--}}
                    {{--<li><a href="#">December 2013</a></li>--}}
                    {{--<li><a href="#">November 2013</a></li>--}}
                    {{--<li><a href="#">October 2013</a></li>--}}
                    {{--<li><a href="#">September 2013</a></li>--}}
                    {{--<li><a href="#">August 2013</a></li>--}}
                    {{--<li><a href="#">July 2013</a></li>--}}
                    {{--<li><a href="#">June 2013</a></li>--}}
                    {{--<li><a href="#">May 2013</a></li>--}}
                    {{--<li><a href="#">April 2013</a></li>--}}
                {{--</ol>--}}
            {{--</div>--}}
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div>

</div>

<footer class="blog-footer">
    <p>
        &copy; {{ date('Y') }} Matthew McMullen Smith
    </p>
</footer>
{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>
