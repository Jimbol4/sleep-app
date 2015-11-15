@extends('app')

@section('content')
<h1 class='page-heading'>Create a new note</h1>

{!! Form::model($note = new \App\Note, ['method' => 'POST', 'action' => 'NotesController@store']) !!}

@include('notes.form', ['submitButton' => 'Add note'])

{!! Form::close() !!}
@endsection