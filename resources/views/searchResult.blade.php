@extends('layouts.userLayout')

@section('title', 'Risultati')

@section('content')
    <br>
    <br>
    <p class="titolo">I risultati della tua ricerca:</p>
    <br>
    <br>
    <div style="text-align: center; font-size: 18px">
   
        @isset($users)

            @if(count($users)== 0)
                <div>
                    <p class="sotto-titolo">Nessun utente corrisponde alle tue specifiche</p>
                </div>
            @endif

            @foreach($users as $user)
                <div class="contenitore_utenti_cercati">
                    <p>Nome: {{$user->name}}</p><br>
                    <p>Cognome: {{$user->surname}}</p><br>
                    @can('utenteVisibile',$user->id)
                        <p>Email: {{$user->email}}</p><br>
                        <p>Username: {{$user->username}}</p><br>
                        <p>Data di nascita: {{$user->data_nascita}}</p><br>
                    @else
                        <p>Account privato</p>
                        @can('isFriend',$user->id)
                            <p>Email: {{$user->email}}</p><br>
                            <p>Username: {{$user->username}}</p><br>
                            <p>Data di nascita: {{$user->data_nascita}}</p><br>
                            <p style="text-align: center; font-size: 20px; color: black">Siete amici<br>
                            <br>
                            <a href="{{ route('visualizzaProfilo', [$user->id])}}">
                                <button class="bottone_conferma">Visualizza profilo ►</button></a></p><br>
                        @else
                            <p>Non siete amici</p><br>
                            <a href="{{ route('inviaAmicizia',$user->id) }}" title="richiesta">
                            <button class="bottone_conferma">Invia richiesta ►</button></a>
                    @endcan('isFriend')
                    @endcan()
                    <br>
                    <br>
                </div>
                <br>         
            @endforeach
        @endisset()
        
        
    </div>
@endsection