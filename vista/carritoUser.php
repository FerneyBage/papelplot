<?php
session_start();
if (!isset($_SESSION['ID_USUARIO'])) {
    header("Location: ../index.html");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
    <link rel="stylesheet" type="text/css" href="CSS/userLog.css">
    <link rel="stylesheet" type="text/css" href="CSS/carrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/378e7ea857.js" crossorigin="anonymous"></script>
    <script src="js/librerias/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/logica/carrito.js"></script>
    <script src="js/logica/realizarBusqueda.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Papelplot</title>
</head>

<body>
    <header>
        <div class="container header-content">
            <a href="userLogged.php" class="logo">
                <img src="https://www.papelplot.net/images/logo-papelplot.png" alt="logo-papelplot">
            </a>

            <div class="Search input-search">
                <form action="" method="POST">
                    <input id="abuscar" class="enter" type="search" placeholder="Buscar...">
                    <button id= "buscar" class="bSearch" type="button">
                        Buscar
                    </button>
                </form>
            </div>

            <nav>
                <div class="navItem nav-content">

                    <div class="userinfo">
                        <button type="button" class="btUser">
                            <i class="iconNav far fa-user"></i>
                        </button>

                        <div class="userMenu">
                            <ul>
                                <li class="userName">
                                    <h4>
                                        Hola,
                                        <?php if (isset($_SESSION['ID_USUARIO']))
                                            echo $_SESSION['NOMBRE_USUARIO'];
                                        ?>
                                    </h4>
                                </li>
                                <li><a href="micuenta.php"> Mi cuenta</a></li>
                                <?php if (isset($_SESSION['ID_USUARIO']) && ($_SESSION['ADMIN'] == 1))
                                        echo '<li><a href="AdminLogged.php"> Administrar</a></li>';
                                ?>
                                <li><a href="#"> Compras</a></li>
                                <li id="logout"><a href="../controlador/accion/act_logout.php"> Salir</a></li>
                            </ul>
                        </div>
                    </div>
                    <span>|</span>
                    <a href="carritoUser.php"><i class="iconNav fas fa-shopping-cart"></i></a>
                    <span>|</span>
                    <a href="https://wa.me/573135493346" target="_blank"><i class="iconNav fab fa-whatsapp"></i></a>
                </div>
            </nav>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row mt-5" id="artCarrito">
                <h1 class="mt-2"> Mi carrito</h1>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 g-4" id="tiraCarrito">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 mb-2">
                    <span class="precio">Precio Total: &nbsp</span><span class="precio" id="pTotal"></span>
                </div>
                <div>
                    <div class="col-12">
                        <button type="button" class="btn btn-success btn-lg">Continuar compra</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="footer-logo">
            <img src="img/logo-papelplot.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h4>Barranquilla</h4>
                    <ul>
                        <li>PBX : 386 1001</li>
                        <li>Móvil: (313) 549-3346</li>
                        <li>Ventas@papelplot.net</li>

                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h4>Valledupar</h4>
                    <ul>
                        <li>Tel: 570-2570</li>
                        <li>Cel: 320-599-2053</li>
                        <li>Valledupar@papelplot.net</li>

                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h4>Cartagena</h4>
                    <ul>
                        <li>Tel: 692-8010</li>
                        <li>Cel: 320-514-5796</li>
                        <li>Cartagena@papelplot.net</li>

                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <h4>Montería</h4>
                    <ul>
                        <li>Tel: 789-0997</li>
                        <li>Cel: 314-571-8868</li>
                        <li>Monteria@papelplot.net</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>