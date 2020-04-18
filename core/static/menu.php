<div id="navbar" class="navbar navbar-default">
    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar"> <span class="sr-only">Toggle sidebar</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="navbar-header pull-left">
            <a href="index.php?do=panel" class="navbar-brand"> <small>
						 
                
                
             
                
                <i class="ace-icon fa fa-user-md red"></i>
								
							ProSalud (Conectado como: <?php 
                                switch ($data['nivel']) {
                                    case 1:
                                        echo "Administrador";
                                        break;
                                    case 2:
                                        echo "Corredor";
                                        break;
                                    case 3:
                                        echo "Usuario";
                                        break;
                                }
                            ?>)
						</small> </a>
        </div>
        <!--menu-->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Foto de  <?php echo $data['nombre'] ?>" />
						<span class="user-info">Bienvenid@:</span>		
                        <span class="user-info"><?php echo $data['nombre']?> </span>
                        <i class="ace-icon fa fa-caret-down"></i>

							</a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <!--<li>
                            <a href="#"> <i class="ace-icon fa fa-cog"></i> Configuración </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ace-icon fa fa-user"></i> Perfil </a>
                        </li>-->
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?do=salir"> <i class="ace-icon fa fa-power-off"></i> Cerrar sesión </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.navbar-container -->
</div>
<div class="main-container" id="main-container">
    <div id="sidebar" class="sidebar responsive">
        <ul class="nav nav-list">
            <li class="active">
                <a href="index.php?do=panel"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text">Panel de control</span> </a> <b class="ardata"></b> </li>
        </ul>
        <?php 
                                switch ($data['nivel']) {
                                    case 1:
                                        // si somos admin imprimomos menu de admin.
                                    echo '
        <!--CONFIG DEL ADMINISTRADOR-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa  fa-cogs"></i> <span class="menu-text"> ADMINISTRACION</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addaseguradora"> <i class="menu-icon fa fa-caret-right"></i> Agregar aseguradora</a> <b class="ardata"></b> </li>
                </ul>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listaaseguradora"> <i class="menu-icon fa fa-caret-right"></i> Lista Aseguradoras</a> <b class="ardata"></b> </li>
                </ul>
                 <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listacitas"> <i class="menu-icon fa fa-caret-right"></i> Lista Citas</a> <b class="ardata"></b> </li>
                </ul>
                  <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listausuarios"> <i class="menu-icon fa fa-caret-right"></i> Lista Usuarios</a> <b class="ardata"></b> </li>
                </ul>
                
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listaservicios"> <i class="menu-icon fa fa-caret-right"></i> Lista Servicios</a> <b class="ardata"></b> </li>
                </ul>
                
            </li>
        </ul>
    
        <!--PANEL CORREDOR-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-paper-plane"></i> <span class="menu-text"> Panel Corredor</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addcorredor"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listacorredor"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> 
                    </li>
                </ul>
            </li>
        </ul>
        <!--PANEL ASEGURADO-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user"></i> <span class="menu-text"> Panel Asegurados</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addasegurado"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listaasegurado"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL BENEFICIARIO-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user-o"></i> <span class="menu-text"> Panel beneficiarios</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addbeneficiario"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listabeneficiario"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL POLIZAS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file-text"></i> <span class="menu-text"> Panel Polizas</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addtpoliza"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=tpoliza"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL SEGUROS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-handshake-o"></i> <span class="menu-text"> Panel Seguros</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addtseguro"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=tseguro"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
           <!--PANEL GASTOS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-money"></i> <span class="menu-text"> Panel Gastos</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addgastos"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listagastos"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
             <!--PANEL REEMBOLSOS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-credit-card"></i> <span class="menu-text"> Panel Reembolsos</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addreembolsos"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listareembolsos"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
                     <!--PANEL SERVICIOS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa  fa-cart-plus"></i> <span class="menu-text"> Panel Servicios</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addservicio"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                          <li class="">
                        <a href="index.php?do=listaservicios"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL reportes-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa  fa-download"></i> <span class="menu-text"> Reportes</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=reportes"> <i class="menu-icon fa fa-caret-right"></i>Financiero </a> <b class="ardata"></b> </li>
                </ul>
                         <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listaaseguradora"> <i class="menu-icon fa fa-caret-right"></i>Aseguradoras</a> <b class="ardata"></b> </li>
                </ul>
                 <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listacitas"> <i class="menu-icon fa fa-caret-right"></i>Citas</a> <b class="ardata"></b> </li>
                </ul>
                  <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listausuarios"> <i class="menu-icon fa fa-caret-right"></i>Usuarios sistema</a> <b class="ardata"></b> </li>
                </ul>
                
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listaservicios"> <i class="menu-icon fa fa-caret-right"></i>Servicios</a> <b class="ardata"></b> </li>
                </ul>
                
                  <ul class="submenu">
                      <li class="">
                        <a href="index.php?do=listacorredor"> <i class="menu-icon fa fa-caret-right"></i>Corredores</a> <b class="ardata"></b> 
                    </li>
                </ul>
                
                  <ul class="submenu">
                      <li class="">
                        <a href="index.php?do=listagastos"> <i class="menu-icon fa fa-caret-right"></i>Gastos Asegurado</a> <b class="ardata"></b> 
                    </li>
                </ul>
                
                  <ul class="submenu">
                      <li class="">
                        <a href="index.php?do=listareembolsos"> <i class="menu-icon fa fa-caret-right"></i>Reembolsos</a> <b class="ardata"></b> 
                    </li>
                </ul>
                 <ul class="submenu">
                      <li class="">
                        <a href="index.php?do=listafacturas"> <i class="menu-icon fa fa-caret-right"></i>Facturas</a> <b class="ardata"></b> 
                    </li>
                </ul>
              
                
                
                
            </li>
        </ul>
        
        
        ';
                                        break;
                                    case 2:
                                    // si somos corredor imprimimos menu de corredor
                                    echo '<!--CONFIG DEL ADMINISTRADOR-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa  fa-cogs"></i> <span class="menu-text"> ADMINISTRACION</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addaseguradora"> <i class="menu-icon fa fa-caret-right"></i> Agregar aseguradora</a> <b class="ardata"></b> </li>
                </ul>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listaaseguradora"> <i class="menu-icon fa fa-caret-right"></i> Aseguradoras</a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL CORREDOR-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-paper-plane"></i> <span class="menu-text"> Panel Corredor</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addcorredor"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listacorredor"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL ASEGURADO-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user"></i> <span class="menu-text"> Panel Asegurados</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addasegurado"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listaasegurado"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL BENEFICIARIO-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user-o"></i> <span class="menu-text"> Panel beneficiarios</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addbeneficiario"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listabeneficiario"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL POLIZAS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file-text"></i> <span class="menu-text"> Panel Polizas</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addtpoliza"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=tpoliza"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL SEGUROS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-handshake-o"></i> <span class="menu-text"> Panel Seguros</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addtseguro"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=tseguro"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>';
                                        break;
                                    case 3:
                                    // si somos usuario imprimimos menu de usuario
                                    echo '<!--CONFIG DEL ADMINISTRADOR-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa  fa-cogs"></i> <span class="menu-text"> ADMINISTRACION</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addaseguradora"> <i class="menu-icon fa fa-caret-right"></i> Agregar aseguradora</a> <b class="ardata"></b> </li>
                </ul>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=listaaseguradora"> <i class="menu-icon fa fa-caret-right"></i> Aseguradoras</a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL CORREDOR-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-paper-plane"></i> <span class="menu-text"> Panel Corredor</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addcorredor"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listacorredor"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL ASEGURADO-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user"></i> <span class="menu-text"> Panel Asegurados</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addasegurado"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listaasegurado"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL BENEFICIARIO-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user-o"></i> <span class="menu-text"> Panel beneficiarios</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addbeneficiario"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=listabeneficiario"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL POLIZAS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-file-text"></i> <span class="menu-text"> Panel Polizas</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addtpoliza"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=tpoliza"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>
        <!--PANEL SEGUROS-->
        <ul class="nav nav-list">
            <li class="">
                <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-handshake-o"></i> <span class="menu-text"> Panel Seguros</span> <b class="ardata fa fa-angle-down"></b> </a> <b class="ardata"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="index.php?do=addtseguro"> <i class="menu-icon fa fa-caret-right"></i> Agregar </a> <b class="ardata"></b> </li>
                    <li class="">
                        <a href="index.php?do=tseguro"> <i class="menu-icon fa fa-caret-right"></i> Lista </a> <b class="ardata"></b> </li>
                </ul>
            </li>
        </ul>';
                                        break;
                                }
                            ?>
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> </div>
    </div>