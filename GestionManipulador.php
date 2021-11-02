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
  <title>Gestion De Manipulador</title>
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
                        <h1 class="m-b-10">Gestion De Manipulador</h1>
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

                    <form action="insertamanipulador.php" method="POST">  
                      <div class="row">  
                        <div class="col-lg-4">
                          <div class="form-group">
                           <b> <label class="control-label">Identificación</label></b>
                           <input type="text" class="form-control" name="Identificacion"
                           placeholder="Digite Identificación" minlength="8" maxlength="10"
                           pattern="[0-9]{1,10}" title="Solamente se admiten números"
                           required="required">
                         </div>
                       </div>
                       <div class="col-lg-4">
                        <div class="form-group">
                          <b><label class="control-label">Nombres</label></b>
                          <input type="text" class="form-control" name="Nombres"
                          placeholder="Digite Nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" 
                          required="required" minlength="3" maxlength="70" title="Solamente se admiten caracteres">
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="form-group">
                          <b><label class="control-label">Apellidos</label></b>
                          <input type="text" class="form-control" name="Apellidos"
                          placeholder="Digite Apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" 
                          required="required" minlength="3" maxlength="70" title="Solamente se admiten caracteres">
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-lg-4">
                        <div class="form-group">
                         <b> <label class="control-label">Sexo</label></b>
                         <select class="form-control" name="Sexo"  required="required">
                          <option>Seleccione el Sexo</option>
                          <option value="M">M</option>
                          <option value="F">F</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                       <b> <label class="control-label">Celular</label></b>
                       <input type="text" class="form-control" name="Celular"
                       placeholder="Digite el Celular" minlength="10" maxlength="10"
                       pattern="[0-9]{1,10}" title="Solamente se admiten números"
                       required="required">
                     </div>
                   </div>
                   
                   <div class="col-lg-4">
                    <div class="form-group">
                      <b><label class="control-label">Correo electrónico</label></b>
                      <input class="form-control" type="email" name="Correo"
                      placeholder="Digite el Correo electrónico" required="required">
                    </div>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-lg-4">
                    <div class="form-group">
                     <b> <label class="control-label">Nivel Educativo</label></b>
                     <select class="form-control" name="NivelEducativo" required="required">
                      <option>Seleccione </option>
                      <option>Primaria</option>
                      <option>Secundaria</option>
                      <option>Bachillerato</option>
                      <option>Tecnico</option>
                      <option>Tecnologo</option>
                      <option>Profesional</option>
                      
                    </select>
                  </div>
                </div>
                
                <div class="col-lg-4">
                  <div class="form-group">
                   <b> <label class="control-label">Experiencia Laboral</label></b>
                   <select class="form-control" name="ExperienciaLaboral" required="required">
                    <option>Seleccione </option>
                    <option>entre 5 y 6 meses</option>
                    <option>entre 8 y 10 meses</option>
                    <option>11 meses</option>
                    <option>1 Año</option>
                    <option>2 Años</option>
                    <option>3 Años</option>
                    <option>Otros</option>
                    
                  </select>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <b><label class="control-label">Estado civil</label></b>
                  <select class="form-control" name="EstadoCivil" required="required">
                    <option>Seleccione un estado civil</option>
                    <option>Soltero/a</option>
                    <option>Casado/a</option>
                    <option>Unión libre</option>
                    <option>Separado/a</option>
                    <option>Divorciado/a</option>
                    <option>Viudo/a</option>
                  </select>
                </div>
              </div> 

            </div>
            <div class="row"> 
              <div class="col-lg-4">
                <div class="form-group">
                  <b><label class="control-label">Dirección de domicilio</label></b>
                  <input type="text" class="form-control" name="Direccion"
                  placeholder="Digite la Dirección" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}" 
                  required="required" minlength="10" maxlength="60">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                 <b> <label class="control-label">Ciudad</label></b>
                 <input type="text" class="form-control" name="Ciudad"
                 placeholder="Digite la ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                 required="required" minlength="3" maxlength="20" title="Solamente se admiten caracteres">
               </div>
             </div> 
             <div class="col-lg-4">
              <div class="form-group">
                <b><label class="control-label">Departamento</label> </b>
                <input type="text" class="form-control" name="Departamento"
                placeholder="Digite el Departamento" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                required="required" minlength="4" maxlength="20" title="Solamente se admiten caracteres">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
               <b> <label class="control-label">Pais</label> </b>
               <input type="text" class="form-control" name="Pais"
               placeholder="Digite el Pais" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
               required="required" minlength="3" maxlength="20" title="Solamente se admiten caracteres">
             </div>
           </div>
         </div>

         <div class="modal-footer">
          <button type="submit" name="insertamanipulador" class="btn btn-success"><i
            class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
            <button type="button" id="btnLimpiar" class="btn btn-danger"><i
              class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Identificacion</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Sexo</th>
              <th>Celular</th>
              <th>Correo</th>
              <th>Nivel Educativo</th>
              <th>Experiencia Laboral</th>
              <th>Estado Civil</th>
              <th>Direccion De Domicilio</th>
              <th>Ciudad</th>
              <th>Departamento</th>
              <th>Pais</th>

              <th>Acción</th>


            </tr>
          </thead>
          <tbody>

            <?php
            $query = "SELECT * FROM manipulador";
            $result_tasks = mysqli_query($mysqli, $query);

            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
              <tr>
                <td><?php echo $row['Identificacion']; ?></td>
                <td><?php echo $row['Nombres']; ?></td>
                <td><?php echo $row['Apellidos']; ?></td>
                <td><?php echo $row['Sexo']; ?></td>
                <td><?php echo $row['Celular']; ?></td>
                <td><?php echo $row['Correo']; ?></td>
                <td><?php echo $row['NivelEducativo']; ?></td>
                <td><?php echo $row['ExperienciaLaboral']; ?></td>
                <td><?php echo $row['EstadoCivil']; ?></td>
                <td><?php echo $row['Direccion']; ?></td>
                <td><?php echo $row['Ciudad']; ?></td>
                <td><?php echo $row['Departamento']; ?></td>
                <td><?php echo $row['Pais']; ?></td>
                
                
                <td>
                  <a href="EditarManipulador.php?Identificacion=<?php echo $row['Identificacion'] ?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                  <a href="EliminarManipulador.php?Identificacion=<?php echo $row['Identificacion'] ?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>
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
