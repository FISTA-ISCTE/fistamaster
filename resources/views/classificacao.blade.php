@extends('layouts.app2')

@section('content')
<section style="background-color:white;width:100%;padding-top:70px;">
    <div class="clearfix" style="margin-top:0%;">
        <div style="padding-top:100px;padding-bottom:20px;">
            <div class="container">
                <div class="row">
                    <div class="" style="margin:auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <img style="height:300px;" src="{{ asset('https://fista.iscte-iul.pt/2023/public/img/FISTAGO23.png') }}" alt="FISTAGO">
                        <h1 style="font-size: 60px; color: #666; margin-bottom: 2rem;">FISTA GO</h1>
                        <div class="hero-btn" data-aos="" data-aos-delay="1000">
                            <a class="btn" href="{{ asset('https://fista.iscte-iul.pt/assets/Regulamento FistaGo.pdf') }}">Regulamento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top:30px; text-align:center">
        <h1 style="text-align:center; margin-bottom: 50px; font-size:40px">Top 5 FISTA GO 2024</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" style="font-size:19px;">Nome</th>
                    <th scope="col" style="font-size:19px;">Pontos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if(!($user->hasRole('admin') || $user->hasRole('user')))
                        @if ($loop->first)
                            <tr style="font-size:19px;color:#1EC4BD;">
                        @else
                            <tr style="font-size:19px;color:black;">
                        @endif
                                <th>{{ $loop->iteration }}</th>
                                <td scope="row">{{ $user->name }}</td>
                                <td><span style="font-weight: bold">{{ $user->pontos . ' pontos' }}</span></td>
                            </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
