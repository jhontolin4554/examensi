@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row height d-flex justify-content-center align-items-center">
        <h1>Buscar Expedientes Judiciales</h1>
        <br>
        <div class="col-md-8">

            <form class="form"  autocomplete="on" method="POST" action="{{ route('expedientes.store') }}">
                @csrf

            <div class="search"> <i class="fa fa-search"></i>
                <input type="text" class="form-control" name="expediente" id="expediente" placeholder="Nombre del expediente" required>
                <br>

                <button class="btn btn-primary">Search</button>

            </div>
            </form>





        </div>
    </div>


    <table id="expediente" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($expedientes as $expediente )
            <th >{{$expediente->id}}</th>
            <td>{{$expediente->nombre}}</td>
            <td>
                <a href="{{ route('expedientes.edit', [ $expediente->id]) }}">
                    <img src="{{asset('img/edit.png')}}" alt="editar" height="40px" width="40px">
                   </a>
            </td>
            <tr>
            @endforeach

        </tbody>

    </table>


    @foreach ($expedientes as $expediente )
              <iframe class="embed-responsive-item" src="{{asset('storage/'.$expediente->nombre)}}" alt="no 401" width="500px" height="600px"></iframe>
              @endforeach
</div>
<script>

    $(document).ready(function() {
          $('#expediente').DataTable();
  } );
</script>
@endsection
