<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<h1>Bienvenido a mi web</h1>
<p>Estos son los últimos artículos publicados.</p>
<?php
foreach ($Articulos as $articulo)
		{

			echo '<p>';
   			echo '<a href="' . site_url('/articulos/muestra/' . $articulo['id']) . '">' . $articulo['titulo'] . '</a>';
   			echo '</p>';
		    
		}
?>

</body>
</html>
