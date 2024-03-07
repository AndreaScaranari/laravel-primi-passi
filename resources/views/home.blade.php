<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps</title>
</head>

<body>
    <header>
        <h1>Hello World!</h1>
        <h3>With $greetings: {{$greetings}}</h3>
    </header>
    <main>
    <p>Link alle altre pagine:</p>
    <ul>
        <li><a href="{{route('page2')}}">Pagina 2</a></li>
        <li><a href="{{route('page3')}}">Pagina 3</a></li>
    </ul>
    <main>
</body>
</html>