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
            <div>
                <textarea name="description" cols="25" rows="10" placeholder="Description here..." required></textarea>
            </div>

            {{-- input thumb --}}
            <div>
                <input type="url" name="thumb" placeholder="Thumb link here..." pattern="https://.*" required maxlength="255">
            </div>

            {{-- input price --}}
            <div>
                <input type="number" name="price" placeholder="Price here..." required min="0.01" max="999.99" step="0.01">
            </div>

            {{-- input series --}}
            <div>
                <input type="text" name="series" placeholder="Series here..." required maxlength="100">
            </div>

            {{-- input sale_date --}}
            <div>
                <input type="date" name="sale_date" placeholder="Sale date here..." required>
            </div>

            {{-- input type --}}
            <div>
                <input type="text" name="type" placeholder="Type here..." required maxlength="15">
            </div>

            {{-- input create --}}
            <div>
                <input type="submit" value="Create your new comic!!">
            </div>
        </form>
    </main>
</body>
</html>
