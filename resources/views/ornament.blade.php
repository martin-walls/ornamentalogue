<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/">Back to the tree</a>

    <h1>{{ $ornament->name }}</h1>

    @foreach ($ornament->images as $image)
        <img src="{{ $image->path }}">
    @endforeach

    <p>
        {{ $ornament->date }}
    </p>

    <p>
        {{ $ornament->story }}
    </p>
</body>

</html>
