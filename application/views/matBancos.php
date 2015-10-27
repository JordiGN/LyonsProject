<?php include_once ("/menumateriales.php") ?>
<div class="content-wrapper">
   <section class="content" id="contenido">
    <div class="container-fluid">
      <div class="row" id="r2">
       <div class="col-lg-2"></div>

        <div class="col-lg-10">

          <h2 class="tituloTabla">Banks</h2>
          <div class="col-lg-6">
            <label for="">Search</label><input type="text"><i class="fa fa-search "></i>
          </div>
          <div class="col-lg-6">
           <label for="ordenar" class="control-label">Order By:</label>
           <select class="form-control" name="ordenar">
               <option><i class="fa fa-circle-o"></i> Description</option>
                <option><i class="fa fa-circle-o"></i> Id</option>
                <option><i class="fa fa-circle-o"></i> Measurement Units</option>
                <option><i class="fa fa-circle-o"></i> Cost</option>
                <option><i class="fa fa-circle-o"></i> Max</option>
                <option><i class="fa fa-circle-o"></i> Min</option>
                <option><i class="fa fa-circle-o"></i> Sizes</option>
              </select>
            </div>
          <table id="tabla-producto" class="table table-hover">
              <thead>
                  <tr><!--Renglones-->
                      <th >ID</th>
                      <th >Description</th><!--Colunas-->
                      <th >Account</th>
                      <th >Status</th>
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
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
               </tr>
               <tr>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
               </tr>
               <tr>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
               </tr>
               <tr>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
                 <td>DATOS</td>
               </tr>
              </tbody>
          </table>
          <div class=" collapse navbar-collapse">
              <ul class="nav navbar-nav ">
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
