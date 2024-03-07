<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps</title>
</head>

<body>
    <header>
        <h1>{{$greetings}}</h1>
        <h3>Benvenuto in pagina 3</h3>
    </header>
    <main>
    <p>Link alle altre pagine:</p>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('page2')}}">Pagina 2</a></li>
    </ul>
    <main>
</body>
</html>