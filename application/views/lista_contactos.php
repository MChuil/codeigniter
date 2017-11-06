<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo  base_url(); ?>/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
<h1>Listado de Contactos</h1>
<?php if(empty($listado)) {?>
       <h1>Sin contactos</h1>
<?php }else{ ?>
        <h4>Tienes <?php echo count($listado); ?> Contacto(s)</h4>
        <table class="table">
        <?php
            foreach ($listado as $row) {
                echo "<tr>";
                echo "<td>" . $row ->nombre . '</td>
                <td><a href=' . base_url() . 'index.php/contactos/editar/' . $row->id . ' class="btn btn-info">Editar</a></td>
                <td><a href=' . base_url() . 'index.php/contactos/eliminar/' . $row->id . ' class="btn btn-danger">Eliminar</td>';
                echo "</tr>";
            }
        ?>
        </table>
<?php } ?>
<p><a href="<?php echo base_url() . 'index.php/contactos/agregar'; ?> " class="btn btn-primary">Nuevo Contacto</a></p>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="<?php  base_url(); ?>/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
