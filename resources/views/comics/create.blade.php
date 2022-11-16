<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>New Comics</title>
</head>
<body>
    <main>
        {{-- visualizzare errori --}}
        @if ($errors->any())
            <div>
                You must correct the errors before continuing!!
            </div>
        @endif

        <form method="POST" action=" {{ route('comics.store') }} ">
            {{-- validazione richiesta utente --}}
            @csrf

            {{-- input title --}}
            <div @error('title') class="is-invalid" @enderror>
                <input type="text" name="title" placeholder="Title here...">

                {{-- messaggio eventuale errore nel titolo --}}
                @error('title')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input description --}}
            <div @error('description') class="is-invalid" @enderror>
                <textarea name="description" cols="25" rows="10" placeholder="Description here..." required></textarea>

                {{-- messaggio eventuale errore nella descrizione --}}
                @error('description')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input thumb --}}
            <div @error('thumb') class="is-invalid" @enderror>
                <input type="url" name="thumb" placeholder="Thumb link here..." pattern="https://.*" required maxlength="255">

                {{-- messaggio eventuale errore nell'immagine --}}
                @error('thumb')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input price --}}
            <div @error('price') class="is-invalid" @enderror>
                <input type="number" name="price" placeholder="Price here..." required min="0.01" max="999.99" step="0.01">

                {{-- messaggio eventuale errore nel prezzo --}}
                @error('price')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input series --}}
            <div @error('series') class="is-invalid" @enderror>
                <input type="text" name="series" placeholder="Series here..." required maxlength="100">

                {{-- messaggio eventuale errore nelle serie --}}
                @error('series')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input sale_date --}}
            <div @error('sale_date') class="is-invalid" @enderror>
                <input type="date" name="sale_date" placeholder="Sale date here..." required>

                {{-- messaggio eventuale errore nella data --}}
                @error('sale_date')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input type --}}
            <div @error('type') class="is-invalid" @enderror>
                <input type="text" name="type" placeholder="Type here..." required maxlength="15">

                {{-- messaggio eventuale errore nel tipo --}}
                @error('type')
                    <div>
                        Fix the title!!
                    </div>
                @enderror
            </div>

            {{-- input create --}}
            <div>
                <input type="submit" value="Create your new comic!!">
            </div>
        </form>
    </main>
</body>
</html>
