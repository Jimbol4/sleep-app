@extends('app')

@section('content')
<h1 class='page-heading'>Edit a note</h1>

{!! Form::model($notes, ['method' => 'PATCH', 'action' => ['NotesController@update', $notes->id]]) !!}

@include('notes.form', ['submitButton' => 'Update note'])

{!! Form::close() !!}

{!! Form::model($notes, ['method' => 'DELETE', 'action' => ['NotesController@destroy', $notes->id]]) !!}
    
    <div class='form-group'>
        {!! Form::submit('Delete note', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    
    {!! Form::close() !!}
@endsection