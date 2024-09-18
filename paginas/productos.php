<?php
require_once __DIR__ . '/../clases/Producto.php';
$productos = (new Producto)->all();
?>

<section id="main-productos">
    <div class="contenedor">
        <h2>Productos</h2>
    </div>
</section>

<section id="main-productos">
        <?php
        foreach($productos as $producto):
        ?>
        <div class="contenedor">
            <article>
                <div>
                    <a href="index.php?s=productos-detalle&id=<?=
                    $producto->getProductoId();?>"><h3><?=
                    $producto->getTitulo();?></h3></a>
                    <p><?= $producto->getDescripcion();?></p>
                </div>
                <a href="index.php?s=productos-detalle&id=<?=
                    $producto->getProductoId();?>"><img src="imgs/<?= $producto->getImagen();?>" alt="<?=
                $producto->getImagen_alt();?>"></a>
            </article>
        </div>
        <?php
        endforeach;
        ?>

</section>