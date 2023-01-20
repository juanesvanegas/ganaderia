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

                        <form action="{{route('store.medicamento')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center><h2><b>Registrar medicamento</b></h2></center>  <br>
                            <div class="row">

                                <div class="col-lg-6 col-12">

                                   
                                        <span>Nombre del Medicamento</span>
                                        <input class="form-control" type="text" name="nombre_medic" value="{{old('nombre_medic')}}" required="required">
                                </div>

                                <div class="col-lg-6 col-12">
                                      <span>Dosis del Medicamento</span>
                                     <input class="form-control mb-4" type="text" name="dosis_medic" value="{{old('dosis_medic')}}" required="required">
                                        
                                </div>


                                <div class="col-lg-6 col-12">

                                    
                                        <span>Medio de administración</span>
                                        <input class="form-control mb-4" type="text" name="medio_admin" value="{{old('medio_admin')}}" required="required">
                                        
                                </div>
                                <div class="col-lg-6 col-12">
                              
                                    <span>Fecha de Caducidad</span>
                                    <input class="form-control mb-4" type="date" name="fecha_cadu" value="{{old('fecha_cadu')}}" required="required">
                                  
                               
                                  </div>

                            <div class="col-lg-6 col-12">
                                <span>Unidad de Medida</span>
                                <select class="form-select mb-4" name="unidad_medi" id="my-select" value="{{old('unidad_medi')}}" required="required">

                                    <option value="">seleccione</option>
                                    <option value="Miligramos">Miligramos (MG)</option>
                                    <option value="Gramos">Gramos (GR)</option>
                                    <option value="Gota">Gota (GOT)</option>
                                    <option value="Mililitros">Mililitros (ML)</option>
                                    <option value="Kilogramos">Kilogramos (KG)</option>
                                    <option value="Centimetro cubico">Centimetros cubicos (C.C)</option>

                                </select>
                            </div>


                            </div><br>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-center boton">
                                        <button class="btn btn-success" type="submit">Insertar</button>
                                    </div>
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