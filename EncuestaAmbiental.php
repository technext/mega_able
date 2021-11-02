<?php
require "conexion.php";
session_start();

if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}

$Usuario = $_SESSION['Usuario'];
$TipoUsuario = $_SESSION['TipoUsuario'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Encuesta Componente Ambiental</title>
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
                                  <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
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
                                  <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
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
                                          <h1 class="m-b-10">Encuesta Componente Ambiental</h1>
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

                            <form action="insertaencuestaambiental.php" method="POST">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">Nombre</label></b>
                                            <input type="text" class="form-control" name="Nombre"
                                            placeholder="Digite Nombre del encuestado" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            required="required" minlength="3" maxlength="30" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">Apellidos</label></b>
                                            <input type="text" class="form-control" name="Apellidos"
                                            placeholder="Digite Apellidos del Encuestado" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            required="required" minlength="3" maxlength="30" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                     <div class="col-lg-4">
                                    <div class="form-group">
                                        <b><label>Fecha De Registro</label></b>
                                        <input type="date" name="FechaRegistro" class="form-control"autofocus required="">
                                    </div>   
                                </div>
                                 
                                     
                                </div>
                                <br>
                                <br>
                                    
                                    <div class="row">
                                     <div class="col-lg-4">
                                        <div class="form-group">
                                           <b> <label class="control-label">¿Tiene alguna idea de que es abono orgánico?</label></b>
                                            <select class="form-control" name="Abono"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">¿Conoce usted cuales son los desechos orgánicos que podemos utilizar en el hogar?</label></b>
                                            <select class="form-control" name="DesechosOrganicos"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>  

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                           <b> <label class="control-label">¿Usted considera que es benéfico la implementacion del abono orgánico para el medio ambiente?</label></b>
                                            <select class="form-control" name="ImplementacionAbono"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                                    <div class="row"> 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">¿Usted en el hogar elimina los desechos orgánicos a la basura?</label></b>
                                            <select class="form-control" name="EliminarDesechos"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">¿Usted utiliza los desechos orgánicos para elaborar abono doméstico y mejorar el medio ambiente de su comunidad?</label></b>
                                            <select class="form-control" name="ElaborarAbono"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">¿Le gustaría implementar el abono orgánico para el fortalecimiento de sus cultivos, de sus jardines o huertas caseras?</label></b>
                                            <select class="form-control" name="AbonoOrganico"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                 </div>
                                    <div class="row">
                                     <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">¿Usted conoce los beneficios que recibe el suelo al aplicar el abono orgánico?</label></b>
                                            <select class="form-control" name="BeneficiosAbono"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <b><label class="control-label">¿Sabia que uno de los principales problemas de la contaminación ambiental esta relacionado con la no utilización de los desechos</label></b>
                                            <select class="form-control" name="ContaminacionAmbiental"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>   
                                     <div class="col-lg-4">
                                        <div class="form-group">
                                           <b> <label class="control-label">¿Estaría dispuesto a desarrollar acciones para proteger el medio ambiente?</label></b>
                                            <select class="form-control" name="ProtegerAmbiente"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>  
                                   
                                <div class="modal-footer">
                                    <button type="submit" name="insertaencuestaambiental" class="btn btn-success"><i
                                            class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
                                    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                                            class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                                </div>
                                    </form>
                                </div>
                            </div>
                    </div>
               </div>
                        <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Fecha De Registro</th>
                      <th>¿Tiene alguna idea de que es abono orgánico?</th>
                      <th>¿Conoce usted cuales son los desechos orgánicos que podemos reutilizar en el hogar?</th>
                      <th>¿Usted considera que es benéfico la implementacion del abono orgánico para el medio ambiente?</th>
                      <th>¿Usted en el hogar elimina los desechos orgánicos a la basura?</th>
                      <th>¿Usted utiliza los desechos orgánicos para elaborar abono doméstico y mejorar el medio ambiente de su comunidad?</th>
                      <th>¿Le gustaría implementar el abono orgánico para el fortalecimiento de sus cultivos, de sus jardines o huertas caseras?</th>
                      <th> ¿Usted conoce los beneficios que recibe el suelo al aplicar el abono orgánico?</th>
                      <th>¿Sabia que uno de los principales problemas de la contaminación ambiental esta relacionado con la no utilización de los desechos</th>
                      <th>¿Estaría dispuesto a desarrollar acciones para proteger el medio ambiente?</th>
                                             



                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $query = "SELECT * FROM encuestaambiental";
                    $result_tasks = mysqli_query($mysqli, $query);

                    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                      <tr>
                                                <td><?php echo $row['Codigo']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['Apellidos']; ?></td>
                        <td><?php echo $row['FechaRegistro']; ?></td>
                        <td><?php echo $row['Abono']; ?></td>
                        <td><?php echo $row['DesechosOrganicos']; ?></td>
                        <td><?php echo $row['ImplementacionAbono']; ?></td>
                        <td><?php echo $row['EliminarDesechos']; ?></td>
                        <td><?php echo $row['ElaborarAbono']; ?></td>
                        <td><?php echo $row['AbonoOrganico']; ?></td>
                        <td><?php echo $row['BeneficiosAbono']; ?></td>
                        <td><?php echo $row['ContaminacionAmbiental']; ?></td>
                        <td><?php echo $row['ProtegerAmbiente']; ?></td>
                                                
                        
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
