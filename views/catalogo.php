<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Catálogo | Mi Empresa</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header class="header">
        <h1>Mi Empresa</h1>
        <p>Catálogo de Productos</p>
    </header>

    <div class="contenedor-productos">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <h3><?php echo $producto['nombre']; ?></h3>
                <p><?php echo $producto['descripcion']; ?></p>
                <span>$<?php echo number_format($producto['precio'], 2); ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <footer class="footer">
        <p>© 2026 Mi Empresa</p>
    </footer>

</body>

</html>