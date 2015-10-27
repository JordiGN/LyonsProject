<?php include_once ("/menumateriales.php") ?>
<div  class="content-wrapper">
  <section class="content">
   <div class="row" id="r1">
      <h1 class="">Store Entrances</h1>
    </div>
    <div class="container-fluid"><!--División superior-->
      <div class="col-lg-12">
          <div class="form-group col-lg-6">
            <label for="concepto" class="control-label">Choose concept</label>
                <select class="form-control" name="concepto">
                  <option>Ingreso por Compras</option>
                  <option>Opcion 1</option>
                  <option>Opcion 2</option>
                  <option>Opcion 3</option>
                  <option>Opcion 4</option>
                  <option>Opcion 5</option>
                </select>
            <label for="almacen" class="control-label">Store</label>
              <select class="form-control" name="almacen">
                  <option>Sin movimiento</option>
                  <option>Opcion 1</option>
                  <option>Opcion 2</option>
                  <option>Opcion 3</option>
                  <option>Opcion 4</option>
                  <option>Opcion 5</option>
                </select>
          </div>
          <div class="col-lg-6"></div>
          <div class="col-lg-8">
               <label for="codigo">Search annex code and/or Sku code</label>
               <input type="text"> <input type="number" placeholder="0">
          </div>
          <div class="col-lg-4">
             <button class="btn btn-default"><i class="fa fa-search"></i>Buscar</button>
             <input type="text">
          </div>
         <div class="col-lg-10">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Annex Code</th>
                  <th>Sku code</th>
                  <th>Description</th>
                  <th>Cost</th>
                  <th>Max</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DATOS</td>
                  <td>DATOS</td>
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
                  <td>DATOS</td>
                  <td>DATOS</td>
                </tr>
                <tr>
                  <td>DATOS</td>
                  <td>DATOS</td>
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
                  <td>DATOS</td>
                  <td>DATOS</td>
                </tr>
              </tbody>
            </table>
         </div>
        </div>
      <!--División inferior-->
        <div class="col-lg-12">
          <div class="col-lg-4">
            <label for="observaciones">Observations</label>
            <textarea name="observaciones" id="" cols="30" rows="5"></textarea>
          </div>
          <div class="col-lg-4"></div>
          <div class="col-lg-2">
            <label for="">Producto</label>
            <input type="text">
            <label for="">Importe</label>
            <input type="text">
          </div>
        </div>
        <div class=" collapse navbar-collapse">
              <ul class="nav navbar-nav ">
                <li id="lista4"><a href="#"><i class="fa fa-pencil"></i> Edit </a></li>
                <li id="lista5"><a href="#"><i class="fa fa-times"></i> Deactivate </a></li>
                <li id="lista3"><a href="#"><i class="fa fa-floppy-o"></i> Save </a></li>
              </ul>
          </div>
    </div>
  </section>
</div>
<?php include_once ("/sections/footer.php") ?>
