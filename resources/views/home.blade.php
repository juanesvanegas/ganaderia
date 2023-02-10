<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>categoria</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

<style>*{
margin: 0;
padding: 0;
box-sizing: border-box;
}
body{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background: #161a23;
}
.main{
position: relative;
display: flex;
justify-content: center;
align-items: center;
width: 170px;
height: 170px;
}
.main .navigation{
position: relative;
width: 40px;
height: 40px;
cursor: pointer;
display: flex;
justify-content: center;
align-items: center;
transition: 0.5s;
}
.main .navigation span{
position: absolute;
width: 7px;
height: 7px;
background: #fff;
transform: translate(calc(14px * var(--x)), calc(14px * var(--y)));
transition: transform 0.5s, width 0.5s, height 0.5s, background 0.5s;
transition-delay: calc(0.1s * var(--i));
display: flex;
justify-content: center;
align-items: center;
}
.main .navigation.active span{
width: 45px;
height: 45px;
background: #1f2536;
transform: translate(calc(60px * var(--x)), calc(60px * var(--y)));
}
.main .navigation span ion-icon{
transition: 0.5s;
font-size: 0em;
}
.main .navigation.active span ion-icon{
font-size: 1.35em;
color: #fff;
}
.main .navigation.active span:hover ion-icon{
color: #2dfc52;
filter: drop-shadow(0 0 2px #49b85d) drop-shadow(0 0 3px #49b85d) drop-shadow(0 0 12px #49b85d);
}
.close{
position: absolute;
cursor: pointer;
width: 7px;
height: 7px;
background: #fff;
transition: 0.5s;
transition-delay: 0.4s;
pointer-events: none;
display: flex;
justify-content: center;
align-items: center;
}
.main .navigation.active ~ .close{
width: 40px;
height: 40px;
pointer-events: initial;
transition-delay: 0.8s;
background: #2DFC52;
}
.main .navigation ~ .close  ion-icon{
font-size: 2em;
scale: 0;
color: #10131c;
transition: 0.5s;
}
.main .navigation.active ~ .close  ion-icon{
scale: 1;
transition-delay: 1s;
}

.dropdown{
  
position: fixed;
top: 0;
right: 0;
    
}
</style>
</head>
<body>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> --}}
                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown" >
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white" v-pre >
                         {{ Auth::user()->name }}
                         <img src="img/avatar.jpg" class="rounded-circle mb-3" style="width: 50px;" alt="Avatar" />

                     </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest




                    <div class="main">
                        <div class="navigation active">
                          <span style="--i:0;--x:-1;--y:0;" >
                            <a href="{{route('menu.categoria')}}"><ion-icon name="logo-laravel" > </ion-icon></a>
                          </span>
                          <span style="--i:1;--x:1;--y:0;">
                            <a href="{{route('index.archivo')}}">	<ion-icon name="albums"></ion-icon> </a>
                          </span>
                          <span style="--i:2;--x:0;--y:-1;">
                           <a href="{{route('index.medicamento')}}">	<ion-icon name="logo-twitter"></ion-icon> </a>
                          </span>
                          <span style="--i:3;--x:0;--y:1;">
                          <a href="{{route('index.animal')}}"> 	<ion-icon name="paw-outline"></ion-icon></a>
                          </span>
                          <span style="--i:4;--x:-1;--y:1;">
                            <a href="{{route('index.enfermedad')}}">	<ion-icon name="fitness-outline"></ion-icon></a>
                          </span>
                          <span style="--i:5;--x:-1;--y:-1;">
                            <a href="{{route('index.vacunacion')}}">	<ion-icon name="logo-discord"></ion-icon></a>
                          </span>
                          <span style="--i:6;--x:1;--y:-1;">
                              <ion-icon name="logo-github" ></ion-icon>
                          </span>
                          <span style="--i:7;--x:1;--y:1;">
                              <ion-icon name="fitness-outline"></ion-icon>
                          </span>
                        </div>
                        <div class="close"><ion-icon name="close-outline"></ion-icon></div>
                      </div>
                    <script type="module"	  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">	     </script>
                    <script>
                        let navigation = document.querySelector('.navigation');
                        let close = document.querySelector('.close');
                        navigation.onclick = function(){
                          navigation.classList.add('active');
                        }
                        close.onclick = function(){
                          navigation.classList.remove('active')
                        }
                    </script>
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
</body>
</html>
