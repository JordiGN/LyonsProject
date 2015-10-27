<?php include_once ("/sections/header.php") ?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
            <!-- FotoUsuario -->
            <div class="pull-center">
              <img src="img/avatar5.png" class="img-circle imInicial" alt="User Image" />
            </div>
            <!-- NombreUsuario -->
            <div class="pull-center info">
              <p>Usuario</p>
              <!-- EstadoUsuario -->
              <a href="#"><i class="fa fa-circle "></i> Offline</a>
            </div>
          </div>

    <!-- Menus de las opciones -->
   <ul class="sidebar-menu">
      <li class="treeview">
        <a href="#">
        <i class="fa fa-child"></i><span>Products</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu" >
           <li><a href="index.php/welcome/matProductos"><i class="fa fa-circle-o"></i> Products</a></li>
           <li><a href="index.php/welcome/matProveedores"><i class="fa fa-circle-o"></i> Providers</a></li>
           <li><a href="index.php/welcome/matAlmacenes"><i class="fa fa-circle-o"></i> Stores</a></li>
           <li><a href="index.php/welcome/matTallas"><i class="fa fa-circle-o"></i> Sizes</a></li>
           <li><a href="index.php/welcome/matUnidadesdemedida"><i class="fa fa-circle-o"></i> Measurement Units</a></li>
           <li><a href="index.php/welcome/matCategorias"><i class="fa fa-circle-o"></i> Categories</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
        <i class="fa fa-child"></i><span>Buys</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu" >
          <li><a href="index.php/welcome/matComprasAlmacen"><i class="fa fa-circle-o"></i>Store Buys</a></li>
          <li><a href="index.php/welcome/matConsultaCompras"><i class="fa fa-circle-o"></i>Consult Buys</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-child"></i><span>Existences</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu" >
          <li><a href="index.php/welcome/matConsultaExistencias"><i class="fa fa-circle-o"></i></i> Consult Existences</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-child"></i><span>Finances</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu" >
          <li><a href="index.php/welcome/matCuentasPorPagar"><i class="fa fa-circle-o"></i> Counts to pay Note</a></li>
          <li><a href="index.php/welcome/matBancos"><i class="fa fa-circle-o"></i> Banks</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-child"></i><span>Movements</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php/welcome/matSalidasAlmacen"><i class="fa fa-circle-o"></i>Store Movements</a></li>
          <li><a href="index.php/welcome/matEntradasAlmacen"><i class="fa fa-circle-o"></i> Inventory Entrances</a></li>
          <li><a href="index.php/welcome/matReporteMovimientos"><i class="fa fa-circle-o"></i> Movements Reports (Not buys)</a></li>
        </ul>
      </li>
   </ul>
  </section>
</aside>




