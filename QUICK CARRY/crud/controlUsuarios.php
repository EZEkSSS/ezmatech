<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Control usuarios</title>
    <link rel="icon" href="qc.png">
</head>
<header>

    <div class="logo">
        <a href="index.php"><img src="qc.png" alt="qc"></a>
        <h1>Quick Carry</h1>
    </div>


    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="menu-btn">
        <span></span>
        <span></span>
        <span></span>

    </label>
    <ul class="menu">
        <li><a href="controlUsuarios.php">Control de usuarios</a></li>
        <li><a href="controlCamiones.php">Control de camiones</a></li>
        <li><a href="controlAlmacenes.php">Control de almacenes</a></li>
    </ul>

</header>
<body>
    <h1>Control de usuarios</h1>
    <div class="botones">
        <form>
            <input type="button" value="Añadir Usuario" onclick="window.location.href='altasUsuario.php'">
            <input type="button" value="Cambio estado" onclick="window.location.href='bajasUsuario.php'">
            <input type="button" value="Modificar Usuario" onclick="window.location.href='modificarUsuario.php'">
            <input type="button" value="Ver Usuarios" onclick="window.location.href='datosUsuario.php'">
            <input type="button" value="Volver" onclick="window.location.href='index.php'">
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>