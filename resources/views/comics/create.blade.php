<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Comics</title>
</head>
<body>
    <main>
        <form method="POST" action=" {{ route('comics.store') }} ">
            {{-- validazione richiesta utente --}}
            @csrf

            {{-- input title --}}
            <div>
                <input type="text" name="title" placeholder="Title here...">
            </div>

            {{-- input description --}}
            <div>
                <textarea name="description" cols="25" rows="10" placeholder="Description here..."></textarea>
            </div>

            {{-- input thumb --}}
            <div>
                <input type="url" name="thumb" placeholder="Thumb link here..." pattern="https://.*">
            </div>

            {{-- input price --}}
            <div>
                <input type="number" name="price" placeholder="Price here...">
            </div>

            {{-- input series --}}
            <div>
                <input type="text" name="series" placeholder="Series here...">
            </div>

            {{-- input sale_date --}}
            <div>
                <input type="date" name="sale_date" placeholder="Sale date here...">
            </div>

            {{-- input type --}}
            <div>
                <input type="text" name="type" placeholder="Type here...">
            </div>

            {{-- input create --}}
            <div>
                <input type="submit" value="Create your new comic!!">
            </div>
        </form>
    </main>
</body>
</html>
