@extends('layouts.public')

@section('title', 'Registrati')

@section('content')
  
<p class="titolo">Non sei ancora registrato?</p>
<br>
<p class="sotto-titolo">Registrati subito per connetterti con i tuoi amici e cominciare a dire la tua opinione!</p>
    <hr class="spaziaturahr">

    {{ Form::open(array('route' => 'register')) }}

<div>

    <div style="width: 600px; height: 750px; float: right; margin-left: 8%">
        <img style="height: 250px" src="css/images/discussion.gif"></img><br>
        <img style="height: 250px" src="css/images/discussion.gif"></img><br>
        <img style="height: 250px" src="css/images/discussion.gif"></img><br>
    </div>

    <div class="contenitoreRegistrati" style="text-align:center">
        <p class="titolo">Registrati</p>

        <br>
        <br>
        
        {{ Form::label('name', 'Nome', ['class' => 'label-form']) }}
        <br>
        {{ Form::text('name', '', ['placeholder' => 'Inserisci nome', 'maxlength' => 15], ['id' => 'name']) }}
        @if ($errors->first('name'))
        <ul class="errors">
            @foreach ($errors->get('name') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        {{ Form::label('surname', 'Cognome', ['class' => 'label-form']) }}
        <br>
        {{ Form::text('surname', '', ['placeholder' => 'Inserisci cognome', 'maxlength' => 15], ['id' => 'surname']) }}
        @if ($errors->first('surname'))
        <ul class="errors">
            @foreach ($errors->get('surname') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        {{ Form::label('data_nascita', 'Data di nascita', ['class' => 'label-form']) }}
        <br>
        {{ Form::date('data_nascita', '', ['id' => 'data_nascita']) }}
        @if ($errors->first('data_nascita'))
        <ul class="errors">
            @foreach ($errors->get('data_nascita') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        
        {{ Form::label('username', 'Username', ['class' => 'label-form']) }}
        <br>
        {{ Form::text('username', '', ['placeholder' => 'Inserisci username', 'maxlength' => 15], ['id' => 'username']) }}
        @if ($errors->first('username'))
        <ul class="errors">
            @foreach ($errors->get('username') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        {{ Form::label('email', 'Email', ['class' => 'label-form']) }}
        <br>
        {{ Form::text('email', '', ['placeholder' => 'Inserisci e-mail', 'maxlength' => 30, 'size' => 40], ['id' => 'email']) }}
        @if ($errors->first('email'))
        <ul class="errors">
            @foreach ($errors->get('email') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <hr style="border: none; height: 30px; width: 50%; color: none; background-color: none"></hr>

        {{ Form::label('descrizione', 'Chi sei?', ['class' => 'label-form']) }}
        <br>
        {{ Form::textarea('descrizione', '',  ['class' => 'descrizioneparam', 'placeholder' => 'Inserisci delle informazioni su di te', 'maxlength' => 300, 'id' => 'descrizione']) }}
        @if ($errors->first('descrizione'))
        <ul class="errors">
            @foreach ($errors->get('descrizione') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif

        <br>
        <br>

        {{ Form::label('password', 'Password', ['class' => 'label-form']) }}
        <br>
        {{ Form::password('password', ['placeholder' => 'Inserisci password', 'maxlength' => 15], ['id' => 'password']) }}
        @if ($errors->first('password'))
        <ul class="errors">
            @foreach ($errors->get('password') as $message)
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
        
        {{ Form::submit('Registrati ►', ['class' => 'bottone_conferma']) }}
        
    </div>
</div>
    {{ Form::close() }}
@endsection

