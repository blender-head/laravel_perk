@layout('layouts.default')

@section('content')
	<h1>{{ HTML::entities($author->name); }}</h1>
	<p>{{ $author->bio }}</p>
	<p>
		{{ HTML::link_to_route('authors', 'Back'); }} | 
		{{ HTML::link_to_route('edit_author', 'Edit', $author->id); }} |
		{{ HTML::link_to_route('delete_author', 'Delete', $author->id); }}
	</p>
@endsection