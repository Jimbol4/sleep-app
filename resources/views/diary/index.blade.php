@extends('app')

@section('content')
<h1 class='page-heading'>Sleep diary entries</h1>

@if (!$entries->isEmpty())
<table class='table table-striped table-bordered'>
    <thead>
    <th>Date</th>
    <th>What time did you go to bed?</th>
    <th>What time did you go to sleep?</th>
    <th>What time did you wake up?</th>
    <th>How many times did you wake up in the night?</th>
    <th>How long were you awake for in the night?</th>
    <th>How long did you sleep for?</th>
    <th>Did you take any medications?</th>
    <th>How well rested do you feel this morning?</th>
    <th>Was your sleep of good quality?</th>
    </thead>
    
    <tbody>
        @foreach ($entries as $entry)
        <tr>
            <td><a href="{{ action('DiaryController@edit', $entry->id) }}">{{ $entry->date->toFormattedDateString() }}</td></a>
            <td>{{ $entry->time_to_bed }}</td>
            <td>{{ $entry->time_asleep }}</td>
            <td>{{ $entry->time_awake }}</td>
            <td>{{ $entry->times_awake }}</td>
            <td>{{ $entry->awake_duration }}</td>
            <td>{{ $entry->sleep_length }}</td>
            <td>{{ $entry->medication }}</td>
            <td>{{ $entry->well_rested }}</td>
            <td>{{ $entry->quality }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else <h3>No sleep diary entries yet. <a href='{{ URL::to('diary/create') }}'>Click Here</a> to add one.</h3>
@endif

@endsection