<?php include_once ("/menumateriales.php") ?>

<div class="content-wrapper">
  <section class="content">
    <div class="row" id="r1">
      <h1 class="">Counts To Pay</h1>
    </div>
    <div class="conteiner-fluid">
      <div class="col-lg-12">
        <label for="desde">From</label>
        <input type="date">
        <label for="hasta">To</label>
        <input type="date">
        <input type="radio" name="tipo" checked="checked">With Saldos
        <input type="radio" name="tipo" checked="">All
        <button type="button" class="btn btn-default">Generate</button>
      </div>
      <div class="col-lg-12">
        <div class="col-lg-4">
            <ul>
              <li>  <label for="funcion">Functions</label><br></li>
              <li>  <input type="radio" name="funcion"  value="1" checked="checked"/><b>Order</b> </li>
              <li>  <input type="radio" name="funcion"  value="2"/><b>Filter</b> </li>
              <li>  <input type="radio" name="funcion"  value="3"/><b>View All</b>           </li>
            </ul>
        </div>
        <div class="col-lg-4">
          <ul>
           <li> <label for="opciones">Options</label> <br></li>
           <li> <input type="radio" name="vista" value="1" checked="checked"><b> Normal View</b> </li>
           <li> <input type="radio" name="vista" value="2"> <b> Auto adjust</b> </li>
           <li><b>Anclar</b><input type="number" name="columnasancladas" class=""><b>Columnas</b></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul>
            <li><label for="reportes">Reports</label> <br></li>
            <li><input type="checkbox" value=""><b>Pays for provider</b></li>
            <li><input type="checkbox" value=""><b>Resum for provider</b></li>
            <li><input type="checkbox" value=""><b>Detail for Buy</b></li>
            <li><input type="checkbox" value=""><b>Other</b></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-12">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th>Annex Code</th>
                  <th>Sku code</th>
                  <th>Description</th>
                  <th>Mxn</th>
                  <th>Usd</th>
                  <th>Quantity</th>
                  <th>Product Code</th>
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
                  <td>DATOS</td>
                </tr>
                <tr>
                  <td>DATOS</td>
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
                  <td>DATOS</td>
                </tr>
                <tr>
                  <td>DATOS</td>
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
                  <td>DATOS</td>
                </tr>
              </tbody>
            </table>
      </div>

      <div class="col-lg-6"><button class="btn btn-default">Consult Note's Detail</button></div>
      <div class="col-lg-6"><button class="btn btn-default">Edit Notes</button></div>

      <div class="col-lg-12">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th>Annex Code</th>
                  <th>Sku code</th>
                  <th>Description</th>
                  <th>Mxn</th>
                  <th>Usd</th>
                  <th>Quantity</th>
                  <th>Product Code</th>
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
                  <td>DATOS</td>
                </tr>
                <tr>
                  <td>DATOS</td>
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
                  <td>DATOS</td>
                </tr>
                <tr>
                  <td>DATOS</td>
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
                  <td>DATOS</td>
                </tr>
              </tbody>
            </table>
      </div>

      <div class="col-lg-12">
        <div class="col-lg-4">
          <button class="btn btn-default"><i class="fa fa-search"></i>Buscar</button>
          <input type="text">
        </div>
        <div class="col-lg-2">
          <button class="btn btn-default"><i class="fa fa-"></i>Pay's Details</button>
        </div>
        <div class="col-lg-4">
            <label for="">Total Neto</label>
            <input type="text" placeholder="5">
            <label for="">Total Arts.</label>
            <input type="text" placeholder="5">
            <label for="">Balances note</label>
            <input type="text" placeholder="5">
        </div>
        <div class="col-lg-2">
          <button class="btn btn-default "><i class="fa fa-times"></i>Payments by note</button>
          <button class="btn btn-default "><i class="fa fa-times"></i>Cancel Payment</button>
          <!-- <button class="btn btn-default btn-md btn-block"><i class="fa fa-times"></i></button> -->
        </div>
      </div>
    </div>
  </section>
</div>

<?php include_once ("/sections/footer.php") ?>
