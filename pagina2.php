<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if (isset($_REQUEST['nombre'])) {
    $nombre = $_REQUEST['nombre'];
    echo "Tu nombre es:" . $nombre . "<br>";
  }
  if (isset($_REQUEST['edad'])) {
    $edad = $_REQUEST['edad'] ;
    echo "Tu edad es :" . $edad . "<br>";  
}
 if (isset($_REQUEST['futbol'])) {
    echo "Te gusta el fùtbol <br> ";
 }
 if (isset($_REQUEST['basquet'])) {
    echo  "Te gusta el basquet <br> ";
 }
 if (isset($_REQUEST['Handbol'])) {
    echo  "Te gusta el handbol <br> ";
 }
 if (isset($_REQUEST['"Levantamiento de pesas'])) {
    echo  "Te gusta el handbol <br> ";
 }
 if (isset($_REQUEST['Atletismo'])) {
    echo  "Te gusta el Atletismo <br> ";
 }
 if (isset($_REQUEST['"Natación'])) {
    echo  "Te gusta el natacion <br> ";
 }
 if (isset($_REQUEST['Ciclismo'])) {
    echo  "Te gusta el Ciclismo <br> ";
 }
 if (isset($_REQUEST['Boxeo'])) {
    echo  "Te gusta el Boxeo <br> ";
}
 
 if (isset($_REQUEST['Artes Marciales'])) {
    echo  "Te gusta el Artes Marciales <br> ";
 }
 if (isset($_REQUEST['otros'])) {
    echo "Te gusta otros <br> ";
 
 }
 ?>
</body>

</html>