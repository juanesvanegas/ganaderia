<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
              font-family: 'Lato', sans-serif;
              
            }
            
            .overlay {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: rgb(0,0,0);
              background-color: rgba(0,0,0, 0.9);
              overflow-x: hidden;
              transition: 0.5s;
            }
            
            .overlay-content {
              position: relative;
              top: 25%;
              width: 100%;
              text-align: ;
              margin-top: 30px;
            }
            
            .overlay a {
              padding: 8px;
              text-decoration: none;
              font-size: 20px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }
            
            .overlay a:hover, .overlay a:focus {
              color: #f1f1f1;
            }
            
            .overlay .closebtn {
              position: absolute;
              top: 20px;
              right: 45px;
              font-size: 60px;
            }
            
            @media screen and (max-height: 450px) {
              .overlay a {font-size: 20px}
              .overlay .closebtn {
              font-size: 40px;
              top: 15px;
              right: 35px;
              }
            }





            </style>

            <style>

 /* Submenú infinito */
 .subMenu {
    position: fixed;
    display: none !important;    
    background-color: black;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.55);
  }
  /* Submenú infinito hover */
  li:hover > .subMenu {
    display: block !important;    
  }
  /* Submenú infinito enlaces hover  */
  .subMenu a:hover {
    background-color: black;
  }
  /* Submenú infinito posicionamiento vertical */
  .mVerti .subMenu {
    left: 8em;
    position: absolute !important;
  }  
 

            </style>
        <style>
             body {
             
              background-color: #20B42C;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(240)'%3E%3Cstop offset='0' stop-color='%2320B42C'/%3E%3Cstop offset='1' stop-color='%23106617'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='540' height='450' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.1'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
             }
        </style>


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
</style>

        
    </head>
    <body class="antialiased">
      <div class="content">
       
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            {{-- <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <ul id="hMenu" class="mVerti">
                        <li><a href="{{route('index.categoria')}}">Categoria</a></li>
                        <li><a href="{{route('index.archivo')}}">Archivos</a></li>
                        <li><a href="{{route('index.medicamento')}}">Medicamento</a></li>
                        <li><a href="{{route('index.animal')}}">Animales</a></li>	
                        <li><a href="{{route('index.enfermedad')}}">Enfermedades</a></li>
                        <li><a href="{{route('index.vacunacion')}}">aplicaciones</a></li>
                        
                                
                </div>
              </div>
             
            </div>
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "25%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script> --}}

            {{-- <div>
            <div>
                <a href="{{route('index.categoria')}}">Categorias</a>
                
            </div><br>
            <div>
                <a href="{{route('index.archivo')}}">Archivos</a>
            </div><br>

            <div>
                <a href="{{route('index.medicamento')}}">Medicamento</a>
            </div><br>
            <div>
                <a href="{{route('index.animal')}}">Animales</a>
            </div>
        </div> --}}


      
  <div class="main">
    <div class="navigation active">
      <span style="--i:0;--x:-1;--y:0;" >
        <a href="{{route('menu.categoria')}}"><ion-icon name="logo-laravel" > </ion-icon></a>
	  </span>
      <span style="--i:1;--x:1;--y:0;">
        <a href="#">	<ion-icon name="albums"></ion-icon> </a>
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
    </body>
</html>
