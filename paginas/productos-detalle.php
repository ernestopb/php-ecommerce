<?php
require_once __DIR__ . '/../clases/Producto.php';
$producto = (new Producto)->productoPorId($_GET['id']);
?>

<section id="main-detalle">
    <div class="contenedor">
        <h2>Detalle de producto</h2>
    </div>
</section>

<section id="main-detalle">
    <div class="contenedor">
        <article>
            <div>
                    <h3><?= $producto->getTitulo();?></h3></a>
                    <h3>Precio: <?= $producto->getPrecio();?></h3>
                    <p>Descripción</p>
                    <p><?= $producto->getDescripcion();?></p>
                    <p><?= $producto->getTamano();?></p>
            </div>
                <img src="imgs/<?= $producto->getImagen();?>" alt="<?=
                $producto->getImagen_alt();?>">
                <div><button id="boton-carrito">Añadir al carrito</button></div>
        </article>
    </div>
</section>