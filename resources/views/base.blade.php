<!DOCTYPE html>
<html>
    <head>
        <title>PokemonGo</title>
        <script src="{{ asset("js/jquery.js") }}"></script>
        <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
        <link rel="stylesheet" href="{{asset("css/custom.css")}}">

    </head>
    <body>
        <audio autoplay>
          <source src="shttp://66.90.91.26/ost/pokemon-gameboy-sound-collection/aipycrsoym/101-opening.mp3"></source>
          
          
        </audio autoplay>

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">Pokemon</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Random</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Type <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/poke/public/pokedex/1">Bicho</a></li>
                    <li><a href="/poke/public/pokedex/2">Siniestro</a></li>
                    <li><a href="/poke/public/pokedex/3">Dragon</a></li>
                    <li><a href="/poke/public/pokedex/4">Eléctrico</a></li>
                    <li><a href="/poke/public/pokedex/5">Hada</a></li>
                    <li><a href="/poke/public/pokedex/6">Lucha</a></li>
                    <li><a href="/poke/public/pokedex/7">Fuego</a></li>
                    <li><a href="/poke/public/pokedex/8">Volador</a></li>
                    <li><a href="/poke/public/pokedex/9">Fantasma</a></li>
                    <li><a href="/poke/public/pokedex/10">Planta</a></li>
                    <li><a href="/poke/public/pokedex/11">Tierra</a></li>
                    <li><a href="/poke/public/pokedex/12">Hielo</a></li>
                    <li><a href="/poke/public/pokedex/13">Normal</a></li>
                    <li><a href="/poke/public/pokedex/14">Veneno</a></li>
                    <li><a href="/poke/public/pokedex/15">Psíquico</a></li>
                    <li><a href="/poke/public/pokedex/16">Roca</a></li>
                    <li><a href="/poke/public/pokedex/17">Acero</a></li>
                    <li><a href="/poke/public/pokedex/18">Agua</a></li>        
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
              </ul>
            </div>
          </div>
        </nav>
    
        <div class="container cuerpo">
            <div class="row">
                <div class="col-xs-12">
                    @yield('encabezado')

                    @yield('contenido')
                </div>
            </div>
        </div>



     <script src="{{ asset("js/bootstrap.js") }}"></script>
    </body>
</html>
