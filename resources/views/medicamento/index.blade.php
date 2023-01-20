<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet"> 
    
    
    <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     
        <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
     
        <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
        </script>
    
    
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>medicamento</title>
</head>
<body>
    


    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <a class="btn btn-success" href="{{route('create.medicamento')}}">Crear Medicamento</a>
                        <a class="btn btn-success"  href="{{route('welcome')}}" style="position: relative;  left:1280px ; " >Inicio</a> 
                        <p class="card-text">
                            <div class="author table-responsive">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="medicamento">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                   
                                                <th scope="col">Nombre del medicamento</th>
                                                <th scope="col">Dosis del medicamento</th>
                                                <th scope="col">Medio de administración</th>
                                                <th scope="col">Unidad de medida</th>
                                                <th scope="col">Fecha de caducidad</th>
                                               
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($medicamento as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->nombre_medic}}</td>
                                                    <td>{{$info->dosis_medic}}</td>
                                                    <td>{{$info->medio_admin}}</td>
                                                    <td>{{$info->unidad_medi}}</td>
                                                    <td>{{$info->fecha_cadu}}</td>
                                                   
                                                    <td class="td-actions text-center">

                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                    <a href="{{ route('medicamento.edit', $info->id) }}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>

                                                                    <form action="{{route('destroy.medicamento',$info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                            <i class="material-icons">
                                                                                delete
                                                                            </i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </a>
                                                        </div>

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
    $('#medicamento').DataTable({
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



 




   

    


