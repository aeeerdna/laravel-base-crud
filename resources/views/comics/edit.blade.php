<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <main>
        <form method="POST" action=" {{ route('comics.update', $comic->id) }} ">
            {{-- validazione richiesta utente --}}
            @csrf

            {{-- modifica metodo --}}
            @method('PUT')

            {{-- input title --}}
            <div @error('title') class="is-invalid" @enderror>
                <input type="text" name="title" value="{{ old('title', $comic->title) }}" placeholder="Title here..." minlength="3" required maxlength="255">

                {{-- messaggio eventuale errore nel titolo --}}
                @error('title')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input description --}}
            <div @error('description') class="is-invalid" @enderror>
                <textarea name="description" cols="25" rows="10" placeholder="Description here..." required>{{ old('description', $comic->description) }}</textarea>

                {{-- messaggio eventuale errore nella descrizione --}}
                @error('description')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input thumb --}}
            <div @error('thumb') class="is-invalid" @enderror>
                <input type="url" name="thumb" value="{{ old('thumb', $comic->thumb) }}" placeholder="Thumb link here..." pattern="https://.*" required maxlength="255">

                {{-- messaggio eventuale errore nell'immagine --}}
                @error('thumb')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input price --}}
            <div @error('price') class="is-invalid" @enderror>
                <input type="number" name="price" value="{{ old('price', $comic->price) }}" placeholder="Price here..." required min="0.01" max="999.99" step="0.01">

                {{-- messaggio eventuale errore nel prezzo --}}
                @error('price')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input series --}}
            <div @error('series') class="is-invalid" @enderror>
                <input type="text" name="series" value="{{ old('series', $comic->series) }}" placeholder="Series here..." required maxlength="100">

                {{-- messaggio eventuale errore nelle serie --}}
                @error('series')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input sale_date --}}
            <div @error('sale_date') class="is-invalid" @enderror>
                <input type="date" name="sale_date" value="{{ old('sale_date', '') }}" placeholder="Sale date here..." required>

                {{-- messaggio eventuale errore nella data --}}
                @error('sale_date')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input type --}}
            <div @error('type') class="is-invalid" @enderror>
                <input type="text" name="type" value="{{ old('type', $comic->type) }}" placeholder="Type here..." required maxlength="15">

                {{-- messaggio eventuale errore nel tipo --}}
                @error('type')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input create --}}
            <div>
                <input type="submit" value="Edit your comic!!">
            </div>
        </form>
    </main>
</body>
</html>
