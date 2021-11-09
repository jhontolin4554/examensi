@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-md-6">
      <div class="btn-group">

        <a class="btn btn-primary"  href="{{ route('imagen.create',[$id]) }}" role="button">
            Subir Archivo
          </a>
      </div>
    </div>
  <br>
  <div class="row">
      <div class="col-md-12">
      <div class="card card-line-primary">
        <div class="card-header  ">
          <h5>Listado De Archivo Del Folder</h5>

        </div>
         <!-- /.card-header -->
            <div class="card-body table-responsive">

                <br>
                <!-- tablas--->
                <table id="team" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expedientes as $expediente )
                        <tr>

                                 <td> {{$expediente->id}}</td>
                                 <td> {{$expediente->nombre}}</td>

                            <td>

                                <a href="{{ route('download.getDownload',[$expediente->nombre])}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download </a>
                                <a href="{{ route('eliminar.destroy',[$expediente->id])}}" class="btn btn-large pull-right btn-danger"> Borrar </a>

                            </td>


                        </tr>
                        @endforeach
                        <tr>
                        </tr>
                        @foreach ($imagenes as $imagene )
                        <tr>

                                 <td> {{$imagene->id}}</td>
                                 <td> {{$imagene->nombre}}</td>

                                 <td>  <a href="{{ route('download.getDownload',[$imagene->url])}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download </a>
                                    <a href="{{ route('eliminarimagen.destroy',[$imagene->id])}}" class="btn btn-large pull-right btn-danger"> Borrar </a>

                                </td>



                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>

                        </tr>
                    </tfoot>
                </table>

                <!-- fin tablas --->

            </div>
            <!-- /.card-body -->
        </div>
    </div>

  </div>

</div>
@endsection
