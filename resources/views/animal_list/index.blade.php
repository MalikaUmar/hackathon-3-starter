<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of all animals</h1>
    <h2> Hello, Doc!</h2>
    <p> Here is the list of all patients.<p>
        <p> Don't forget to smile!</p>


        <ul>
        @foreach ($animals as $animal)
            <li>
                <br>
                <img src="/images/pets/{{ $animal->image->path }}">
                <br>
                {{ $animal->name }}
                <br>
                {{ $animal->species }}
                <br>
                {{ $animal->breed }}
                <br>
                {{ $animal->age }}
                <br>
                {{ $animal->weight }}
                <br>
                
            </li>
        @endforeach
    </ul>
</body>
</html>