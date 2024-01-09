<div id="content">
    <fieldset>
        <legend>Product list</legend>    
        <?php
            if (isset($content)) {
                echo <<<EOT
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Marca</th>
                            <th>Name</th>
                            <th>Descripcio</th>
                            <th>Precio</th>
                        </tr>
EOT;
                foreach ($content as $product) {
                    echo <<<EOT
                        <tr>
                            <td>{$product->getId()}</td>
                            <td>{$product->getMarca()}</td>
                            <td>{$product->getName()}</td>
                            <td>{$product->getDescripcio()}</td>
                            <td>{$product->getPrecio()}</td>
                        </tr>
EOT;
                }
                echo <<<EOT
                    </table>
EOT;
            }
        ?>
    </fieldset>
</div>
