<?php include_once ("/menumateriales.php") ?>

<div class="content-wrapper">
  <section class="content" id="contenido">
    <div class="container-fluid">
      <div class="row" id="r2">
      <div class="col-lg-2"></div>
        <div class="col-lg-10">
          <h2 class="tituloTabla">Stores</h2>
          <label for="">Search</label><input type="text"><i class="fa fa-search "></i>
          <label for="ordenar" class="control-label">Order By:</label>
          <select class="" name="ordenar">
                <option><i class="fa fa-circle-o"></i> Id</option>
                <option><i class="fa fa-circle-o"></i> Description</option>
                <option><i class="fa fa-circle-o"></i> Date</option>
              </select>
          <table id="tabla-producto" class="table table-hover">
              <thead>
                  <tr><!--Renglones-->
                      <th >ID</th><!--Colunas-->
                      <th >Description</th>
                      <th >Date</th>

                  </tr>
              </thead>
              <tbody>
               <?php foreach($almacenes as $rowAlmacenes){ ?>
               <tr>

                   <td><?php echo $rowProductos['id']; ?></td>
                   <td><?php echo $rowProductos['description']; ?></td>
                   <td><?php echo $rowProductos['date']; ?></td>
               <?php } ?>
              </tbody>
          </table>
          <div class=" collapse navbar-collapse">
            <ul class="nav navbar-nav ">
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

