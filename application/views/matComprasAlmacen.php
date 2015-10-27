<?php include_once ("/menumateriales.php") ?>
<div  class="content-wrapper">
  <section class="content">
   <div class="row" id="r1">
      <h1 class="">Store buys</h1>
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
            <label for="almacen" class="control-label">Store to recieve</label>
              <select class="form-control" name="almacen">
                  <option>Sin movimiento</option>
                  <option>Opcion 1</option>
                  <option>Opcion 2</option>
                  <option>Opcion 3</option>
                  <option>Opcion 4</option>
                  <option>Opcion 5</option>
                </select>
            <label for="proveedor" class="control-label">Provider</label>
             <select class="form-control" name="proveedor">
                  <option>Nepro Adhesivos</option>
                  <option>Opcion 1</option>
                  <option>Opcion 2</option>
                  <option>Opcion 3</option>
                  <option>Opcion 4</option>
                  <option>Opcion 5</option>
                </select>
          </div>
          <div class="form-group col-lg-3">
            <label for="nocompra">Buy Number</label>
            <input type="text" placeholder="005187" readonly="readonly">
          </div>
          <div class="form-group col-lg-3">
            <button class="btn btn-default btn-md btn-block"><i class="fa fa-plus"></i>Add Product</button>
            <button class="btn btn-default btn-md btn-block"><i class="fa fa-search"></i>Search Product</button>
          </div>
       </div>
      <!--División media-->
        <div class="col-lg-12">
         <div class="col-lg-2"></div>
          <div class="col-lg-10">
            <label for="factura">Bill</label>
            <input type="text" placeholder="21">
            <label for="factura">Date of admission</label>
            <input type="date">
            <label for="factura">Due date</label>
            <input type="date">
          </div>
          <div class="col-lg-2"></div>
          <div>
            <label for="codigo">Search annex code and/or Sku code</label>
            <input type="text"> <input type="number" placeholder="0">
            <label>Breakdown IVA </label> <input type="radio" name="iva"  value="1" checked="checked" />Yes <input type="radio" name="iva"  value="0"/>No
          </div>
         <div class="col-lg-10">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Annex Code</th>
                  <th>Sku code</th>
                  <th>Description</th>
                  <th>Cost</th>
                  <th>Subtotal</th>
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
            <label for="observaciones">Observaciones</label>
            <textarea name="observaciones" id="" cols="30" rows="5"></textarea>
          </div>
          <div class="col-lg-2">
            <label for="producto">Producto</label>
            <input type="text" name="producto">
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-2">
            <label for="">Importe</label>
            <input type="text">
            <label for="">I.V.A.</label>
            <input type="text">
            <label for="">Neto:</label>
            <input type="text">
          </div>
        </div>
    </div>
  </section>
</div>
<?php include_once ("/sections/footer.php") ?>
