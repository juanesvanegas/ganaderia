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
                    <form action="{{route('update.categoria',$categoria->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <center><h2><b>Actualizar información</b></h2></center>  <br>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>Referencia iconografica</label>
                                <input class="form-control mb-4" type="file" name="img">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Nombre de la categoria</label>
                                <input class="form-control" type="text" name="nombre_cat" value="{{old('nombre_cat',$categoria->nombre_cat)}}">
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
</body>
</html>