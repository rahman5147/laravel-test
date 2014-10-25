@extends('layouts.default')
@section('content')
	<h1>Editing {{ $author->name }}</h1>
	@include('common.author_errors')
	{{ Form::open(array('action'=>'update','method' => 'PUT')) }}
	<p>
		{{ Form::label("name", "Name") }}<br>
		{{ Form::text("name", $author->name) }}<br>
	</p>
	<p>
		{{ Form::label("bio", "Biography") }}<br>
		{{ Form::textarea("bio", $author->bio) }}<br>
	</p>

	{{ Form::hidden('id',$author->id) }}
	<p>{{ Form::submit('Update Author') }}</p>
	<p>{{ Form::close() }}</p>
@endsection