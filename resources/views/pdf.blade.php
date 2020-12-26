<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="width:100%;text-align:center;font-size:100px;">{{$item->name}}</h1>
    <br>
    <p style="font-size:30px;">Number of tickets : {{$qty}}</p>
    <br>
    <p style="font-size:30px;">Buyer : {{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
    <br>
    @if($item->categorie != 'activity')
    <p style="font-size:30px;">Date : {{$item->date}}</p>
    <br>
    <p style="font-size:30px;">Start time : {{$item->star}}</p>
    <p style="font-size:30px;">End time : {{$item->end}}</p>
    @endif

</body>
</html>