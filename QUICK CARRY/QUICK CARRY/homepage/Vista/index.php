<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="icon" href="qc.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <div class="logo">
            <a href="/QUICK CARRY/homepage/index.html"><img src="qc.png" alt="qc"></a>
            <h1>Quick Carry</h1>
        </div>

        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-btn">
            <span></span>
            <span></span>
            <span></span>

        </label>
        <ul class="menu">
            <li><a href="/QUICK CARRY/API AUTENTICACION/Vista/index.html">Inicio Sesion</a></li>
            <li><a href="/QUICK CARRY/homepage/Vista/contacto.php">Contacto</a></li>
            <li><a href="/QUICK CARRY/homepage/Vista/sobreNosotros.html">Sobre Nosotros</a></li>
        </ul>

    </header>

    <section class="hero">
        <div class="hero-content">
            <form action="datosSeguimiento.php" method="POST">
                <h2>Rastrear Paquetes</h2>
                <input type="number" placeholder="Introduzca id de su paquete" name="id_paquete" required>
                <input type="submit" value="Buscar">
            </form>


        </div>
    </section>
    <footer>
        <div class="footer-sections">
            <div class="idioma">
                <h3>Seleccionar idioma</h3>
                <a href="">Español(España)</a>
                <br>
                <a href="">Inglés(US)</a>
            </div>
            <div class="informacion">
                <h3>Quickcarry</h3>
                <p>Telefono: xxxx xxxx</p>
                <p>Direccion: xxxx xxxx</p>
                <p>Contacto: xxxx xxxx</p>
                <p>Whatsapp: xxx xxx xxx</p>
            </div>
            <div class="redes">
                <h3>Redes Sociales</h3>
                <a href="#"><img src="wpp.png" alt="wpp"></a>
                <a href="#"><img src="ig.png" alt="ig"></a>
                <br>
                <a href="#"><img src="fb.png" alt="fb"></a>
                <a href="#"><img src="yt.png" alt="yt"></a>
            </div>
        </div>
        <div class="copy">
            <small>&copy; 2023 <b>Quickcarry</b> - Todos los derechos reservados</small>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>