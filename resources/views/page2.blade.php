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
        <h3>Benvenuto in pagina 2</h3>
    </header>
    <main>
    <p>Link alle altre pagine:</p>
    <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/page3')}}">Pagina 3</a></li>
    </ul>
    <main>
</body>
</html>