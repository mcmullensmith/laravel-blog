

<!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Matthew McMullen Smith</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active('admin/posts') }}"><a href="/admin/posts">Posts</a></li>
                <li class="{{ set_active('admin/works') }}"><a href="/admin/works">Work</a></li>
                <li class="{{ set_active('admin/images') }}"><a  href="/admin/images">Images</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::user())
                    <li><a href="/admin/logout/">Log Out</a></li>
                @endif

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

