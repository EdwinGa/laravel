@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! Admin
                    <table class="table table-striped">
    <tr>
        <th>Full name</th>
        <th>Email</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
