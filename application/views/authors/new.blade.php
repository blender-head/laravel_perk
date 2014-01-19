@layout('layouts.default')

@section('content')
	
	<h1>Add New Author</h1>

	{{ render('common.error') }}

	{{ Form::open('authors/create', 'POST'); }}

		{{ Form::token(); }}

		<p>
			{{ Form::label('name', 'Name'); }}
			<br />
			{{ Form::text('name', Input::old('name')); }}
		</p>

		<p>
			{{ Form::label('bio', 'Bio'); }}
			<br />
			{{ Form::textarea('bio', Input::old('bio')); }}
		</p>

		<p>
			{{ Form::submit('Save'); }}
		</p>

	{{ Form::close(); }}

@endsection