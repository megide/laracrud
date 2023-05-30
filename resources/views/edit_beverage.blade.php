<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        edit beverage
    </h1>
    <form action="{{ route('beverage.update',$beverage->id) }}" method="post">
        Name: <input type="text" value="{{ $beverage->name }}" name="Bname"> <br>
        price: <input type="number" value="{{ $beverage->price }}" name="bprice"> <br>
        <button type="submit">update</button>
        @method('put')
        @csrf
        
    </form>
</body>
</html>