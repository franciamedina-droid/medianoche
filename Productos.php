<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="misitiof/imgfares/images-removebg-preview.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="Estiloscssf/dcoloresf.css">
    <link rel="stylesheet" href="Estiloscssf/diseñocssf.css">

    <title>Inventario-Fares</title>
</head>

<body>

<header id="titulo1" class="fcolor-d5">
    <h1>Ediciones Fares</h1>
</header>

<nav class="fcolor-l4">
    <ul>
        <li><a href="#">Principal</a></li>
        <li><a href="#">Libros</a></li>

        <li class="f-desplegable">
            <a href="#" class="desplegable">Inventario</a>

            <div class="cont-desplegable">
                <a href="cproductos.php">Crear productos</a>
                <a href="#">Consultar producto</a>
            </div>
        </li>

        <li><a href="#">Contacto</a></li>
    </ul>
</nav>

<section class="fcolor-l1">

    <div>
        <h2>Inventario</h2>
    </div>

    <form class="fcolor-l5"
          action="Guardar.php"
          method="post"
          enctype="multipart/form-data"
          autocomplete="off">

        <div>
            <label>
                Codigo:
                <input type="text"
                       name="Codigo"
                       id="Codigo"
                       pattern="[0-9]{3,}"
                       placeholder="Ingresar solo numeros"
                       size="12"
                       autofocus
                       required>
            </label>

            <label>
                Producto:
                <input type="text"
                       name="Nom_Producto"
                       id="Nom_Producto"
                       pattern="[A-Za-z\s]{3,100}"
                       placeholder="Ingresar solo letras"
                       size="50"
                       required>
            </label>
        </div>

        <div>
            <label>
                Costo:
                <input type="text"
                       name="Costo"
                       id="Costo"
                       pattern="[0-9]+([,/.][0-9]+)?">
            </label>

            <label>
                Porcentaje de ventas:
                <input type="text"
                       name="Porc_Venta"
                       id="Porc_Venta"
                       maxlength="3"
                       size="4">
            </label>
        </div>

        <div>
            <label>
                Precio de venta:
                <input type="text"
                       name="Precio_Venta"
                       id="Precio_Venta"
                       readonly>
            </label>

            <label>
                Fecha:
                <input type="date"
                       name="Fecha"
                       id="Fecha">
            </label>
        </div>

        <div>
            <img src=""
                 width="200"
                 alt="Imagen del producto">
        </div>

        <div>
            <input type="file"
                   name="simagen"
                   id="simagen">
        </div>

        <input type="submit" value="Guardar">

    </form>

</section>

<footer class="fcolor-d5">
    <p>Derechos Reservados &copy; 2004-2026</p>
</footer>

</body>
</html>