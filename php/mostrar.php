<HTML>

  <?php
  // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
  $conn = new PDO('mysql:host=localhost;dbname=prueba', 'root', ''); // el campo vaciío es para la password.

  ?>

   <HEAD>
      <TITLE>Mostrar Datos</TITLE>
      	<link rel="stylesheet" href="../css/bootstrap.css">
   </HEAD>
   <BODY>

<table class="table table-striped">
  <thead>
<tr>
    <td> id </td>
    <td>  Nombre </td>
    <td> Apellido P </td>
</tr>
</thead
<?php foreach ($conn ->query('select * from datos') as $row ) { ?>
  <tr>
    <td><?php  echo $row['idpersona'] ?> </td>
    <td><?php  echo $row['nombre'] ?> </td>
    <td><?php  echo $row['apellidopaterno'] ?> </td>

  </tr>


<?php }  ?>


</thead>

</table>


   </BODY>
</HTML>
