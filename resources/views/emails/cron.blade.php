<!DOCTYPE html>
<html>

<head>
    <title>Tagihan pembayaran</title>
</head>

<body>
    <p>Hi, Mr./Mrs. {{$details['user']['email']}}</p>
    <p>No Telephone :{{$details['user']['phone']}} </p>
    <p>Tagihan anda bulan ini : {{$details['amount']}}</p>
    <p>Mohon selesaikan pembayaran anda sebelum {{$details['due_date']}}</p>
    <strong>Thank you Mr./Mrs. :)</strong>
</body>

</html>