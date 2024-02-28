@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-md-12 ">

            <h1 style="font-size:55px;color: #1ec4bd;font-weight: bold;padding:3.5rem 0 2rem;">Verificação de CV
            </h1>
        </div>

    </div>

    
    
    




    

    <!-- <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1> -->
    
    
    @livewire('c-vverify')
    


</div>

<style>


    .btn-notvalid::before, .btn-notvalid::after {
    
      background: #E4350F;
    
    }
    
    .btn-valid::before, .btn-valid::after  {
      background: #4CBB17;
      
    }
</style>
    


@endsection