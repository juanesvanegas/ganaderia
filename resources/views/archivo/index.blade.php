
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>

        nav {
            margin: 27px auto 0;
        
            position: relative;
            width: 590px;
            height: 50px;
            background-color: #ffffff;
            border-radius: 8px;
            font-size: 0;
        }
        nav a {
            line-height: 50px;
            height: 100%;
            font-size: 15px;
            display: inline-block;
            position: relative;
            z-index: 1;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
            color: rgb(7, 7, 7);
            cursor: pointer;
        }
        nav .animation {
            position: absolute;
            height: 100%;
            top: 0;
            z-index: 0;
            transition: all .5s ease 0s;
            border-radius: 8px;
        }
        a:nth-child(1) {
            width: 130px;
        }
        a:nth-child(2) {
            width: 120px;
        }
        a:nth-child(3) {
            width: 180px;
        }
        a:nth-child(4) {
            width: 160px;
        }
        a:nth-child(5) {
            width: 120px;
        }
        nav .start-home, a:nth-child(1):hover~.animation {
            width: 120px;
            left: 0;
            background-color: #1abc9c;
        }
        nav .start-about, a:nth-child(2):hover~.animation {
            width: 145px;
            left: 120px;
            background-color: #e74c3c;
        }
        nav .start-blog, a:nth-child(3):hover~.animation {
            width: 140px;
            left: 270px;
            background-color: #34dbc2;
        }
        nav .start-portefolio, a:nth-child(4):hover~.animation {
            width: 130px;
            left: 440px;
            background-color: #9b59b6;
        }
        nav .start-contact, a:nth-child(5):hover~.animation {
            width: 120px;
            left: 470px;
            background-color: #e67e22;
        }
        
        /* body {
            font-size: 12px;
            font-family: sans-serif;
            background: #7e8184;
        } */
        h1 {
            text-align: center;
            margin: 40px 0 40px;
            text-align: center;
            font-size: 30px;
            color: #0d0d0d;
            text-shadow: 2px 2px 4px #060505;
            font-family: 'Cherry Swash', cursive;
        }
        
        p {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #ecf0f1;
            font-family: 'Cherry Swash',cursive;
            font-size: 16px;
        }
        
        span {
            color: #2BD6B4;
        }
    </style>
</head>
<body>

    
<nav>
	<a href="#">Vacunación</a>
	<a href="#">Desparacitación</a>
	<a href="#">Enfermedades</a>
	<a href="#">protocolo</a>
	{{-- <a href="#">Contact</a> --}}
	<div class="animation start-home"></div>
</nav>
<p><h1><b>Plan sanitario</b></h1></p>
    <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="author">
                                  
                                   <a href="{{route('create.archivo')}}" class="btn btn-outline-success">Agregar Archivo<i class="material-icons">add</i></a>
                                   <a class="btn btn-success"  href="{{route('welcome')}}" style="position: relative;  left:1200px ; " >Inicio</a> 
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped" id="archivo">
                                            <thead class="table-secondary">
                                                <tr style="text-align: center">
                                                    <th scope="col">Archivo</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                @foreach ($archivo as $info)
                                                    <tr style="text-align: center">
                                                        <td><a target="_black" href="{{asset($info->archivo)}}"><img src="{{asset('img/image.png')}}"  height="75" width="75" alt=""></a></td>
                                                        <td>{{$info->categorias->nombre_cat}}</td>
                                                        
                                                        <td class="td-actions text-center">
    
                                                            {{-- <div class="dropdown">
                                                                <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fa-solid fa-bars"></i>
                                                                    <div class="dropdown-menu dropdown-menu-center dropdown-menu-arrow"> --}}
                                                                            <button href="{{route('archivo.edit',$info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></button>
                                                                      
    
                                                                        
    
                                                                        <form action="{{route('destroy.archivo',$info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                                <i class="material-icons">
                                                                                    delete
                                                                                </i>
                                                                            </button>
                                                                        </form>
    
                                                                    {{-- </div>
                                                                </a>
                                                            </div> --}}
    
                                                        </td>                                             
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    
        
    </body>
    </html>
    
    
    <script src="https://kit.fontawesome.com/cf5c5d84ea.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
        $('#archivo').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados - Disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar : ",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                }
    
            }
        });
    } );
    </script>
    
    
    
    
     {{-- alertas --}}
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
     <script> console.log('Hi!'); </script>
    @if (session('eliminar')=='ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'La informacion se elimino correctamente.',
                'success'
            )
        </script>
    @endif 
    
    @if (session('actualizar')=='ok')
        <script>
            Swal.fire(
                '¡Actualizado!',
                'La informacion se actualizo correctamente.',
                'success'
            )
        </script>
    @endif
    
    @if (session('crear')=='ok')
        <script>
            Swal.fire(
                '¡Agregado!',
                'La informacion se creo correctamente.',
                'success'
            )
        </script>
    @endif
    
    <script>
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: '¿Estas seguro?',
                text: "¡Esta informacion se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
    
                
                   
                    this.submit();
    
                }else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelado',
                    '¡La informacion no se elimino!',
                    'error'
                    )
                }
            })
        })
    </script>



