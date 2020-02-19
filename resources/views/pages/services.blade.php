<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Services</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2>{{ $title }}</h2>
        <ul>
            @foreach($services as $service)
            <li>{{ $service }}</li>
            @endforeach
        </ul>
    
    </body>
</html>