<?php

class Producto

{
    private int $producto_id;
    private string $titulo;
    private string $precio; 
    private string $descripcion;
    private string $tamano;
    private string $imagen;
    private string $imagen_alt;

    public function cargarDatos(array $data): void {

        $this->producto_id = $data['producto_id'];
        $this->titulo = $data['titulo'];
        $this->precio = $data['precio'];
        $this->descripcion = $data['descripcion'];
        $this->tamano = $data['tamano'];
        $this->imagen = $data['imagen'];
        $this->imagen_alt = $data['imagen_alt'];
    }

    public function all(): array {

        $contenido = file_get_contents(__DIR__ . '/../data/productos.json');
        $data = json_decode($contenido, true);
        $display = [];

        foreach($data as $item) {
            $producto = new Producto;
            $producto->cargarDatos($item);
            $display[] = $producto;
        }

        return $display;

    }

    public function productoPorId(int $id): Producto {
        $productos = $this->all();
        foreach ($productos as $producto){
            if($id === $producto->producto_id){
                return $producto;
            }
        }
    }

    public function getProductoId(): int {
        return $this->producto_id;
    }

    public function setProductoId(int $producto_id){
        $this->producto_id = $producto_id;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
    }

    public function getPrecio(): string {
        return $this->precio;
    }

    public function setPrecio(string $precio){
        $this->precio = $precio;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion){
        $this->descripcion = $descripcion;
    }

    public function getTamano(): string {
        return $this->tamano;
    }

    public function setTamano(string $tamano){
        $this->tamano = $tamano;
    }

    public function getImagen(): string {
        return $this->imagen;
    }

    public function setImagen(string $imagen){
        $this->imagen = $imagen;
    }

    public function getImagen_alt(): string {
        return $this->imagen_alt;
    }

    public function setImagen_alt(string $imagen_alt){
        $this->imagen_alt = $imagen_alt;
    }
}