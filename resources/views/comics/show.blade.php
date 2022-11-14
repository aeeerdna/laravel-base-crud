<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $comic->title }} </title>
</head>
<body>
    <main>
        {{-- immagine fumetto --}}
        <div>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} cover">
        </div>
        {{-- titolo --}}
        <h2>
            {{ $comic->title }}
        </h2>

        {{-- descrizione --}}
        <div>
            <p>
                {{ $comic->description }}
            </p>
        </div>

        {{-- prezzo --}}
        <div>
            <p>
                {{ $comic->price }} &euro;
            </p>
        </div>

        {{-- tipologia, serie e data --}}
        <div>
            {{-- tipo --}}
            <p>
                {{ $comic->type }}
            </p>

            {{-- serie --}}
            <p>
                {{ $comic->series }}
            </p>

            {{-- data --}}
            <p>
                {{ $comic->sale_date }}
            </p>
        </div>
    </main>
</body>
</html>
