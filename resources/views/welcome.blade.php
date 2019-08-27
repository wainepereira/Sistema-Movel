<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #A020F0;
                color: #F5DEB3;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body{
                
                width:100%;
                height:120vh;
                background: url('img/5g-5.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size:cover;

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
            .drone{
                position:absolute;
                top:40%;
                left:30%;
                transform: translate(-50%,-50%);
                animation: fly 4s ease-in-out infinite;
            }
            @keyframes fly{
                0%{
                    transform: translate(-50%, -46%);
                }
                50%{
                    transform: translate(-50%, -54%);
                }
                100%{
                    transform: translate(-50%, -46%);
                }
            }
            .header {
                position: absolute;
                top: 60%;
                left:50%;
                transform: translate(-50%,-50%);
                text-align: center;
            }
            .header h1{
                color: #8B008B;
                font-size: 48px;
                font-weight: 400; 
                margin-bottom: 8px ;
                text-shadow: 0.1em 0.1em 0.2em black;
            }
            .header p{
                color: #8B008B;
                font-size:26px;
                font-weight: lighter;
                text-shadow: 0.1em 0.1em 0.2em black;
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #8B0081;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 0 0 0.2em #87F, 0 0 0.2em #87F,
        0 0 0.2em #87F;
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
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
           
           <div class="drone" id="drone">
            <img src="img/Drone.png" alt="drone" width="420" height="305" />
           </div>

            <div class="header">
            
            <h1> <b> Morpheus</b></h1>
            <p><b>
            Vistoria em Rede Movel com Drone 
            </b></p>
        
            </div>
        
            </div>
        </div>
        <footer>
        <div style="background-color: #fffff;">

        <!-- Copyright -->
        <center>
     <div class="footer-copyright text-center py-3" style="background-color: #8B008B">© 2019 Copyright:
        <a href="mailto:waine.gomes@telefonica.com" target="_top" > <i> Waine Pereira Gomes - Eng&OP Centro Oeste</i></a>
  </div>
  </center>
  <!-- Copyright -->
</div>
</footer>
    </body>
</html>
