<?php
require_once __DIR__ . '/clases/Producto.php'; 

$rutas = [
    'home' => [
        'titulo' => 'Home',
    ],

    'productos' => [
        'titulo' => 'Obras de UnluckyChai',
    ],

    'productos-detalle' => [
        'titulo' => 'Detalles del producto',
    ],

    'contacto' => [
        'titulo' => 'Comisiones'
    ],

    '404' => [
        'titulo' => 'XoX ¡Página no encontrada!'
    ]
];

$pagina = $_GET['s'] ?? 'home';

if(!file_exists('paginas/' . $pagina . '.php')){
    $pagina = '404';
}

if(!isset($rutas[$pagina])){
    $pagina = '404';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $rutas[$pagina]['titulo'];?> * UnluckyChai </title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header id="banner">
        <div class="fondo"></div>
        <div class="contenido-wrap">
        <h1>UNLUCKY CHAI<br>--TIENDA--</h1>
        </div>
    </header>
    
    <nav>
        <div>
            <ul>
            <li><a href="index.php?s=home">Home</a></li>
            <li><a href="index.php?s=productos">Productos</a></li>
            <li><a href="index.php?s=contacto">Comisiones</a></li>
            </ul>
        </div>
    </nav>
    

    <main>
        <section>
            <?php
            require __DIR__ . '/paginas/' . $pagina . '.php';
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; Ernesto Porta Brenes - Escuela Da Vinci - 2022</p>
    </footer>
</body>
</html>