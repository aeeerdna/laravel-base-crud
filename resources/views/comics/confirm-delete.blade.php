<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm delete</title>
</head>
<body>
    <div>
        <h2>
            Are you sure to delete this comic?
        </h2>

        <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
            @csrf
            @method('DELETE')

            <input type="submit" value="Yes">
        </form>

        <a href="{{ route('comics.index') }}">
            NO!!
        </a>
    </div>
</body>
</html>
