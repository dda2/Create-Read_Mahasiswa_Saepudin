<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home')}}">Mahasiswa</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                @if (Auth::check())
                <li><a href="{{ route('mahas') }}">Data Mahasiswa</a></li>
                @endif
            </ul>
                
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li><a href="">{{Auth::user()->getNameOrUsername() }}</a></li>
                <li><a href="{{route('signout')}}">Keluar</a></li>
                @else
                <li><a href="{{ route('signup') }}">Daftar</a></li>
                <li><a href="{{ route('signin') }}">Masuk</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h3>Fixed Navbar</h3>
    <div class="clearfix visible-lg"></div>
</div>