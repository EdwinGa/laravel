@extends('admin.layouts.master')

@section('content')

<p>{!! link_to_route('admin.joueur.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

@if ($joueur->count())
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <th>pseudonyme</th>
<th>email</th>
<th>prenom</th>
<th>nom</th>
<th>sexe</th>
<th>date de naissance</th>
<th>telephone</th>
<th>adresse</th>
<th>avatar</th>
<th>description</th>
<th>site_web</th>
<th>argent</th>
<th>adresse_ip</th>
<th>id_compte</th>
<th>nb_monnaie</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($joueur as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ $row->pseudonyme }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->prenom }}</td>
<td>{{ $row->nom }}</td>
<td>{{ $row->sexe }}</td>
<td>{{ $row->date_naissance }}</td>
<td>{{ $row->telephone }}</td>
<td>{{ $row->adresse }}</td>
<td>@if($row->avatar != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->avatar }}">@endif</td>
<td>{{ $row->description }}</td>
<td>{{ $row->site_web }}</td>
<td>{{ $row->argent }}</td>
<td>{{ $row->adresse_ip }}</td>
<td>{{ $row->id_compte }}</td>
<td>{{ $row->nb_monnaie }}</td>

                            <td>
                                {!! link_to_route('admin.joueur.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array('admin.joueur.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => 'admin.joueur.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
    </script>
@stop