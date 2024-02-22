@extends('layouts.app2')


@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-6 col-md-12 text-center">

                <h1 style="font-size:1.7rem;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Sorteio</h1>
            </div>
        </div>
        <!-- <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1> -->

        <div class="row">
            @foreach ($checkinconf as $checkinconfs)


            <div class="col-md-3">
                <h4>{{$checkinconfs->user->name}}</h4>
            </div>
            @endforeach
        </div>

    </div>
@endsection
