@extends('layouts.app2')

@section('content')
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow" style="margin-top:6rem; border:0rem;">
                <div class="card-body text-center">
                    <h4 class="card-title mb-4">Recebeu um email de confirmação do registo.</h4>
                    <i class="fas fa-check-circle text-success" style="font-size: 7rem;"></i>
                    <h3 class="card-text mt-4">Registo foi feito com sucesso!</h3>
                    <h5 class="card-text">A equipa do FISTA vai validar o registo.</h5>
                    <p class="card-text font-italic">Prometemos ser rápidos!</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
