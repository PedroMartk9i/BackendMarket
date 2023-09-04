<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="estilos_productos.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>

    <h1>Productos Disponibles</h1>

    <div class="horizontal">

        <div class="producto">
            <form action="gestor_carro.php" method="POST">
                <img src="Imagenes/lays.png" alt="" height="150px" width="150px">
                <h2>Lays Classic</h2>
                <p>Precio: 3000 Pesos</p>
                <button type="submit" name="Agregar_al_carro"><img src="Imagenes/carrito_compra.png" alt="" height="50px" width="50px"></button>
                <input type="hidden" name="Nombre" value="Lays Classic">
                <input type="hidden" name="Precio" value="3000">
                <input type="hidden" name="Imagen" value="Imagenes/lays.png">
            </form>
        </div>
        <div class="producto">
            <form action="gestor_carro.php" method="POST">
                <img src="Imagenes/colgate.png" alt="" height="150px" width="150px">
                <h2>Colgate Triple Accion</h2>
                <p>Precio: 6000 Pesos</p>
                <button type="submit" name="Agregar_al_carro"><img src="Imagenes/carrito_compra.png" alt="" height="50px" width="50px"></button>
                <input type="hidden" name="Nombre" value="Colgate Triple Accion">
                <input type="hidden" name="Precio" value="6000">
                <input type="hidden" name="Imagen" value="Imagenes/colgate.png">
            </form>
        </div>
        <div class="producto">
            <form action="gestor_carro.php" method="POST">
                <img src="Imagenes/arroz.png" alt="" height="150px" width="150px">
                <h2>Arroz Diana 1000g</h2>
                <p>Precio: 5000 Pesos</p>
                <button type="submit" name="Agregar_al_carro"><img src="Imagenes/carrito_compra.png" alt="" height="50px" width="50px"></button>
                <input type="hidden" name="Nombre" value="Arroz Diana 1000g">
                <input type="hidden" name="Precio" value="5000">
                <input type="hidden" name="Imagen" value="Imagenes/arroz.png">
            </form>
        </div>
        <div class="producto">
            <form action="gestor_carro.php" method="POST">
                <img src="Imagenes/camisa.png" alt="" height="150px" width="150px">
                <h2>Camisa Negra</h2>
                <p>Precio: 12000 Pesos</p>
                <button type="submit" name="Agregar_al_carro"><img src="Imagenes/carrito_compra.png" alt="" height="50px" width="50px"></button>
                <input type="hidden" name="Nombre" value="Camisa Negra">
                <input type="hidden" name="Precio" value="12000">
                <input type="hidden" name="Imagen" value="Imagenes/camisa.png">
            </form>
        </div>
        <div class="producto">
            <form action="gestor_carro.php" method="POST">
                <img src="Imagenes/mantequilla.png" alt="" height="150px" width="150px">
                <h2>Mantequilla Rama 500g</h2>
                <p>Precio: 16000 Pesos</p>
                <button type="submit" name="Agregar_al_carro"><img src="Imagenes/carrito_compra.png" alt="" height="50px" width="50px"></button>
                <input type="hidden" name="Nombre" value="Mantequilla Rama 500g">
                <input type="hidden" name="Precio" value="16000">
                <input type="hidden" name="Imagen" value="Imagenes/mantequilla.png">
            </form>
        </div>

    </div>
    <form action="carro.php">
        <button type="submit">
        <h1 >Ir al Carrito</h1>
    </button>
    <input type="hidden" value="Ir al carro" />
</form>
    
</body>

</html>