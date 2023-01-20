<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-user">
                <div class="card-body">
                    <form action="{{ route('animal.update', $animal->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <center><h2><b>Editar información</b></h2></center>  <br>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>Identificador</label>
                                <input class="form-control mb-4" type="text" name="identificador"
                                value="{{ old('identificador',$animal->identificador) }}"
                                required="required">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Peso</label>
                                <input class="form-control mb-4" type="number" name="peso" value="{{old('peso', $animal->peso)}}"
                                required="required">
                            </div>
                              <div class="col-md-6 col-12">
                                <label>Tipo animal</label>
                                <input class="form-control mb-4" type="text" name="tipo" value="{{old('tipo_animal',$animal->tipo_animal) }}"
                                required="required">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Raza</label>
                                <input class="form-control mb-4" type="text" name="raza" value="{{old('raza',$animal->raza) }}"
                                required="required">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Fecha de nacimiento o adquisicion</label>
                                <input class="form-control mb-4" type="date" name="fecha" value="{{old('fecha_nacimiento',$animal->fecha_nacimiento)}}"
                                required="required">
                               
                        </div>
                        <div class="d-flex justify-content-center col-12 ">
                            <button class="btn btn-success" type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>