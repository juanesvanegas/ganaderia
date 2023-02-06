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
    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action=" {{ route('enfermedad.update', $enfermedade) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <center><h2><b>Actualizar información</b></h2></center>  <br>
                            <div class="row">

                                <div class="col-md-6 col-12 ">
                                    <label>Animal</label>
                                    <br>
                                    <select class="form-select" name="animal" id="my-select" required="required">
                                        @foreach ($lista_animales as $item)
                                            <option value="{{$item->id}}">{{$item->identificador}} </option>
                                        @endforeach
                                    </select>
                                    
                                    
                                </div>

                                <div class="col-md-6 col-12">
                                    <label>Tipo de enfermedad </label>
                                    <input class="form-control mb-4" type="text" name="tipo"   value="{{ old('tipo', $enfermedade->tipo_enfermedad) }}">
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Diagnostico</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tipo_diagnostico" >{{old('tipo_diagnostico',$enfermedade->tipo_diagnostico)}}</textarea>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Muerte</label>
                                    <input class="form-control mb-4" type="text" name="muerte" value="{{old('muerte',$enfermedade->muerte)}}">
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Soporte</label>
                                    <input class="form-control mb-4" type="text" name="soporte" value="{{old('soporte',$enfermedade->soporte)}}">
                                </div>
                                  <div class="col-md-6 col-12">
                                    <label>Fecha de inicio</label>
                                    <input class="form-control mb-4" type="date" name="fecha_inicio" value="{{old('fecha_inicio',$enfermedade->fecha_inicio) }}">
                                </div>
                              
                               
                                <div class="d-flex justify-content-center col-12 ">
                                    <button class="btn btn-success" type="submit">Registrar</button>
                                </div>
                            </div>
                            
                        </form>
                        
                    </div>   
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>