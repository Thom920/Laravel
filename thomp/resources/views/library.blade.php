<x-master />
@foreach ($songs as $song)

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
    <!-- <form action=""> -->
        <a href="{{ route('songs.update', ['id' => $song->id]) }}"><button>Bewerk</button></a>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endforeach