<html>
 <head>
  <title>Commit</title>
 </head>
 <body>
<?php
$db = mysqli_connect('localhost', 'root', 'Alumno_2021') or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

	case 'edit':