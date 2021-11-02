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
    <title>Informacion De Manipulador</title>
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
                         
                          < <li class="user-profile header-notification">
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
                                          <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
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
                                          <h1 class="m-b-10">Informacion De Manipulador</h1>
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

                                       <form action="ModificarInformacionManipulador.php" method="POST">
           
           <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Identificación</label>
                             <input name="Identificacion" type="text" class="form-control" placeholder="Digite Indentificacion" autofocus required="">
                        </div>
          </div>
          </div>




<div class="card card-body">
   
           <h6>
              <p>----------------------------------------------------------------------------------------------------------------------------------------CONOCIMIENTOS---------------------------------------------------------------------------------------------------------------------------------------------</p>
                                    </h6>  
                                      
           <div class="row">  
              <div class="col-lg-4">
               <div class="form-group">
            <label>¿Conoce las normas de higiene para manipulación de alimentos?</label>
           <select class="form-control" name="Normas"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
          </div>
        </div>

          <div class="col-lg-4">
          <div class="form-group">
            <label>¿Ha recibido  capacitación sobre buenas prácticas de manufactura?</label>
           <select class="form-control" name="Buenas"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
          </div>
        </div>

          <div class="col-lg-4">
            <div class="form-group">
            <label>¿De qué trata la  resolución 2674 del 2013?</label>
            <input name="Resolucion" type="text" class="form-control" placeholder="Digite Informacion" autofocus required="">
          </div>
        </div>
      </div>


        <div class="row">  
              
              <div class="col-lg-4">
               <div class="form-group">
                <label>Qué tipo de contaminación de los alimentos conoce?</label>
                <input name="Contaminacion" type="text" class="form-control" placeholder="Digite Informacion" autofocus required="">
          </div>
        </div>


         <div class="col-lg-4">
               <div class="form-group">
                <label>¿Sabe qué es un alimento inocuo?</label>
                <select class="form-control" name="Inocuo"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
              </div>
        </div>
  <div class="col-lg-4">
               <div class="form-group">
                <label>en caso afirmativo, la explicación ¿Fue correcta?</label>
                 <select class="form-control" name="Afirmativo"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
          </div>
        </div>
           <div class="col-lg-4">
               <div class="form-group">
                <label>¿Considera necesaria una capacitación sobre normas de higiene y manipulación de alimentos para mejorar sus procesos y su negocio?</label>
                <select class="form-control" name="Capacitacion" required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
          </div>
        </div>
       

       
        </div>
         </div>
         <div class="card card-body">


         <h6>
              <p>------------------------------------------------------------------------------------------------------------------------------------------------ACTITUDES---------------------------------------------------------------------------------------------------------------------------------------------</p>
                                    </h6>   
  <div class="row">  
      <div class="col-lg-4">
           <div class="form-group">
               <label>¿Ha renovado el último año su certificado médico?</label>
                <select class="form-control" name="Certificado" required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                       
             </div>
        </div>
           

           
         <div class="col-lg-4">
            <div class="form-group">
                <label>¿Se ha realizado los exámenes para manipuladores de alimentos (KOH de uñas, Frotis de garganta y coprológico?</label>
                     <select class="form-control" name="Cropologico"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
           </div>
       </div>

       <div class="col-lg-4">
           <div class="form-group">
               <label >¿En caso afirmativo ¿hace cuánto?</label>
                   <input name="Caso" type="text" class="form-control" placeholder="Digite Informacion" autofocus required="">
            </div>
      </div>

        <div class="col-lg-4">
             <div class="form-group">
                     <label class="control-label">¿Considera que manipular alimentos con las uñas largas y pintadas puede ser inapropiado?</label>
                          <select class="form-control" name="Alimentos"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
               </div>
        </div>
          <div class="col-lg-4">
                  <div class="form-group">
                        <label class="control-label">¿Considera que el uso de prendas puede afectar negativamente el proceso de manipulación de alimentos?</label>
                                <select class="form-control" name="Prendas"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                               <option value="No">No</option>
                                            </select>
                 </div>
         </div>
    </div>
      </div>
      <div class="card card-body">

          <h6>
              <p>------------------------------------------------------------------------------------------------------------------------------------------------PRACTICAS---------------------------------------------------------------------------------------------------------------------------------------------</p>
                                    </h6>  
  <div class="row"> 
               <div class="col-lg-3">
                   <div class="form-group">
                        <label class="control-label">¿Utiliza bata,  tapa bocas y malla para cubrir el cabello mientras manipula alimentos?</label>
                              <select class="form-control" name="Bata"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                   </div>
               </div> 




            <div class="col-lg-3">
               <div class="form-group">
                        <label class="control-label">¿Manipula alimentos y dinero al mismo tiempo?</label>
                             <select class="form-control" name="Tiempo"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
               </div>
           </div>

             <div class="col-lg-3">
                  <div class="form-group">
                         <label class="control-label">¿Con qué frecuencia se lava las manos para manipular alimentos?</label>
                        <input name="Frecuencia" type="text" class="form-control" placeholder="Digite Informacion" autofocus required="">
                  </div>
            </div>

             <div class="col-lg-3">
                    <div class="form-group">
                          <label class="control-label">Al momento de preparar alimentos ¿retira sus prendas?</label>
                               <select class="form-control" name="Retira"  required="required">
                                                <option>Seleccione Respuesta</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                    </div>
            </div>
</div>
                                <div class="modal-footer">
                                       <input type="submit" name="update" class="btn btn-success"  value="Registrar " style="font-size: 17px;">   
                                </div>

</div>
                           <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>¿Conoce las normas de higiene para manipulación de alimentos?</th>
                                            <th>¿Ha recibido  capacitación sobre buenas prácticas de manufactura?</th>
                                            <th>¿De qué trata la  resolución 2674 del 2013?</th>
                                            <th>Qué tipo de contaminación de los alimentos conoce?</th>
                                            <th>¿Sabe qué es un alimento inocuo?</th>
                                            <th>en caso afirmativo, la explicación ¿Fue correcta?</th>
                                            <th>¿Considera necesaria una capacitación sobre normas de higiene y manipulación de alimentos para mejorar sus procesos y su negocio?</th>
                                            <th>¿Ha renovado el último año su certificado médico?</th>
                                            <th>¿Se ha realizado los exámenes para manipuladores de alimentos (KOH de uñas, Frotis de garganta y coprológico?</th>
                                            <th>¿En caso afirmativo ¿hace cuánto?</th>
                                            <th>¿Considera que manipular alimentos con las uñas largas y pintadas puede ser inapropiado?</th>
                                            <th>¿Considera que el uso de prendas puede afectar negativamente el proceso de manipulación de alimentos?</th>
                                            <th>¿Utiliza bata,  tapa bocas y malla para cubrir el cabello mientras manipula alimentos?</th>
                                            <th>¿Manipula alimentos y dinero al mismo tiempo?</th>
                                            <th>¿Con qué frecuencia se lava las manos para manipular alimentos?</th>
                                            <th>Al momento de preparar alimentos ¿retira sus prendas?</th>



                                          


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $query = "SELECT * FROM manipulador";
                                        $result_tasks = mysqli_query($mysqli, $query);

                                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                            <tr>
                                                <td><?php echo $row['Normas']; ?></td>
                                                <td><?php echo $row['Buenas']; ?></td>
                                                <td><?php echo $row['Resolucion']; ?></td>
                                                <td><?php echo $row['Contaminacion']; ?></td>
                                                <td><?php echo $row['Inocuo']; ?></td>
                                                <td><?php echo $row['Afirmativo']; ?></td>
                                                <td><?php echo $row['Capacitacion']; ?></td>
                                                <td><?php echo $row['Certificado']; ?></td>
                                                <td><?php echo $row['Cropologico']; ?></td>
                                                <td><?php echo $row['Caso']; ?></td>
                                                <td><?php echo $row['Alimentos']; ?></td>
                                                <td><?php echo $row['Prendas']; ?></td>
                                                <td><?php echo $row['Bata']; ?></td>
                                                <td><?php echo $row['Tiempo']; ?></td>
                                                <td><?php echo $row['Frecuencia']; ?></td>
                                                <td><?php echo $row['Retira']; ?></td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>




          
         
       


        </form>
      </div>
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
