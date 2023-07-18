<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reserva Web</title>
    <style type="text/css">
    </style>
</head>
<body>
<h1>Confirmacion de reserva</h1>
<p>Datos de la reserva</p>
<p>Nombre: {{$details['nombre']}}</p>
<p>Telefono: {{$details['telefono']}}</p>
<p>Correo: {{$details['correo']}}</p>
<p>Opciones: {{$details['opcion']}}</p>
<p>Fecha: {{$details['fecha']}}</p>
<p>Mensaje: {{$details['mensaje']}}</p>
</body>
</html>