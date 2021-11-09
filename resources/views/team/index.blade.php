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
          <h5>Listado De Grupos</h5>

        </div>
         <!-- /.card-header -->
            <div class="card-body table-responsive">
                <a class="btn btn-primary"  href="{{ route('teams.create') }}" role="button">
                    REGISTRAR
                  </a>
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
                        @foreach ($teams as $team )
                        <tr>

                                 <td> {{$team->id}}</td>
                                 <td> {{$team->nombre}}</td>


                                 <td>

                                    <a  href="{{ route('teams.show', [ $team->id]) }}">
                                        <img src="{{asset('img/ver.png')}}" alt="ver"  height="40px" width="40px">
                                    </a>

                                    <a  href="{{ route('carpetas.ver', [$team->id])}}">
                                        <img src="{{asset('img/ver.png')}}" alt="ver"  height="40px" width="40px">
                                    </a>

                                    <a href="{{ route('teams.edit', [ $team->id]) }}">
                                         <img src="{{asset('img/edit.png')}}" alt="editar" height="40px" width="40px">
                                        </a>

                                    <a href="{{ route('teams.destroy', [ $team->id]) }}">
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
@endsection
