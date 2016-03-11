@extends('layouts/app')

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

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Joueurs</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Afficher</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>


<div class="container">
    
</div>

@endsection
@include('footer')