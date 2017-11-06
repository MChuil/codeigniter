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
<h2>Nuevo Contacto</h2>
<?php
    $input_email = array (
        'name' => 'email',
        'id'   => 'email',
        'maxlength' => '120',
        'size' => '100',
        'value' => set_value('email', @$data_contacto[0]->email)
    );

    $input_nombre = array (
        'name' => 'nombre',
        'id'   => 'nombre',
        'maxlength' => '60',
        'size' => '60',
        'value' => set_value('nombre',  @$data_contacto[0]->nombre)
    );

    $input_telefono = array (
        'name' => 'telefono',
        'id'   => 'telefono',
        'maxlength' => '20',
        'size' => '20',
        'value' => set_value('telefono',  @$data_contacto[0]->telefono)
    );

    $input_edad = array (
        'name' => 'edad',
        'id'   => 'edad',
        'maxlength' => '2',
        'size' => '2',
        'value' => set_value('edad',  @$data_contacto[0]->edad)
    );

    $opciones = array (
        '0' => 'Inactivo',
        '1'   => 'Activo'
    );
?>


<?php echo form_open(); ?>

<?php echo form_label('Email'); ?> <br>
<?php echo form_input($input_email); ?> <?php echo form_error('email') ?> <br>
<?php echo form_label('Nombre'); ?> <br>
<?php echo form_input($input_nombre); ?> <?php echo form_error('nombre') ?> <br>
<?php echo form_label('Telefono'); ?> <br>
<?php echo form_input($input_telefono); ?> <?php echo form_error('telefono') ?> <br>
<?php echo form_label('Edad'); ?> <br>
<?php echo form_input($input_edad); ?> <?php echo form_error('edad') ?> <br>
<?php echo form_label('Estatus'); ?> <br>
<?php echo form_dropdown('estatus', $opciones, set_value('estatus',@$data_contacto[0]->estatus)); ?> <br><br>
<?php echo form_submit('btnEnviar', 'Guardar'); ?>
<?php echo form_close(); ?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="<?php  base_url(); ?>/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
