@extends('app')

@section('content')
    <h1 class='page-heading'>Add a sleep diary entry</h1>
    
    {!! Form::model($diary = new \App\Diary, ['method' => 'POST', 'action' => 'DiaryController@store']) !!}
    
    @include('diary.form', ['submitButton' => 'Add entry'])
    
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