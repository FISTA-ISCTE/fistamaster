@extends('voyager::master')

@section('post_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

<?php
    use App\Workshop;
    $workshops = Workshop::all();
?>

<div class="container">
    <h2>Registar presenças no workshop</h2>

    <form method="post" action="/checkinWorkshop" style="margin-top:20px" accept-charset="UTF-8" target="gravar">
        @csrf
        <h4>Workshop</h4>
        <select name="workshop" id="workshop">
            <option value="" disabled selected>Escolher Workshop</option>
            @foreach($workshops as $workshop)
                <option value="{{$workshop->id}}">{{$workshop->id}}: {{$workshop->title}}</option>
            @endforeach
        </select>

        <br><br>

        <h4>Token User</h4>
        <input type="text" id="tokenUser" name="tokenUser" placeholder="Introduzir Token">

        <br><br>
        <input type="submit" value="Submit">
    </form>
    <iframe name="gravar" style="display: none;"></iframe>
</div>

@stop