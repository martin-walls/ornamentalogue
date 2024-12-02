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
            <li>
                <a href="/ornament/{{ $ornament->id }}">
                    {{ $ornament->occasion }}
                </a>
            </li>
        @endforeach
    </ul>
</body>

</html>
