<x-master />
@foreach ($songs as $song)
@if ($loop->first)
This is the first iteration.
@endif

@if ($loop->last)
This is the last iteration.
@endif

<p>This is song {{ $song->id }}</p>
<p>This is song {{ $song->song_name }}</p>
<p>This is song {{ $song->author }}</p>
<p>This is song {{ $song->release_year }}</p>
<p>This is song {{ $song->created_at }}</p>
<p>This is song {{ $song->updated_at }}</p>

<form method="POST" action="{{ route('songs.delete', $song->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijder</button>
</form>


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


@endforeach