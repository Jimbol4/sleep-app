<div class='form-group'>
        {!! Form::label('date', 'Date:') !!}
        {!! Form::text('date', $diary->date->format('m/d/Y'), ['class' => 'form-control datepicker'])  !!}
    </div>
    
     <div class='form-group'>
        {!! Form::label('time_to_bed', 'What time did you go to bed?:') !!}
        {!! Form::text('time_to_bed', null, ['class' => 'form-control timepicker'])  !!}
    </div>
    
     <div class='form-group'>
        {!! Form::label('time_asleep', 'What time did you fall asleep?:') !!}
        {!! Form::text('time_asleep', null, ['class' => 'form-control timepicker'])  !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('time_awake', 'What time did you wake up?:') !!}
        {!! Form::text('time_awake', null, ['class' => 'form-control timepicker'])  !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('times_awake', 'How many times did you wake up during the night?:') !!}
        {!! Form::text('times_awake', null, ['class' => 'form-control'])  !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('awake_duration', 'How long were you awake for during the night?:') !!}
        {!! Form::text('awake_duration', null, ['class' => 'form-control'])  !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('sleep_length', 'How long did you sleep?:') !!}
        {!! Form::text('sleep_length', null, ['class' => 'form-control'])  !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('medication', 'Did you take any sleep medication?:') !!}
        {!! Form::text('medication', null, ['class' => 'form-control'])  !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('well_rested', 'How well rested do you feel 0-4?') !!}
        {!! Form::select('well_rested', [0,1,2,3,4], null, ['class' => 'form-control']) !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('quality', 'How would you rate your sleep quality 0-4?') !!}
        {!! Form::select('quality', [0,1,2,3,4], null, ['class' => 'form-control']) !!}
    </div>
    
    <div class='form-group'>
        {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
    </div>