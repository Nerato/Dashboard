<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
TESTE
<ul> </ul>
@foreach($data as $customers)

    <li> Personame Name:{{$customers->username}} and Origin name: {{$customers->customerName}}

@endforeach

</body>
</html>