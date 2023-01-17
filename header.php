<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BLACKROOM - Hotel cultural</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="icon" 
      type="image/png" 
      href="img/blackroom-icono.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="cabecera">
        <div class="cabecera-contenedor">
            
            <a class="logo" href="index.php">
                <img class="logo-imagen" src="img/blackroom-logo-negro.svg" alt="Logo de BLackroom">
            </a>

            <div class="cabecera-burguer">

                <div></div>
                <div></div>
                <div></div>
            
            </div>

            <nav class="cabecera-nav">
                <ul class="menu">
                    <li class="menu-item">
                        <a class="menu-enlace <?php if($active == "index"){echo   'active';}?>" href="index.php">inicio</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-enlace <?php if($active == "theroom"){echo   'active';}?>" href="the-room.php">the room</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-enlace <?php if($active == "habitaciones"){echo 'active';}?>" href="habitaciones.php">habitaciones</a>
                    </li>
                    <li class="menu-item ">
                        <a class="menu-enlace <?php if($active == "reservar"){echo 'active';}?>" href="reservar.php">reservar</a>
                    </li>
                    <li class="menu-item ">
                        <a class="menu-enlace <?php if($active == "nosotros"){echo 'active';}?>" href="nosotros.php">nosotros</a>
                    </li>
                </ul>  
            </nav>
        </div><!-- cabecera-contenedor -->
    </header>
    
    <main>