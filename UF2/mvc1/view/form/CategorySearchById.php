<div id="content">
    <form method="post" action="">
        <fieldset>
            <legend>Search category</legend>
            <label>Id *:</label>
            <input type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />

            <label>* Required fields</label>
            <input type="search" name="search" value="search"  />
        </fieldset>
    </form>
</div>