<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">LaravelApp</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(!empty($halaman) && $halaman == 'siswa')
                <li class="active">
                    <a href="{{ url('siswa') }}">Siswa <span class="sr-only">(current)</span></a>
                </li>
                @else
                <li>
                    <a href="{{ url('siswa') }}">Siswa</a>
                </li>
                @endif

                @if(!empty($halaman) && $halaman == 'about')
                <li class="active">
                    <a href="{{ url('about') }}">About <span class="sr-only">(current)</span></a>
                </li>
                @else
                <li>
                    <a href="{{ url('about') }}">About</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
