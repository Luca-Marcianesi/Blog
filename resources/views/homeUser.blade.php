@extends('layouts.userLayout')

@section('title', 'Home User')

@section('content')
<hr class="spaziaturahr">
<div> 
    @isset($notifiche)
        <div style="text-align: center">
            <button type="button" class="icon-button">
                <a href="{{ route('notifiche') }}"><span class="material-icons">notifications</span></a>
                <span class="icon-button__badge">{{$notifiche}}</span>
            </button>
        </div>
        @endisset()
    <section>
        <p class="titolo">Questa è la pagina home della tua area riservata!</p>


       
        <p class="sotto-titolo">In questa pagina puoi ricercare i tuoi amici <br>
            e, attraverso la barra in alto, usufruire di tutte le funzionalità dedicate a te!</p>
        <br>
        <br>
        <p class="cosa-fare">Cerca i tuoi amici!</p>
        <br>
        <div style="text-align: center">
            {{ Form::open(array('route' => 'searchFriends')) }}
            
             <div>
                {{ Form::label('name', 'Nome', ['class' => 'label-form']) }}
                <br>
                {{ Form::text('name', '', ['class' => '','id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <div>
                {{ Form::label('surname', 'Cognome', ['class' => 'label-form']) }}
                <br>
                {{ Form::text('surname', '', ['class' => '','id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <br>
            <div style="font-size: 18px">                
                {{ Form::submit('Cerca ►', ['class' => 'bottone_conferma', 'title' => 'Cerca i tuoi amici o persone di tuo interesse iscritte al sito']) }}
            </div>
            {{ Form::close() }}
        </div>
    </section>
</div>
@endsection
