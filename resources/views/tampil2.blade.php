<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Tampilan 2</h1>

    @foreach ($hobi as $kesukaan)

    <ul><li>{{$kesukaan}}</li></ul>

    @endforeach
</body>
</html>