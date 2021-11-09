
@extends('layouts.app')
@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$perfil->nombre}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Perfil De Usuarios</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" placeholder="first name" value="{{$perfil->nombre}}"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Numero movil</label><input type="text" class="form-control" placeholder="enter phone number" value="{{$perfil->telefono}}"></div>
                    <div class="col-md-12"><label class="labels">Dirreccion</label><input type="text" class="form-control" placeholder="enter address line 1" value="{{$perfil->dirrecion}}"></div>
                    <div class="col-md-12"><label class="labels">Carrera</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{$perfil->carrera}}"></div>
                    <div class="col-md-12"><label class="labels">Fecha De Nacimiento</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{$perfil->fecha_nacimiento}}"></div>
                    <div class="col-md-12"><label class="labels">Carnet</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{$perfil->carnet}}"></div>
                    <div class="col-md-12"><label class="labels">Correo</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{auth()->user()->email}}"></div>
                     </div>
              </div>
        </div>

    </div>
</div>
</div>
</div>
@endsection
