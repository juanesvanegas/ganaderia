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
                    <form action="{{route('archivo.update',$archivo->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <center><h2><b>Actualizar información</b></h2></center>  <br>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>archivo</label>
                                <input class="form-control mb-4" type="file" name="file">
                            </div>

                            <div class="col-md-6 col-12 ">
                                <label>Categoria</label>
                                <br>
                                <select class="form-select" name="categoria" id="my-select" required="required">
                                    @foreach ($lista_categorias as $item)
                                        <option value="{{$item->id}}">{{$item->nombre_cat}} :  <img src="<?php echo asset($item->img)?>" height="250" width="250"></option>
                                    @endforeach
                                </select>
                                
                                {{-- <img src="{{asset($item->img)}}" height="250" width="250"> --}}
                            </div>
                           
                            <div class="d-flex justify-content-center col-12 ">
                                <button class="btn btn-success" type="submit">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>