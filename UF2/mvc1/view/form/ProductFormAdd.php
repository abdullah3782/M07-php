<div id="content">
    <form method="post" action="">
        <fieldset>
            <legend>Add product</legend>
            <label>Id *:</label>
            <input type="number" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />
            <label>Marca *:</label>
            <input type="text" placeholder="Marca" name="marca" value="<?php if (isset($content)) { echo $content->getDescripcio(); } ?>" />
            <label>Descripcio *:</label>
            <input type="text" placeholder="descripcio" name="descripcio" value="<?php if (isset($content)) { echo $content->getDescripcio(); } ?>" />
           
            <label>Name *:</label>
            <input type="text" placeholder="name" name="name" value="<?php if (isset($content)) { echo $content->getName(); } ?>" />
            <label>Precio *:</label>
            <input type="number" placeholder="precio" name="precio" value="<?php if (isset($content)) { echo $content->getprecio(); } ?>" />
            <label>* Required fields</label>
            <input type="submit" name="action" value="add" />
            <input type="submit" name="reset" value="reset"  />
        </fieldset>
    </form>
</div>