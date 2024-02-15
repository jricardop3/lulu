@extends('site.layout.layout')
@section('title', 'Olá mundo')
@section('conteudo')
        <div class="">
        @component('site.components.container') 
        @endcomponent
        </div><div class="row">
        @component('site.components.container2') 
        @endcomponent
        </div><div class="row">
        @component('site.components.card5') 
        @endcomponent
        </div>
        
        
    
@endsection

