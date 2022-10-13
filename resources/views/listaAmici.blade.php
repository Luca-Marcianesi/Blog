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
                <p class="sotto-titolo">Attualmente la tua lista amici è vuota</p>
            @else
                @foreach($amici as $amico)
                    <div class="contenitoreamici">
                        <p>Nome: {{$amico->name}}<br> Cognome: {{$amico->surname}}</p>
                        <br>
                        <p>L'amicizia è stata chiesta il {{$amico->data}}</p>
                        <br>
                        <a href="{{ route('getAmico',[$amico->user_id, $amico->amicizia_id]) }}" >Profilo</a>
                    
                        <br>    
                    </div>
                    <br>
                    <br>

                @endforeach

                @include('pagination.paginator', ['paginator' => $amici])
            @endif()
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
            @endif()
        @endisset()
        
        
    </div>
@endsection