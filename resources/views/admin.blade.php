@extends('base')

@section('title','Welcome')

@include('nav')

@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Bienvenue!</h1>
      <div class="row center">
        <h5 class="header col s12 light"></h5>
      </div>
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light orange">Se connecter</a>
      </div>
      <br><br>

    </div>
</div>


<div class="container">
    
</div>

@endsection
@include('footer')