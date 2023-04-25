<?php

require "conexion.php";

session_start();
if (isset($_SESSION['Identificacion'])) {
    header("Location: principal.php");
}
if ($_POST) {

    $Usuario = $_POST['Usuario'];
    $TipoUsuario = $_POST['TipoUsuario'];
    $Contraseña = $_POST['Contraseña'];

    $sql = "SELECT Contraseña, Identificacion, Nombres, TipoUsuario, Usuario FROM usuario WHERE Usuario='$Usuario'";
    //echo $sql;
    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;

    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['Contraseña'];
        $usuario_bd = $row['Usuario'];
        $tipousuario_bd = $row['TipoUsuario'];
        
        $pass_c = ($Contraseña);
        $usuario_c = ($Usuario);
        $tipousuario_c = ($TipoUsuario);
        
        if ($usuario_bd != $usuario_c) {
            echo "Verifique el usuario";
        }

        if ($password_bd == $pass_c and $usuario_bd == $usuario_c and $tipousuario_bd == $tipousuario_c) {

            $_SESSION['Identificacion'] = $row['Identificacion'];
            $_SESSION['Nombres'] = $row['Nombres'];
            $_SESSION['TipoUsuario'] = $row['TipoUsuario'];
            $_SESSION['Usuario'] = $row['Usuario'];


            header("Location: principal.php");
        } else {

            echo "Verifique las credenciales";
        }
    } else {
        echo "Verifique tipo de usuario";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesión en Micro Al Parque</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body themebg-pattern="theme1">
      <!-- Pre-loader start -->
      <div class="theme-loader">
          <div class="loader-track">
              <div class="preloader-wrapper">
                  <div class="spinner-layer spinner-blue">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
                  <div class="spinner-layer spinner-red">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
                  
                  <div class="spinner-layer spinner-yellow">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
                  
                  <div class="spinner-layer spinner-green">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Pre-loader end -->

      <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                    <form class="md-float-material form-material">
                        <div class="text-center">
                            
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <p><img src="logo.jpeg" width="400" height="250">
                                            <h3 class="text-center">Iniciar Sesión</h3>
                                        </div>
                                    </div>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress"><b>Usuario</b></label><input class="form-control py-4" name="Usuario" type="text" placeholder="Ingrese Usuario" required="" /></div>

                                        <div class="form-group"><label class="small mb-1" for="TipoUsuario"><b>Tipo de Usuario</b></label><input class="form-control py-4" name="TipoUsuario" type="text" placeholder="Ingrese tipo de Usuario" required="" /></div>


                                        <div class="form-group"><label class="small mb-1" for="inputPassword"><b>Contraseña</b></label><input class="form-control py-4" id="inputPassword" name="Contraseña" type="password" placeholder="Ingrese Contraseña" required="" /></div>
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-0 mb-0"><a class="small" href="password.html">Olvidaste la Contraseña?</a>
                                        </div>
                                        <br>
                                        <div>
                                            <button type="submit" id="alerta" class="btn btn-primary">Iniciar Sesión</button>
                                        </div>
                                        
                                        
                                        
                                    </form>
                                    
                                    <hr/>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of col-sm-12 -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container-fluid -->
        </section>
        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
