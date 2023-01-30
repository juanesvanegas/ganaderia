<style>

    html, body{
        padding:0px;
        margin:0px;
        background:#191A1D;
        font-family: 'Karla', sans-serif;
        width:100vw;
     }
     body * {
        margin:0;
        padding:0;
     }
     
     /* HTML Nav Styles */
     /* HTML Nav Styles */
     /* HTML Nav Styles */
     nav menuitem {
        position:relative;
        display:block;
        opacity:0;
        cursor:pointer;
     }
     
     nav menuitem > menu {
        position: absolute;
        pointer-events:none;
     }
     nav > menu { display:flex; }
     
     nav > menu > menuitem { pointer-events: all; opacity:1; }
     menu menuitem a { white-space:nowrap; display:block; }
        
     menuitem:hover > menu {
        pointer-events:initial;
     }
     menuitem:hover > menu > menuitem,
     menu:hover > menuitem{
        opacity:1;
     }
     nav > menu > menuitem menuitem menu {
        transform:translateX(100%);
        top:0; right:0;
     }
     /* User Styles Below Not Required */
     /* User Styles Below Not Required */
     /* User Styles Below Not Required */
     
     nav { 
        margin-top: 40px;
        margin-left: 40px;
     }
     
     nav a {
        background:#75F;
        color:#FFF;
        min-width:190px;
        transition: background 0.5s, color 0.5s, transform 0.5s;
        margin:0px 6px 6px 0px;
        padding:20px 40px;
        box-sizing:border-box;
        border-radius:3px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
        position:relative;
     }
     
     nav a:hover:before {
        content: '';
        top:0;left:0;
        position:absolute;
        background:rgba(0, 0, 0, 0.2);
        width:100%;
        height:100%;
     }
     
     nav > menu > menuitem > a + menu:after{
        content: '';
        position:absolute;
        border:10px solid transparent;
        border-top: 10px solid white;
        left:12px;
        top: -40px;  
     }
     nav menuitem > menu > menuitem > a + menu:after{ 
        content: '';
        position:absolute;
        border:10px solid transparent;
        border-left: 10px solid white;
        top: 20px;
        left:-180px;
        transition: opacity 0.6, transform 0s;
     }
     
     nav > menu > menuitem > menu > menuitem{
        transition: transform 0.6s, opacity 0.6s;
        transform:translateY(150%);
        opacity:0;
     }
     nav > menu > menuitem:hover > menu > menuitem,
     nav > menu > menuitem.hover > menu > menuitem{
        transform:translateY(0%);
        opacity: 1;
     }
     
     menuitem > menu > menuitem > menu > menuitem{
        transition: transform 0.6s, opacity 0.6s;
        transform:translateX(195px) translateY(0%);
        opacity: 0;
     } 
     menuitem > menu > menuitem:hover > menu > menuitem,  
     menuitem > menu > menuitem.hover > menu > menuitem{  
        transform:translateX(0) translateY(0%);
        opacity: 1;
     }
     
</style>

<nav>
    <menu>
        <menuitem id="demo1">
            <a>Inicio</a>
            <menu>
           <menuitem>
              <a>Categorias</a>
              <menu>
                 <menuitem><a>Sanidad</a>
                 <menu>
                 <menuitem>
                 <a href="{{route('index.archivo')}}" style="text-decoration: none;">sanidad</a></menuitem>
                 <menuitem><a href="" style="text-decoration: none;">identificación</a></menuitem>
                 <menuitem><a href="" style="text-decoration: none;">Bioseguridad</a></menuitem>
                </menu></menuitem>
                
                 <menuitem><a>Medicamentos</a> 
                 <menu>
                    <menuitem>
                    <a href="" style="text-decoration: none;">Archivo</a>
                   </menu></menuitem>
                 <menuitem><a>Alimentación</a>
                 <menu>
                    <menuitem>
                    <a href=""style="text-decoration: none;">archivo</a>
                   </menu></menuitem>
                 <menuitem><a>Saneamiento</a>
                 <menu>
                    <menuitem>
                    <a href=""></a>
                   </menu></menuitem>
                 <menuitem><a>Bienestar animal</a> <menu>
                    <menuitem>
                    <a href="">La buena nea</a>
                   </menu></menuitem>
                 <menuitem><a>Personal</a> <menu>
                    <menuitem>
                    <a href="">informacion</a>
                   </menu></menuitem>
                
              </menu>      

              
        
            

    </menu>
</nav>
<script>

    // For the thumbnail demo! :]

var count = 1
setTimeout(demo, 500)
setTimeout(demo, 700)
setTimeout(demo, 900)
setTimeout(reset, 2000)

setTimeout(demo, 2500)
setTimeout(demo, 2750)
setTimeout(demo, 3050)


var mousein = false
function demo() {
   if(mousein) return
   document.getElementById('demo' + count++)
      .classList.toggle('hover')
   
}

function demo2() {
   if(mousein) return
   document.getElementById('demo2')
      .classList.toggle('hover')
}

function reset() {
   count = 1
   var hovers = document.querySelectorAll('.hover')
   for(var i = 0; i < hovers.length; i++ ) {
      hovers[i].classList.remove('hover')
   }
}

document.addEventListener('mouseover', function() {
   mousein = true
   reset()
})
</script>