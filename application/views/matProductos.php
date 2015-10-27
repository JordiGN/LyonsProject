<?php include_once ("/menumateriales.php") ?>
<div class="content-wrapper">
   <section class="content" id="contenido">
    <div class="container-fluid">
      <div class="row" id="r2">
       <div class="col-lg-2"></div>

        <div class="col-lg-10">

          <h2 class="tituloTabla">Products</h2>
          <label for="">Search</label><input type="text"><i class="fa fa-search "></i>
          <label for="ordenar" class="control-label">Order By:</label>
           <select class="" name="ordenar">
               <option><i class="fa fa-circle-o"></i> Description</option>
                <option><i class="fa fa-circle-o"></i> Id</option>
                <option><i class="fa fa-circle-o"></i> Measurement Units</option>
                <option><i class="fa fa-circle-o"></i> Cost</option>
                <option><i class="fa fa-circle-o"></i> Max</option>
                <option><i class="fa fa-circle-o"></i> Min</option>
                <option><i class="fa fa-circle-o"></i> Sizes</option>
              </select>
          <table id="tabla-producto" class="table table-hover">
              <thead>
                  <tr><!--Renglones-->
                      <th >Description</th><!--Colunas-->
                      <th >ID</th>
                      <th >Measurement Units</th>
                      <th >Cost</th>
                      <th >Max</th>
                      <th >Min</th>
                      <th >Sizes</th>
                  </tr>
              </thead>
              <tbody>
               <!-- <?php //foreach($productos as $rowProductos){ ?>
               <tr>
                   <td><?php// echo $rowProductos['description']; ?></td>
                   <td><?php //echo $rowProductos['id']; ?></td>
                   <td><?php //echo $rowProductos['measurementunits']; ?></td>
                   <td><?php //echo $rowProductos['cost']; ?></td>
                   <td><?php //echo $rowProductos['max']; ?></td>
                   <td><?php //echo $rowProductos['min']; ?></td>
                   <td><?php //echo $rowProductos['sizes']; ?></td>
               </tr>
               <?php //} ?> -->

               <tr>
                   <td>Oil #0</td>
                   <td>1</td>
                   <td>Liters</td>
                   <td>31.2500</td>
                   <td>10000</td>
                   <td>10000</td>
                   <td>Unisize</td>
               </tr>
               <tr>
                   <td>Acetona</td>
                   <td>2</td>
                   <td>Can</td>
                   <td>21.4700</td>
                   <td>1000000</td>
                   <td>1000000</td>
                   <td>Unisize</td>
               </tr>
               <tr>
                   <td>Acondicionador R-22</td>
                   <td>3</td>
                   <td>Can</td>
                   <td>89.000</td>
                   <td>10000</td>
                   <td>10000</td>
                   <td>Unisize</td>
               </tr>
              </tbody>
          </table>
          <div class=" collapse navbar-collapse">
              <ul class="nav navbar-nav ">
                <li id="lista1"><a href="#"><i class="fa fa-bars"></i> Kardex </a></li>
                <li id="lista1"><a href="#"><i class="fa fa-tags"></i> Tags </a></li>
                <li id="lista1"><a href="#"><i class="fa fa-file-excel-o"></i> Excel </a></li>
                <li id="lista2"><a href="#"><i class="fa fa-print"></i> Print </a></li>
                <li id="lista3"><a href="#"><i class="fa fa-plus"></i> New </a></li>
                <li id="lista4"><a href="#"><i class="fa fa-pencil"></i> Edit </a></li>
                <li id="lista5"><a href="#"><i class="fa fa-times"></i> Deactivate </a></li>
              </ul>
          </div>
      </div>

        <div class="col-lg-2"></div>
    </div>
  </section>
</div>


<?php include_once ("/sections/footer.php") ?>
