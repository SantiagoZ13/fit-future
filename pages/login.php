<?php
if($_POST){
    if( ($_POST['correo']=="santiagoz@gmail.com") && ($_POST['password']=="12345")){
        echo "Logueado, OK";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login FitFuture</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../assets/icon-tab.ico" />
</head>
<body>
    <header class="main-header">
        <a  href="#home"><img class="logo" src="../assets/future-logo.png" alt="logo fit Future"></a>
        <nav>
            <ul class="nav-list">
                <li><a class="item-nav" href="../index.html">Inicio</a></li>
                <li><a class="item-nav" href="../index.html">Planes</a></li>
                <li><a class="item-nav" href="../index.html">Nosotros</a></li>
                <li><a class="item-nav" href="../index.html">Contacto</a></li>
                <li><a class="item-nav" href="#">Ingresar</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
            <form class="form-container" action="login.php" method="post">           
                <img src="../assets/future-logo.png" alt="">   
                <input id="email" name="correo" type="email" placeholder="Correo">
                <input id="password" name="password" type="password" placeholder="Contraseña" >
                <button class="button" type="submit">Ingresar</button>
            </form>
    </main>
</body>
</html>