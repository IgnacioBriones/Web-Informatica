<form action="<?php echo base_url()."index.php/noticia/agregar ";?>" method="post">
    <p><label>Titulo Noticia:</label> <input type="text" name="titulo_noticia"/></p>
    <p><label>Cuerpo Noticia:</label> <input type="text" name="cuerpo_noticia" /></p>
    <p><label>Alias Usuario:</label> <input type="text" name="alias_user"  /></p>
    <p><input type="submit" name="guardar" value="Guardar" /></p>
</form>