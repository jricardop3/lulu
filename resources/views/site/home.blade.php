@extends('site.layout.layout')
@section('title', 'Louise Nutrição')
@section('conteudo')
<div class="row gx-0">
        @component('site.components.container4')
        @endcomponent
</div>
<div class="row gx-0">
        @component('site.components.card6')
        @endcomponent
</div>
<div class="row gx-0">
        @component('site.components.card5')
        @endcomponent
</div>


<a href="https://www.instagram.com/louiseduarte.nutri/" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;
background-color:#833ab4;
color:#FFF;background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);border-radius:50px;
text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
        <i style="margin-top:16px" class="fa fa-instagram"></i>
</a>


@endsection