
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ url('/icon-pinguem') }}">
    <!-- Theme Mode PHP-->
    <!-- <link rel="stylesheet" href="{{ asset('php/ThemeMode.php') }}"> -->

    <!-- css Local -->
    <link rel="stylesheet" href="{{ asset('css/style_css_index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_topnav.css') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="">

    <!-- Boot strap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  
@yield('topnav')
  <header>
       <!--Top-Nav-->
    <div id="top-nav">
        <div class="topnav" style="height: 50px; width: 100%;">

          <!-- Img Logo -->
          <div class="img-logo" id="logo-id">
            <a href="/"><img src="{{ url('/logo-pinguem') }}"  alt="icon-logo" ></a>
            
          </div>

            <div class="topnav-right">
            <button type="submit" name="theme-toggle">Alterar Tema</button>
              <!-- Opcões Autenticado -->
              @auth
              
                        <!-- Authentication -->
                        <form method="POST" action="http://127.0.0.1:8000/logout">
                          @csrf
                           <a class="btn" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a>
                                                
                            <a class="btn" href="/profile">Profile</a>
                        </form>
              @endauth
              <!-- Login e registro -->
              @guest
                @if (Route::has('login'))
                <a class="btn" href="{{ route('login') }}"> Login</a>
                @endif

                @if (Route::has('register'))
                <a class="btn" href="{{ route('register') }}">Cadastra-se</a>
                @endif
              
                
            </div>
        </div>
    </div>

    <!--Título-->
    <div>
        <h1 style="text-align: center; font-size: 400%; font-style: oblique; "> Pinguim</h1>
    </div>
@endguest
    <!--  -->
    </header>

    
@yield('content')
    <footer>

    <div class="footer"> 
      
      <br>
    <p> Pinguin Hotel &copy; 2024</p></div>

    </footer>
   </body>
</html>
