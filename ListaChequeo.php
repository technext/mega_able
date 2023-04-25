<?php
require "conexion.php";

$Usuario = $_SESSION['Usuario'];
$TipoUsuario = $_SESSION['TipoUsuario'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lista Chequeo</title>
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
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
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
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <h3>
                                <label class="label label-write">MICRO AL PARQUE</label>
                            </h3>


                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-blank.jpg" class="img-radius" alt="User-Profile-Image">
                                    <?php echo $Usuario; ?>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>

                                    <li class="waves-effect waves-light">
                                        <a href="index.php">
                                            <i class="ti-layout-sidebar-left"></i> Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/avatar-blank.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $Usuario; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="index.php"><i class="ti-layout-sidebar-left"></i>Salir</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Inicio</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h1 class="m-b-10">Lista Chequeo</h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="card card-body">

                                    <div class="row">
                                        <form action="insertalistachequeo.php" method="POST" id="formulario">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Nit</label>
                                                        <input type="text" class="form-control" name="Nit" placeholder="Digite el Nit" minlength="8" maxlength="10" pattern="[0-9]{1,12}" title="Solamente se admiten números" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Nombre Del Restaurante </label>
                                                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Digite Nombre del Restaurante" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" required="required" minlength="3" maxlength="30" title="Solamente se admiten caracteres">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿El personal manipulador tiene certificado medico?</label>
                                                        <select class="form-control" name="Certificado" id="Certificado" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿Los manipuladores acreditan cursos en higiene y protección de alimentos?</label>
                                                        <select class="form-control" name="Proteccion" id="Proteccion" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿Los empleados que manipulan alimentos utilizan uniformes adecuados de color claro, limpio y calzado cerrado?</label>
                                                        <select class="form-control" name="Uniformes" id="Uniformes" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿Las manos de los trabajadores se encuentran limpias, son joyas, uñas cortas y sin esmalte?</label>
                                                        <select class="form-control" name="Manos" id="Manos"required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿los manipuladores evitan practicas antihigiénicas tales como comer, fumar, toser, escupir o rascarse.?</label>
                                                        <select class="form-control" name="Practicas" id="Practicas"required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿Los manipuladores se lavan y se desinfectan las manos hasta el codo , cada vez que sea necesario?</label>
                                                        <select class="form-control" name="Lavan" id="Lavan" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿Se evidencian equipos e implementos de seguridad en funcionamiento y ubicados correctamente (extintores, campanas extractoras, barandas, etc.)?</label>
                                                        <select class="form-control" name="Evidencian" id="Evidencian" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿El establecimiento dispone de botiquín bien dotado y ubicado en un lugar visible?</label>
                                                        <select class="form-control" name="Establecimiento" id="Establecimiento" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label">¿Se cuenta con equipos de protección personal en función de las actividades realizadas ej: guantes de malla metálica, chaquetas, etc.?</label>
                                                        <select class="form-control" name="Equipos" id="Equipos" required="required">
                                                            <option>Seleccione</option>
                                                            <option value="5">Cumple</option>
                                                            <option value="0">No Cumple</option>
                                                            <option value="3">Cumple Parcialmente</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="number" name="Total" id="Total" required="required" placeholder="TOTAL" readonly>
                                                    <input id="BtnCalcularCorte1" type="button" class="btn btn-success" value="Calcular" onclick="CalcularTotalTabla()">
                                                </div>


                                            </div>
                                        </div>
                                    </div>







                                    <div class="modal-footer">
                                        <button type="submit" name="insertalistachequeo" class="btn btn-success"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
                                        <button type="button" id="btnLimpiar" class="btn btn-danger"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                                        
                                    </div>
                                </form>
                            </div>






                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <td>Codigo</td>
                                                <th>Nit</th>
                                                <th>Nombre</th>
                                                <th>¿El personal manipulador tiene certificado medico?</th>
                                                <th>¿Los manipuladores acreditan cursos en higiene y protección de alimentos?</th>
                                                <th>¿Los empleados que manipulan alimentos utilizan uniformes adecuados de color claro, limpio y calzado cerrado</th>
                                                <th>¿Las manos de los trabajadores se encuentran limpias, son joyas, uñas cortas y sin esmalte?</th>
                                                <th>¿Los manipuladores evitan practicas antihigiénicas tales como comer, fumar, toser, escupir o rascarse?</th>
                                                <th>¿Los manipuladores se lavan y se desinfectan las manos hasta el codo , cada vez que sea necesario?</th>
                                                <th>¿Se evidencian equipos e implementos de seguridad en funcionamiento y ubicados correctamente (extintores, campanas extractoras, barandas, etc.)?</th>
                                                <th>¿El establecimiento dispone de botiquín bien dotado y ubicado en un lugar visible?</th>
                                                <th>¿Se cuenta con equipos de protección personal en función de las actividades realizadas ej: guantes de malla metálica, chaquetas, etc.?</th>



                                                <th>Acción</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = "SELECT * FROM listachequeo";
                                            $result_tasks = mysqli_query($mysqli, $query);

                                            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                <tr>

                                                    <td><?php echo $row['Codigo']; ?></td>
                                                    <td><?php echo $row['Nit']; ?></td>
                                                    <td><?php echo $row['Nombre']; ?></td>
                                                    <td><?php echo $row['Certificado']; ?></td>
                                                    <td><?php echo $row['Proteccion']; ?></td>
                                                    <td><?php echo $row['Uniformes']; ?></td>
                                                    <td><?php echo $row['Manos']; ?></td>
                                                    <td><?php echo $row['Practicas']; ?></td>
                                                    <td><?php echo $row['Lavan']; ?></td>
                                                    <td><?php echo $row['Evidencian']; ?></td>
                                                    <td><?php echo $row['Establecimiento']; ?></td>
                                                    <td><?php echo $row['Equipos']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>



                        <!-- task, page, download counter  end -->

                        <!--  sale analytics start -->



                        <!--  project and team member end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
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
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script src="CalcularPromedio.js"></script>


    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>