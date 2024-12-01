<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornamentalogue</title>
</head>

<body>
    <ul>
        @foreach ($ornaments as $ornament)
            <li>{{ $ornament->name }}</li>
        @endforeach
    </ul>
</body>

</html>
