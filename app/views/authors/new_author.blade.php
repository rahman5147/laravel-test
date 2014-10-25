@extends('layouts.default')
@section('content')
	<h1>Add new author</h1>
	
	@include('common.author_errors')

	{{ Form::open(array('method' => 'POST', 'action'=>'create')) }}
	<p>
		{{ Form::label("name", "Name") }}<br>
		{{ Form::text("name", Input::old('name')) }}<br>
	</p>
	<p>
		{{ Form::label("bio", "Biography") }}<br>
		{{ Form::textarea("bio", Input::old('bio')) }}<br>
	</p>
	<p>{{ Form::submit('Add Author') }}</p>
	<p>{{ Form::close() }}</p>
@endsection