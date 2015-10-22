@extends('layouts.master')
@section('title', 'Bienvenidos')
@section('class', 'home')

@section('css')

  <style>
    html, body { height: 100%; }

    body{
      color: #f8f8f8;
    }

    h2 {
      font-weight: bold;
      width: auto;
      height: auto;
      font-size: 30px;
      text-transform: uppercase;
    }

    img{
      display: inline;
      margin: 0 auto;
    }
  </style>

@stop

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-xs-12 text-center" style="margin-top:150px;">
             <img src="{{ url('assets/img/logos/logo.png') }}" class="img-responsive">
             <br>
             <br>
             <img src="{{ url('assets/img/logos/prox.png') }}" class="img-responsive">
          </div>
      </div>
  </div>

@stop

@section('js')

@stop
