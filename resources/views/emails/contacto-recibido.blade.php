<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto Recibido</title>
</head>
<body>


	<p> Has recibido un mensaje de: {{ $mensaje['name'] }} - {{ $mensaje['email'] }}</p>
	<p><strong> Titulo: </strong> {{ $mensaje['subject'] }}</p>
	<p><strong> Contenido: </strong> {{ $mensaje['content'] }}</p>


</body>
</html>