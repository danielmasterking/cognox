<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Coinlayer</title>

  

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="">Coinlayer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active " href="{{ route('documentation') }}">Documentation <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                <a class="nav-link" href="{{ route('login') }}">Log In</a>
                
              </div>
            </div>
        </nav>
    </header>
   
    
    <section style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group menuLatDoc">
                        <li class="list-group-item active">GETTING STARTED</li>
                        <li class="list-group-item">
                            <a href="#accessKey">API Access Key</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">API Response</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Available Endpoints</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Connection via HTTPS</a>
                        </li>

                        <li class="list-group-item">
                            <a href="#">JSONP Callbacks</a>
                        </li>

                        <li class="list-group-item">
                            <a href="#">Error Codes</a>
                        </li>
                      </ul>


                      <ul class="list-group menuLatDoc" style="padding-top: 15px;">
                        <li class="list-group-item active">ENDPOINTS</li>
                        <li class="list-group-item">
                            <a href="#simple/price">/simple/price</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#simple/token_price">/simple/token_price</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#simple/supported_vs_currencies">/simple/supported_vs_currencies</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#coins/list">/coins/list</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#coins/markets/">/coins/markets/</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#/coins">/coins</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#/coins/tickers">/coins/tickers</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#coins/history">/coins/history</a>
                        </li>
                      </ul>
                </div>

                <div class="col-md-9">
                    @yield('seccion')
                </div>
            </div>
        </div>
        

    </section>

</body>

</html>
