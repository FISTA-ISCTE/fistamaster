@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))


@section('content')
    @php
        use App\User;
        $outubro= User::whereMonth('created_at',10)->count(); 
        $novembro= User::whereMonth('created_at',11)->count(); 
        $n=$outubro+$novembro;
        $dezembro = User::whereMonth('created_at',12)->count(); 
        $d=$n+$dezembro;
        $janeiro = User::whereMonth('created_at',1)->count();
        $j= $janeiro+$d; 
        $fevereiro = User::whereMonth('created_at',2)->count();
        $f=$fevereiro+$j; 
        $março = User::whereMonth('created_at',3)->count();  
        $m=$março+$f
    @endphp


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <div class="page-content browse container-fluid">
    <canvas style="margin-bottom:150px;margin-top:200px;height:300px;" id="myChart" width="400" height="200"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Outubro', 'Novembro', 'Dezembro', 'Janeiro', 'Fevereiro', 'Março'],
        datasets: [{
            label: 'Users inscritos',
            data: [{{$outubro}}, {{$n}}, {{$d}}, {{$j}}, {{$f}}, {{$m}}],
            borderColor: "#79BB4A",
            fill: true
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
            display: true,
            text: 'Incrições Users'
        }
    }
});
</script>

@php

$userLEI=User::where('id_curso','1')->get();
$userIGE=User::where('id_curso','2')->get();
$userETI=User::where('id_curso','3')->get();
$userCD=User::where('id_curso','4')->get();
$userARQ=User::where('id_curso','5')->get();
$userEsc=User::where('id_curso','7')->get();
$userProf=User::where('id_curso','8')->get();
$userAlumni=User::where('id_curso','9')->get();
$userOutro=User::where('id_curso','10')->get();
$userND=User::where('id_curso','11')->get();

$LEI=count($userLEI);
$IGE=count($userIGE); 
$ETI=count($userETI);
$CD=count($userCD);
$ARQ=count($userARQ);
$Esc=count($userEsc);
$Prof=count($userProf);
$Alumni=count($userAlumni);
$Outro=count($userOutro);
$ND=count($userND);

$total=$LEI+$IGE+$ETI+$CD+$ARQ+$Esc+$Prof+$Alumni+$Outro+$ND;

@endphp
<div class="container" style="padding-top:30px;">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Cursos</th>
      <th scope="col">Number</th>
     
    </tr>
  </thead>
  <tbody>

    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Engenharia Informática(LEI)</th>
      <td>{{$LEI}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Informática e Gestão de Empresas(IGE)</th>
      <td>{{$IGE}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Engenharia de telecomunicação e informática(ETI)</th>
      <td>{{$ETI}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Ciencia de dados(CD)</th>
      <td>{{$CD}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Arquitetura(ARQ)</th>
      <td>{{$ARQ}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Escola Secundária</th>
      <td>{{$Esc}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Professor</th>
      <td>{{$Prof}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Alumni</th>
      <td>{{$Alumni}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Outro</th>
      <td>{{$Outro}}</td>
    </tr>
    <tr style="font-size:20px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Não Docente</th>
      <td>{{$ND}}</td>
    </tr>
    <tr style="font-size:30px;color:#7EBC4D;font-weight:bold;">
      <th scope="row">Total:</th>
      <td>{{$total}}</td>
    </tr>
  </tbody>
</table>

</div>




@stop
