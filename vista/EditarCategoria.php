<div class="container">
    <div class="row">

        <h3>Editar Categoría</h3>

        <form name="frmCategoria" id="frmCategoria" action="Index.php?c=Categoria&accion=modificar" method="POST">

            <input type="hidden" name="categoria_id" id="categoria_id" value="<?php echo $categoria['categoria_id'] ?>" />
            <input type="text" name="nombre" id="nombre" value="<?php echo $categoria['nombre'] ?>" />
            <label for="nombre">Nombre</label>
            </br></br>
            <button type="submit" class="waves-effect waves-light btn-small">Guardar</button>
        </form>
    </div>
</div>