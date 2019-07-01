<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }*/
            p {
                text-align: justify;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body style="background-color:#F37676" >
        <div class="container" >
            
       

        <div class="flex-center position-ref full-height" style="font-size: 30px">
            @if (Route::has('login'))
                <div class="top-right links" >
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="container">

          <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background-image: url(img/1.jpg); background-size: 100%;">
            <div class="col-md-6 px-0">
                <p class="lead my-3">
                  <br>
                  <br>
                  <br>
                  <br>
                </p>
            </div>
          </div>
           <div class="container">

          <div class="row mb-3">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"  style="background-color:#FFFFFF; ;width: 100%; height: 100%" >
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0">Acerca de:</h3>
                  <p class="card-text mb-auto">La tienda de ropa NORMITEX es es el lugar de referencia para encontrar la última moda en vestimenta para damas ya que cuenta con diversas prendas de las marcas más conocidas y de los diseñadores más famosos.</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="img/3.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
                </div>
              </div>
            </div>
           
        
    
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"  style="background-color:#FFFFFF ;width: 100%; height: 100%">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Viste a la moda:</h3>
          <p class="mb-auto">No importa tu edad o estilo, seguro que encuentras ropa perfecta que se adapte a tus gustos y estilo de vida. Encuentra la ropa que estabas buscando sin importar la ocasión casual o formal y dale un nuevo aire a tu armario con lo último de la temporada.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="img/2.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
    </div>
    </div>
     <div class="container">

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"  style="background-color:#FFFFFF ;width: 100%; height: 100%"  >
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Tendencias:</h3>
          <p class="card-text mb-auto"> Descubre las últimas tendencias de temporada y elige entre una amplia selección para potenciar y renovar tu armario con piezas y estilos clave.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="img/7.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
   
        
    
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"  style="background-color:#FFFFFF ;width: 100%; height: 100%" >
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0"> Variedad:</h3>
          <p class="mb-auto">Encontrarás desde tops y pantalones, a ropa de abrigo, ropa deportiva, ropa interior, ropa de dormir y trajes de baño, ¡la tienda de ropa de NORMITEX tiene todo lo que estás buscando!</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="img/9.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
    </div>

  </div>
</div>
</div>
</body>
</html>
