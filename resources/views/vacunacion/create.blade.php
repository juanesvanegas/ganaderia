<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{ route('store.vacunacion') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                                <h2><b>Registrar aplicación</b></h2>
                            </center> <br>

                            <div class="row">

                                <div class="col-md-6 col-12 ">
                                    <label>Animal</label>
                                    <br>
                                    <select class="form-select mb-4" name="id_animal" id="my-select"
                                        required="required">
                                        @foreach ($animal as $item)
                                            <option value="{{ $item->id }}">{{ $item->identificador }} </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="col-md-6 col-12 ">
                                    <label>Medicamento</label>
                                    <br>
                                    <select class="form-select mb-4" name="nombre_medic" id="my-select"
                                        required="required">
                                        @foreach ($medicamento as $item)
                                            <option value="{{ $item->id }}">{{ $item->nombre_medic }} </option>
                                        @endforeach
                                    </select>

                                </div>


                                <div class="col-lg-6 col-12">

                                    <span>Medio de administración</span>
                                    <input class="form-control mb-4" type="text" name="medio_admin"
                                        value="{{ old('medio_admin') }}" required="required">

                                </div>


                                <div class="col-lg-6 col-12">

                                    <span>Cantidad usada</span>
                                    <input class="form-control mb-4" type="text" name="cantidad_usada"
                                        value="{{ old('cantidad_usada') }}" required="required">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <span>Unidad de Medida</span>
                                    <select class="form-select mb-4" name="unidad_medi" id="my-select"
                                        value="{{ old('unidad_medi') }}" required="required">

                                        <option value="">seleccione</option>

                                        <option value="Miligramos">Miligramos (MG)</option>
                                        <option value="Gramos">Gramos (GR)</option>
                                        <option value="Gota">Gota (GOT)</option>
                                        <option value="Mililitros">Mililitros (ML)</option>
                                        <option value="Kilogramos">Kilogramos (KG)</option>
                                        <option value="Centimetro cubico">Centimetros cubicos (C.C)</option>

                                    </select>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <span>Fecha de realizacion</span>
                                    <input class="form-control mb-4" type="date" name="fecha_realizacion"
                                        value="{{ old('fecha_realizacion') }}" required="required">

                                </div>

                                <div class="col-md-6 col-12 ">
                                    <label>Usuario</label>
                                    <br>
                                    <select class="form-select mb-4" name="id_usuario" id="my-select"
                                        required="required">
                                        @foreach ($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach
                                    </select>


                                    

                                </div>

                                {{-- <div class="col-md-6 col-12 ">
                                <label>Animal</label>
                                <br>
                                <select class="form-select mb-4" name="id_animal" id="my-select" required="required">
                                    @foreach ($lista_usuarios as $item)
                                        <option value="{{$item->id}}">{{$item->identificador}} </option>
                                    @endforeach
                                </select>
                                
                                
                            </div>  --}}

                                <div class="d-flex justify-content-center col-12 ">

                                    <button class="btn btn-success" type="submit">Insertar</button>
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
