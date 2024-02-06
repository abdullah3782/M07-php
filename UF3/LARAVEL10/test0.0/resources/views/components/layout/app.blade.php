<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'daw2'}}</title>
</head>
<body>
    <h1>Laravel</h1>
    <x-layout.navigation/>


{{$slot}}
</body>
</html>
