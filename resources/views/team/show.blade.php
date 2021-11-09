@extends('layouts.app')

@section('content')

<div class="container mb-5 ">
    <div class="text-center mb-3"> <span class="text-danger">Our Portfolio</span>
        <h3>Creative Members</h3>
    </div>
    <div class="row g-2 text-center">
       @foreach ($teams as $team )

        <div class="col-md-4">
            <div class="card"> <img src="https://i.imgur.com/4IqYoqv.jpg" class="img-fluid rounded">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="info info-green"> <span class="user-icons"><img src="https://i.imgur.com/BeuqpVv.png" width="30"></span>
                        <div class="user-profile d-flex flex-row">
                            <div class="d-flex flex-column mr-3">
                                    @role('Abogado')
                                    <span class="name">{{$team->name}}</span>
                                    <small class="designation">{{$team->email}}</small>
                                    <small class="designation"> Abogado</small>
                                    @else
                                    <span class="name">{{$team->name}}</span>
                                    <small class="designation">{{$team->email}}</small>
                                    <small class="designation"> Procurador</small>
                                    @endrole

                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       @endforeach


    </div>
</div>
@endsection
