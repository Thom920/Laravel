<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Algemene stijlen */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

/* Navigatiemenu */
nav {
    background-color: #333;
    color: white;
    padding: 1rem;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-right: 1.5rem;
}

nav ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ffd700;
}

/* Koptekst */
h1 {
    text-align: center;
    margin-top: 2rem;
    color: #333;
}

/* Formulier */
form {
    max-width: 600px;
    margin: 2rem auto;
    background-color: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

form input,
form textarea,
form button {
    width: 100%;
    padding: 0.75rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

form button {
    background-color: #333;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #555;
}

</style>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('library') }}">library</a></li>
            <li><a href="{{ route('songs') }}">songs</a></li>
            <li><a href="{{ route('form') }}">form</a></li>

        </ul>
    </nav>
    <h1>form</h1>
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <label for="song_name">Naam van de single:</label><br>
        <input type="text" id="song_name" name="song_name" required><br><br>

        <label for="author">Naam van de artiest of band:</label><br>
        <input type="text" id="author" name="author" required><br><br>

        <label for="release_year">Jaar van release:</label><br>
        <input type="number" id="release_year" name="release_year" required><br><br>

        <input type="submit" value="Submit">
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
</body>
</html>