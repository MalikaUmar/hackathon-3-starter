<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Animal's Data Insert</h1>
    <h2> Hello, Doc!</h2>
    <p> Please write information about our new patient. It will help a lot to you and your collegues.<p>
        <p> Don't forget to smile!</p>

    <form action="{{ route('animal-inserts') }}" method="">
        @csrf
        
        <input type="text" name="name" placeholder="Enter an animal name" value="{{ old('name') }}">
        <input type="text" name="first_name" placeholder="Enter owner's first name" value="{{ old('surname') }}">
        <input type="text" name="full_name" placeholder="Enter owner's surname" value="{{ old('surname') }}">
        <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        <button type="submit">Request to add a new animal</button>
    </form>
   
</body>
</html>