@layout('layouts.default')

@section('content')
	
	<h1>Edit Author: {{ HTML::entities($author->name); }}</h1>

	{{ render('common.error') }}

	{{ Form::open('authors/update', 'POST'); }}

		{{ Form::token(); }}

		<p>
			{{ Form::label('name', 'Name'); }}
			<br />
			{{ Form::text('name', $author->name); }}
		</p>

		<p>
			{{ Form::label('bio', 'Bio'); }}
			<br />
			{{ Form::textarea('bio', $author->bio); }}
		</p>

		<p>
			{{ Form::submit('Save'); }}
			{{ Form::hidden('id', $author->id); }}
		</p>

	{{ Form::close(); }}

@endsection