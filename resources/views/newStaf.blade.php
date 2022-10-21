@extends('layouts.adminLayout')

@section('title', 'Staf')

@section('content')

<br>
<br>

<p class="titolo">In questa pagina hai la possibilità di aggiungere nuovi membri allo staff del sito!</p>
<br>
<br>

<div style="width: 400px; height: 550px; margin-left: 36%" class="contenitoreModificaAggiungiStaff">
        
        {{ Form::open(array('route' => 'creaStaf')) }}

        {{ Form::label('name', 'Nome', ['class' => '']) }}<br>
        {{ Form::text('name', '', ['placeholder' => 'Inserisci nome', 'maxlength' => 15, 'class' => '','id' => 'name']) }}
        @if ($errors->first('name'))
        <ul class="errors">
            @foreach ($errors->get('name') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
        
        <br>
        <br>

        {{ Form::label('surname', 'Cognome', ['class' => '']) }}<br>
        {{ Form::text('surname', '', ['placeholder' => 'Inserisci cognome', 'maxlength' => 15, 'class' => '','id' => 'surname']) }}
        @if ($errors->first('surname'))
        <ul class="errors">
            @foreach ($errors->get('surname') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif
            
        <br>
        <br>

        {{ Form::label('email', 'Email', ['class' => '']) }}<br>
        {{ Form::text('email', '', ['placeholder' => 'Inserisci e-mail', 'maxlength' => 30, 'size' => 40, 'class' => '','id' => 'email']) }}
        @if ($errors->first('email'))
        <ul class="errors">
            @foreach ($errors->get('email') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        {{ Form::label('usernameStaf', 'Username', ['class' => '']) }}<br>
        {{ Form::text('usernameStaf', '', ['placeholder' => 'Inserisci username', 'maxlength' => 15, 'class' => '','id' => 'usernameStaf']) }}
        @if ($errors->first('usernameStaf'))
        <ul class="errors">
            @foreach ($errors->get('usernameStaf') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        {{ Form::label('data_nascita', 'Data di nascita') }}
        <br>
        {{ Form::date('data_nascita', '', ['class' => 'input','id' => 'data_nascita']) }}
        @if ($errors->first('data_nascita'))
            <ul class="errors">
                @foreach ($errors->get('data_nascita') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
                    
        <br>
        <br>

        {{ Form::label('passwordStaf', 'Inserisci la password') }}
        <br>
        {{ Form::password('passwordStaf', ['placeholder' => 'Inserisci password', 'maxlength' => 15, 'id' => 'passwordStaf']) }}
        @if ($errors->first('passwordStaf'))
            <ul class="errors">
            @foreach ($errors->get('passwordStaf') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
        
        <br>
        <br>

        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-form']) }}<br>
        {{ Form::password('password_confirmation', ['placeholder' => 'Immetti nuovamente', 'maxlength' => 15], ['id' => 'password-confirm']) }}

        <br>
        <br>

        {{ Form::submit('Aggiungi', ['class' => 'bottone_conferma']) }}

    {{ Form::close() }}

</div>

@endsection