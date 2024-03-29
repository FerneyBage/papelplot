<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
    <link rel="stylesheet" type="text/css" href="CSS/userLog.css">
    <link rel="stylesheet" type="text/css" href="CSS/detalleArticulo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/378e7ea857.js" crossorigin="anonymous"></script>
    <script src="js/librerias/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/logica/detalleArticulo.js"></script>
    <script src="js/logica/validarDesdeVista.js"></script>
    <script src="js/logica/pop-upLogin.js"></script>
    <script src="js/logica/updateIndex.js"></script>
    <script src="js/logica/realizarBusquedaIndex.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Papelplot</title>
</head>

<body>
<header>
        <div class="container header-content">
            <a href="inicio.html" class="logo">
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

                    <button type="button" class="btlogin">
                        <i class="iconNav far fa-user"></i>
                    </button>

                    <span>|</span>

                    <a href="">
                        <!-- <img class ="iconItem" src="vista/img/107831.png" alt="carrito"> -->
                        <i class="iconNav fas fa-shopping-cart"></i>
                    </a>

                    <span>|</span>

                    <a href="https://wa.me/573135493346" target="_blank">
                        <!-- <img class ="iconItem" src="vista/img/whats.png" alt="contacto"> -->
                        <i class="iconNav fab fa-whatsapp"></i>
                    </a>
                </div>
            </nav>
        </div>

    </header>

    <div class="pop-up">
        <div class="pop-up-wrap">
            <div class="pop-up-title" id="pop-title">
                <h2>Papelplot</h2>
                <P> Papeleria al por mayor y al detal</P>
            </div>
            <div class="pop-up-login">
                <div class="rayitah"></div>
                <i class="far fa-times-circle" id="closepop"></i>

                <div class="tlogin">
                    <h2> Inicia sesión en Papelplot</h2>
                    <P> Por favor ingresa tus datos en el siguiente formulario</P>
                    <form method="post" action="../controlador/accion/act_login.php" id="loginForm">
                        <input name="correo" class="login-email" placeholder="Escriba su correo electronico"
                            id="correoini">
                        <input name="password" type="password" class="login-pass" placeholder="Digite su contraseña"
                            id="passini">
                        <button class="ini-sesion" type="submit">Iniciar sesión</button>
                        <button id="btnRegistro" class="ini-registrate">Regístrate</button>
                    </form>
                    <a href="#">¿Olvidaste tu contraseña? recuperala aquí</a><br>
                    <a href="#"><i class="iconlog fab fa-google"></i></a>
                    <a href="#"><i class="iconlog fab fa-facebook"></i></a>
                </div>

                <div class="tRegistro">
                    <h2> Regístrate en Papelplot</h2>
                    <P> Por favor ingresa tus datos en el siguiente formulario</P>
                    <form method="post" action="../controlador/accion/act_registrar.php" id="registForm">
                        <input name="correo" class="login-email" placeholder="Escriba su correo electronico"
                            id="correoregis">
                        <input name="password" type="password" class="login-pass" placeholder="Digite su contraseña"
                            id="passregis">
                        <input name="password2" type="password" class="login-pass" placeholder="Confirme su contraseña"
                            id="pass2regis">
                        <input name="primerNombre" type="text" class="login-email" placeholder="Digite su primer nombre"
                            id="fnameregis">
                        <input name="segundoNombre" type="text" class="login-email"
                            placeholder="Digite su segundo nombre, opcional" id="mnameregis">
                        <input name="primerApellido" type="text" class="login-email"
                            placeholder="Digite su primer apellido" id="ape1regis">
                        <input name="segundoApellido" type="text" class="login-email"
                            placeholder="Digite su segundo apellido" id="ape2regis">
                        <input name="telefono" type="number" class="login-email" placeholder="Digite su teléfono"
                            id="tel">
                        <button id="btnRegistrar" class="ini-registrate" type="submit">Regístrarse</button>
                    </form>
                </div>

                <div class="rayitah"></div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="card mb-3 mt-3 ">
                    <div class="row g-0">
                        <div class="col-md-5 p-5">
                            <img id="imgArt" src="img/cuadernoFlamenco.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-md-7 d-flex flex-column">
                            <div class="card-body">
                                <h5 class="card-title" id="nombreArticulo"></h5>
                                <h6 class="card-subtitle mb-3 mt-2" id="puntuación"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h6>
                                <h6 class="card-subtitle mb-2">Descripción</h6>
                                <p class="card-text" id="descripcion"></p>
                                <h4 id="precio"></h4>
                            </div>
                            <div class="card-footer d-flex m-0">
                                <a id="addCarrito" href="#" class="btn btn-success">Agregar al carrito</a>
                                <select class="form-select" aria-label="Default select example" id="nItems">
                                    <option selected id="max"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2>Comentarios</h2>
                </div>
                <div class="col-12 mt-4" id="comentarios">
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