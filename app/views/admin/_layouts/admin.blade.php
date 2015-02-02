<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv=""X="UA-Compatible" content="IE=edge, chrome=1">
    <title>Blog Admin panel</title>

    {{ HTML::style('css/admin.css') }}
</head>
<body>
   <header>
	<div class="container">
		<h1>My Admin Panel</h1>
        @include('admin._layouts.nav')
	</div>
</header>
<main class="container">
    @yield('content')
</main>

<footer>
	<div class="container">
       &copy; {{ date('Y') }} Matthew McMullen Smith
    </div>
</footer>
</body>
</html>
