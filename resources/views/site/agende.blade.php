@extends('site.layout.layout')
@section('title', 'Louise Nutrição')
@section('conteudo')

<div class="container-fluid flex col-12">
  <div class="mt-5 d-md-none d-block">
    <div class="">
      @component('site.components.card8')
      @endcomponent
    </div>
    <div class="">
      @component('site.components.login')
      @endcomponent
    </div>
  </div>
  <div class="mt-5 d-md-flex d-none " style="margin: 5dvh 10dvw 0 10dvw; /* From https://css.glass */
  background: rgba(255, 138, 138, 0.74);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(14.8px);
  -webkit-backdrop-filter: blur(14.8px);
  border: 1px solid rgba(255, 138, 138, 1);">
    <div class="col-md-6 col-sm-1">
      @component('site.components.card8')
      @endcomponent
    </div>
    <div class="col-md-6 col-sm-12">
      @component('site.components.login')
      @endcomponent
    </div>
  </div>
  <div class="">
    @component('site.components.card9')
    @endcomponent
  </div>
</div>
<a href="https://www.instagram.com/louiseduarte.nutri/" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;
background-color:#833ab4;
color:#FFF;background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);border-radius:50px;
text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
  <i style="margin-top:16px" class="fa fa-instagram"></i>
</a>


@endsection