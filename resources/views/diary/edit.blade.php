@extends('app')

@section('content')
<h1 class='page-heading'>Edit: {{ $diary->date->toFormattedDateString() }}</h1>

{!! Form::model($diary, ['method' => 'PATCH', 'action' => ['DiaryController@update', $diary->id]]) !!}
        
    @include('diary.form', ['submitButton' => 'Update entry'])
    {!! Form::close() !!}
    
    {!! Form::model($diary, ['method' => 'DELETE', 'action' => ['DiaryController@destroy', $diary->id]]) !!}
    
    <div class='form-group'>
        {!! Form::submit('Delete entry', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    
    {!! Form::close() !!}
@include('errors.list')
@endsection

@section('footer')
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src='/js/jquery.ui.timepicker.js'></script>
<link href="/css/jquery.ui.timepicker.css" rel="stylesheet">

<script>
    $('.timepicker').timepicker();
    $('.datepicker').datepicker();
</script>
@endsection