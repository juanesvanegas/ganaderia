<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">



  

    <title>Index animales</title>
</head>
<body>
<div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author">
                               <a class="btn btn-success" href="{{route('create.animal')}}">Registrar animal</a>
                               <a class="btn btn-success"  href="{{route('welcome')}}" style="position: relative;  left:1280px ; " >Inicio</a> 
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="animal">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Identificador</th>
                                                <th scope="col">Tipo de animal </th>
                                                <th scope="col">Raza </th>
                                                <th scope="col">Peso </th>
                                                <th scope="col">Unidad de medida</th>
                                                <th scope="col">Fecha de nacimiento o adquisición              </th> 
                                                <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach ($animal as $info)
                                            <tr style="text-align: center">
                                                <td>{{$info->identificador}}</td>
                                                <td>{{$info->tipo_animal}}</td>
                                                <td>{{$info->raza}}</td>
                                                <td>{{$info->peso}}</td>
                                                <td>{{$info->unidad_medida}}</td>
                                                <td>{{$info->fecha_nacimiento}}</td>
                                               <td class="td-actions text-center">

                                                     {{-- <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa-solid fa-bars"></i>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">  --}}

                                                                <a href="{{route('animal.edit',$info->id)}}" class="btn btn-outline-warning"><i class=" material-icons ">edit</i></a>

                                                                <form action="{{route('destroy.animal',$info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
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
                                                    </div>  --}}

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
    $('#animal').DataTable({
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