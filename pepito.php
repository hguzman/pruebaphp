<?php
  $nombre=$_POST["nom"];
  $edad=$_POST["edad"];
  $db=mysqli_connect("localhost","root","root");
  mysqli_select_db($db, "tecnar");// Seleccion la base de datos correcta
  $result = mysqli_query($db, "insert into personas values('$nombre',$edad)");

  echo "Informacion guardada"

 ?>







 
