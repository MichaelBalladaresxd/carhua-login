<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Lista de Usuarios</h1>

   
    <a class="btn btn-danger float-right" href="<?php echo base_url('clogin/logout');?>">Cerrar Sesion</a>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nacionalidad</th>
                    <th>Tipo Documento</th>
                    <th>N° Documento</th>
                    <th>Nombre</th>
                    <th>Ape. Paterno</th>
                    <th>Ape. Materno</th>
                </tr>
            </thead>

            <tbody>
            <?php
              
                foreach ($usuarios as $item ) {
                    echo '<tr>
                        <td>'.$item->nacionalidad.'</td>
                        <td>'.$item->tipo_documento.'</td>
                        <td>'.$item->num_documento.'</td>
                        <td>'.$item->nombres.'</td>
                        <td>'.$item->ape_paterno.'</td>
                        <td>'.$item->ape_materno.'</td>
                    </tr>
                    ';
                }
            ?>
            </tbody>
        </table>
    </div>
  <!-- jQuery -->
      <script src="http://localhost/grupo-carhua/assets/js/jquery.js"></script>
</body>
</html>