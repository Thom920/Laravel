<x-master />
@foreach ($songs as $song)

<p>This is song {{ $song->id }}</p>
<p>The name of the song is {{ $song->song_name }}</p>
<p>The author of the song is {{ $song->author }}</p>
<p>The release year is {{ $song->release_year }}</p>
<p>This is created at {{ $song->created_at }}</p>
<p>This is updated at {{ $song->updated_at }}</p>

<form method="POST" action="{{ route('songs.delete', $song->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijder</button>
</form>

<a href="{{ route('songs.update', ['id' => $song->id]) }}"><button>Bewerk</button></a>


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@endforeach