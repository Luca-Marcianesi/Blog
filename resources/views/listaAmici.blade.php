@extends('layouts.userLayout')

@section('title', 'I Miei Amici')

@section('content')
<br>
<div style="text-align: center; font-size: 18px">
    <p class="titolo">Questa è la lista delle tue amicizie</p>
    <br>
    <br>
    @isset($amici)
    @if(count($amici)===0)
    <br>
    <p class="sotto-titolo">Attualmente la tua lista amici è vuota</p>
    @else
    @foreach($amici as $amico)
    <div class="contenitoreamici">
        <p class="sotto-titolo">Nome: {{$amico->name}}<br> Cognome: {{$amico->surname}}</p>
        <br>
        <p style="text-align: center; color: black; font-size: 20px">L'amicizia è stata chiesta il {{$amico->data}}</p>
        <br>
        <div><a href="{{ route('visualizzaProfilo',[$amico->user_id]) }}"><button class="bottone_conferma">Visualizza Profilo ►</button></a></div>
        <div><button class="bottone_conferma" onclick="togglePopupEliminaAmico()">Elimina Amicizia ►</button></div>
        <br>    
    </div>
    <br>
    <br>

    <div id="elimina-amico" class="popup">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopupEliminaAmico()">&times;</div>
            <br>
            <h2>Conferma</h1>
            <br>
            <div style="text-align: center; font-size: large">
                Sei sicuro di voler eliminare "{{$amico->name}} {{$amico->surname}}" dai tuoi amici?"
            </div>
            <br> <br>
            <div>
                <a href="{{ route('eliminaAmico',[$amico->amicizia_id,$amico->user_id]) }}"><button class="bottone_conferma">Si</button></a>
                <button class="bottone_conferma" style="cursor: pointer" onclick="togglePopupEliminaAmico()">Annulla</button>
            </div>
        </div>  
    </div>











    @endforeach

    @include('pagination.paginator', ['paginator' => $amici])
    @endif
    @endisset()     
   
    <hr class="spaziaturahr">
    <p class="titolo">Amicizie rifiutate:</p>

    @isset($rifiutate)
    @if(count($rifiutate)===0)
    <div class="main_element">
        <p class="sotto-titolo">Nessuna richiesta rifiutata</p>
    </div>
    @else
    @foreach($rifiutate as $rifiutata)
    <div class="main_element">
        <p class="sotto-titolo">{{$rifiutata->name}} {{$rifiutata->surname}}</p>    
    </div>     
    @endforeach
    @endif
    @endisset()
    
    
</div>
@endsection