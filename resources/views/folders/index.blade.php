@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-6">
      <div class="btn-group">


      </div>
    </div>
  <br>
  <div class="row">
      <div class="col-md-12">
      <div class="card card-line-primary">
        <div class="card-header  ">
          <h5>Listado De Folder De Los Clientes Del Abogados </h5>

        </div>
         <!-- /.card-header -->
            <div class="card-body table-responsive">
                <a class="btn btn-primary"  href="{{ route('teams.create') }}" role="button">
                    REGISTRAR
                  </a>
                <br>
                <!-- tablas--->
                <table id="folder" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($folders as $folder )
                        <tr>

                                 <td> {{$folder->id}}</td>
                                 <td> {{$folder->nombre}}</td>


                                 <td>

                                    <a  href="{{ route('folders.show', [ $folder->id]) }}">
                                        <img src="{{asset('img/ver.png')}}" alt="ver"  height="40px" width="40px">
                                    </a>

                                    <a href="{{ route('folders.edit', [ $folder->id]) }}">
                                         <img src="{{asset('img/edit.png')}}" alt="editar" height="40px" width="40px">
                                        </a>

                                    <a href="{{ route('folders.destroy', [ $folder->id]) }}">
                                        <img src="{{asset('img/borrar.png')}}" alt="borrar"  height="40px" width="40px">
                                    </a>

                                </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
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

<script>

    $(document).ready(function() {
          $('#folder').DataTable();
  } );
</script>
@endsection
