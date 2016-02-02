@extends('master')
@section('header')
<a href="{{('/'.$tasks->id.'')}}">&larr; Cancel </a>
<h2>
@if($method == 'post')
Add a new task
@elseif($method == 'delete')
Delete {{$tasks->name}}?
@else
Edit {{$tasks->name}}
@endif
</h2>
@stop
@section('content')
{{Form::model($cat, array('method' => $method, 'url'=>
'cats/'.$cat->id))}}
@unless($method == 'delete')
<div class="form-group">
{{Form::label('Name')}}
{{Form::text('name')}}
</div>
<div class="form-group">
{{Form::label('Date of birth')}}
{{Form::text('date_of_birth')}}
</div>
<div class="form-group">
{{Form::label('Breed')}}
{{Form::select('breed_id', $breed_options)}}
</div>
{{Form::submit("Save", array("class"=>"btn btn-default"))}}
@else
{{Form::submit("Delete", array("class"=>"btn btn-default"))}}
@endif
{{Form::close()}}
@stop