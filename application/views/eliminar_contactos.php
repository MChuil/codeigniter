<h1>Eliminar Contacto</h1>
<p>Esta seguro de eliminar el contacto <?php echo $data_contacto[0]->nombre; ?> ?:</p>
<?php
    $input_id = array (
        'id'   => $data_contacto[0]->id
    );
?>
<?php echo form_open(); ?>
<?php echo form_hidden($input_id); ?>

<?php echo form_submit('btnEliminar', 'Si, deseo eliminar'); ?>
<?php echo form_close(); ?>