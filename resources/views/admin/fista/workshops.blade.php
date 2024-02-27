@extends('layouts.app2')

@section('content')
<div class="container">
    <h2>Workshops</h2>
    <div class="row">
        @foreach ($workshops as $workshop)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $workshop->name }}</h5>
                        {!! QrCode::size(200)->generate("https://fista.iscte-iul.pt/D1mC7SLPoT6QYF7ruLhftKYpYCMOgS/workshop/" . $workshop->id) !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
