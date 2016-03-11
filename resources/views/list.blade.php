@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading"><h3>Joueurs</h3>
                <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col s12">
                            <table class="table table-striped">
    <tr>
        <th>Full name</th>
        <th>Email</th>
        <th>Information</th>
        <th>Modifier</th>
        <th>Suprimer</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <th><a class="waves-effect waves-light btn"><i class="large material-icons">ic_visibility</i></a></th>
        <th><a class="waves-effect waves-light btn"><i class="large material-icons">ic_toc</i></a></th>
        <th><a class="waves-effect waves-light btn"><i class="large material-icons">ic_delete_forever</i></a></th>
    </tr>
    @endforeach
  </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection