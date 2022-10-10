@extends('layouts.adminLayout')

@section('title', 'Statistiche Specifiche ')

@section('content')
<hr class="spaziaturahr">
<div style="text-align: center; font-size: large">

    @isset($utente)
    @isset($amicizie)

    Le richieste ricevute da {{$utente->name}} {{$utente->surname}} [{{$utente->username}}]

    @foreach($amicizie as $amicizia)
    <div class="main_element">
        <div >Nome: {{$amicizia->richiedente}} Stato: {{$amicizia->stato}}</div>  
    </div>
    @endforeach 
    @endisset() 


    @isset($gruppoAmici)

    Il gruppo di amici di {{$utente->name}} {{$utente->surname}} [{{$utente->username}}]
    @foreach($gruppoAmici as $amico)
    <div class="main_element">
        <div>Nome: {{$amico->name}} Cognome: {{$amico->surname}}</div>
        
        
    </div>
    @endforeach 
    @endisset()

    
    @endisset() 
    @isset($utentent)
    <div>Utente  {{$utentent}} non trovato</div>
    @endisset() 

    
        
    
</div>
@endsection