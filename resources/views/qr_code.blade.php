<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel QR Code Example</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
    <h3>Laravel QR Code Example</h3>
<!-- composer require simplesoftwareio/simple-qrcode (package install)-->
    {!! QrCode::size(300)->generate(Auth::id(). "water" . 30); !!}
    <p>bokhtiar</p>
    <p>MyNotePaper</p>
</div>

</body>
</html>
