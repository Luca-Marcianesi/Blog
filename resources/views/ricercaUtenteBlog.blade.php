@extends('layouts.gestoreLayout')

@section('title', 'Ricerca')
@section('content')
<hr class="spaziaturahr">
<div style="text-align: center; font-size: large">
    <p class="titolo">In questa pagina, hai la possibilità di cercare le attività degli utenti <br>
    registrati oppure i blog che sono stati creati!</p>
    <hr class="spaziaturahr">

    {{ Form::open(array('route' => ['attivitaUtente'], 'method' => 'get')) }}

    <div  class="wrap-input">
        {{ Form::label('idUtente', 'Id utente') }}
        <br>
        {{ Form::number('idUtente','', ['placeholder' => 'Inserisci Id utente', 'class' => 'input','id' => 'idUtente']) }}
        @if ($errors->first('idUtente'))
        <ul class="errors">
            @foreach ($errors->get('idUtente') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <br>
    <div class="container-form-btn">                
        {{ Form::submit('Cerca Utente ►', ['class' => 'bottone_conferma']) }}
    </div>
    
    {{ Form::close() }}
    <hr class="spaziaturahr">

    {{ Form::open(array('route' => ['cercaBlog'], 'method' => 'get')) }}

    <div  class="wrap-input">
        {{ Form::label('idBlog', 'Id blog') }}
        <br>
        {{ Form::number('idBlog','', ['placeholder' => 'Inserisci id blog'], ['class' => 'input','id' => 'idBlog']) }}
        @if ($errors->first('idBlog'))
        <ul class="errors">
            @foreach ($errors->get('idBlog') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <br>
    <div class="container-form-btn">                
        {{ Form::submit('Cerca Blog ►', ['class' => 'bottone_conferma']) }}
    </div>

    
    {{ Form::close() }}
</div>
@endsection