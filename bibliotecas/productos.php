<?php

require_once __DIR__ . '/../clases/Producto.php';

function displayProducto(): array {
    $contenido = file_get_contents(__DIR__ . '/../data/productos.json');
    $data = json_decode($contenido, true);
    $display = [];

    foreach($data as $item) {
        $producto = new Producto;
        $noticia->cargarDatos($item);
        $salida[] = $producto;
    }

    return $display;
}

function productosPorId(int $id): Producto {
    $productos = displayProducto();
    foreach($productos as $producto) {
        if($id === $producto->producto_id) {
            return $producto;
        }
    }
}