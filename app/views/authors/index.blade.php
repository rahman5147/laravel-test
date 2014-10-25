@extends('layouts.default')
@section('content')
	<h1>Authors Home Page</h1>
	<ul>
		@foreach($authors as $author)
			<li>{{ HTML::linkRoute('author',$author->name, array($author->id)) }}</li>
		@endforeach
	</ul>

	<p>{{ HTML::linkRoute('new_author','New Author') }}</p>
@endsection