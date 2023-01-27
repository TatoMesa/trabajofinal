
<header>
    <div class="container-fluid preheader ">
        <span> Registrate para aportar tus noticias </span>
    </div>
    <nav class="navbar navbar-expand-sm mynavbar  ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{ url('') }}">
                <h1> <img src="{{asset('/storage/images/logo.jpeg')}}" alt="logo" class="logo"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup " aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ url('home') }}">
                        {{ isset(Auth::user()->name) ? Auth::user()->name : 'Iniciar sesión' }}</a>
                    <a class="nav-link " href="{{ url('/noticia') }}" tabindex="-1" aria-disabled="true"> Manejo de
                        Noticia </a>
                </div>
    </nav>
</header>
