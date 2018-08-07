<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Salva Foods</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><h2>Login</h2></a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            
            <div>
                <img class="" src="img/rawpixel-191157-unsplash.jpg" width="100%" alt="">
            </div>

            {{-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> --}}
        </div>
        <br><br><br><br><br><br>
        <div class="container">
                <div class="card-deck">

                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                                <header class="container">
                                        <h3>Zapatos</h3>
                                      </header>
                            <img class="card-img-top" src="img/greg.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer">
                                <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
                          </div>
                        </div>

                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                                <header class="container">
                                        <h3>Zapatos</h3>
                                      </header>
                            <img class="card-img-top" src="img/xavier.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer">
                                <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
                          </div>
                        </div>

                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                                <header class="container">
                                        <h3>Zapatos Casuales</h3>
                                      </header>
                            <img class="card-img-top" src="img/alexandra.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer">
                                <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
                          </div>
                        </div>
                      </div>
        </div>        
        <br><br><br><br>
    </body>
</html>
