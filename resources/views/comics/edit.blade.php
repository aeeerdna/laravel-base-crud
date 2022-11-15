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
            <div>
                <input type="text" name="title" placeholder="Title here..." value="{{ $comic->title }}">
            </div>

            {{-- input description --}}
            <div>
                <textarea name="description" cols="25" rows="10" placeholder="Description here...">{{ $comic->description }}</textarea>
            </div>

            {{-- input thumb --}}
            <div>
                <input type="url" name="thumb" placeholder="Thumb link here..." pattern="https://.*" value="{{ $comic->thumb }}">
            </div>

            {{-- input price --}}
            <div>
                <input type="number" name="price" placeholder="Price here..." value="{{ $comic->price }}">
            </div>

            {{-- input series --}}
            <div>
                <input type="text" name="series" placeholder="Series here..." value="{{ $comic->series }}">
            </div>

            {{-- input sale_date --}}
            <div>
                <input type="date" name="sale_date" placeholder="Sale date here..." value="{{ $comic->data }}">
            </div>

            {{-- input type --}}
            <div>
                <input type="text" name="type" placeholder="Type here..." value="{{ $comic->type }}">
            </div>

            {{-- input create --}}
            <div>
                <input type="submit" value="Edit your comic!!">
            </div>
        </form>
    </main>
</body>
</html>
