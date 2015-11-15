@extends('app')

@section('content')

<h1 class='page-heading'>Existing notes</h1>

@if (!$notes->isEmpty())

@foreach ($notes as $note)
<div class='panel-default'>
    <div class='panel-heading'><a href='{{ action('NotesController@edit', $note->id) }}'>{{ $note->title }}</a></div>
    <div class='panel-body'>
        <p>{!! \Michelf\Markdown::defaultTransform($note->text) !!}</p>
    </div>
</div>
@endforeach

@else <h3>No notes added yet. <a href='{{ URL::to('notes/create') }}'>Click Here</a> to add one.</h3>
@endif

@endsection