@extends('layouts.app')
@section('content')
<div class="container py-3">
    @if (session('status'))

    <div class="alert alert-Success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            <h6 >{{session('status')}}</h6>
        </div>
      </div>
    @endif
    <div class="row">
        <div class="mx-auto col-sm-6">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Editar Nombre De La Carpeta</h4>
                </div>
                <div class="card-body">
        <form method="POST" action="{{ route('teams.update', [$team->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Nombre Carpeta</label>
                <div class="col-lg-9">
                    <input class="form-control" id="nombre" type="text" class="validate" name="nombre" value="{{$folder->nombre}}" required>
                </div>
                <br>
                @error('nombre')
                <span style="color:red">{{ $message }} </span>
                @enderror
            </div>



            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="submit" class="btn btn-primary"  onclick="showProgress()" value="Registrar">
                    <input type="reset" class="btn btn-secondary" value="Limpar">
                </div>
            </div>

        </form>

        <a href="{{ route('folders.index') }}" class="btn btn-primary">Atras</a>

    </div>
</div>
<!-- /form user info -->
</div>
</div>
</div>

@endsection
