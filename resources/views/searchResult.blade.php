@extends('layouts.userLayout')

@section('title', 'Risultati')

@section('content')
<div>
   

    @isset($users)

    @foreach($users as $user)
    <div class="user" style=" font-size: large; text-align: center">
        <div class="">Nome: {{$user->name}}</div><br>
        <div class="">Cognome: {{$user->surname}}</div><br>
        @can('isFriend',$user->id)
        <div class="">Email: {{$user->email}}</div><br>
        <div class="">Username: {{$user->username}}</div><br>
        <div class="">Data di nascita: {{$user->data_nascita}}</div><br>
        <div class="">Bio: {{$user->descrizione}}</div><br>

        <p>Siete amici<br><br><a class="bottone_conferma" href="{{ route('visualizzaProfilo', [$user->id])}}">Visualizza profilo</a></p>
        @else
        <p>Non siete amici</p>
        <a class="bottone_conferma" href="{{ route('sedRequest',$user->id) }}" title="richiesta">Invia richiesta</a>
        @endcan()
    </div>         
    @endforeach

    @endisset()
    
    
</div>
@endsection