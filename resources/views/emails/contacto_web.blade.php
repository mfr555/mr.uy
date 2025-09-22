<!DOCTYPE html>
<html>
<head>
    <title>Nuevo contacto - {{ env('MAIL_FROM_NAME') }}</title>
</head>
<body>
    <h1>{{ env('MAIL_FROM_NAME') }}</h1>
    <h2>Nuevo contacto desde la página web</h2>
    <p><strong>Nombre:</strong> {{ $details['nombre'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{!! nl2br(e($details['mensaje'])) !!}</p>
    <hr>
</body>
</html>
