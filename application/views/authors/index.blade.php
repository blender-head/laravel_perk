@layout('layouts.default')


@section('content')
	<h1>Authors Homepage</h1>

	<ul>
		@foreach($authors as $author)
			<li>{{ HTML::link_to_route('author', $author->name, array($author->id));  }}</li>
		@endforeach
	</ul>

	<p>{{ HTML::link_to_route('new_author', 'Create new author'); }}</p>

@endsection