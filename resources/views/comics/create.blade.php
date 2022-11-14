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

            {{-- input del form --}}
            <div>
                <input type="submit" value="">
            </div>
        </form>
    </main>
</body>
</html>
