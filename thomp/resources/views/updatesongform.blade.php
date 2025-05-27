<x-master>
    <h1>Update Song</h1>
    <form action="{{ route('update.song', $song->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $song->id }}">
        
        <label for="song_name">Naam van de single:</label><br>
        <input type="text" id="song_name" name="song_name" value="{{ old('song_name', $song->song_name) }}" required><br><br>

        <label for="author">Naam van de artiest of band:</label><br>
        <input type="text" id="author" name="author" value="{{ old('author', $song->author) }}" required><br><br>

        <label for="release_year">Jaar van release:</label><br>
        <input type="number" id="release_year" name="release_year" value="{{ old('release_year', $song->release_year) }}" required><br><br>

        <input type="submit" value="Update">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</x-master>