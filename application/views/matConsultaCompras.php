<?php include_once ("/menumateriales.php") ?>

<div class="content-wrapper">
  <section class="content">
    <div class="row" id="r1">
      <h1 class="">Consult Buys</h1>
    </div>
    <div class="conteiner-fluid">
      <div class="col-lg-12">
        <label for="desde">From</label>
        <input type="date">
        <label for="hasta">To</label>
        <input type="date">
        <button type="button" class="btn btn-default">Generate</button>
      </div>
      <div class="col-lg-12">
        <div class="col-lg-4">

                <label for="funcion">Functions</label><br>
                <input type="radio" name="funcion"  value="1" checked="checked"/><b>Order</b> <br>
                <input type="radio" name="funcion"  value="2"/><b>Filter</b> <br>
                <input type="radio" name="funcion"  value="3"/><b>View All</b>           <br>
        </div>
        <div class="col-lg-4">

            <label for="opciones">Options</label> <br>
            <input type="radio" name="vista" value="1" checked="checked"><b> Normal View</b> <br>
            <input type="radio" name="vista" value="2"> <b> Auto adjust</b> <br>
           <b>Anclar</b><input type="number" name="columnasancladas" class=""><b>Columnas</b><br>
        </div>
        <div class="col-lg-4">

            <label for="reportes">Reports</label> <br>
            <input type="checkbox" value=""><b>Buy's reports</b><br>
            <input type="checkbox" value=""><b>Reprint buy</b><br>
            <input type="checkbox" value=""><b>Providers buys</b><br>
        </div>
      </div>

      <div class="col-lg-10">
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
      <div class="col-lg-2"></div>
      <div class="col-lg-12">
        <div class="col-lg-4">
          <button class="btn btn-default"><i class="fa fa-search"></i>Buscar</button>
          <input type="text">
        </div>
        <div class="col-lg-4">
            <label for="">Total Neto</label>
            <input type="text" placeholder="5">
            <label for="">Total Arts.</label>
            <input type="text" placeholder="5">
        </div>
        <div class="col-lg-4">
          <button class="btn btn-default btn-md btn-block"><i class="fa fa-times"></i>Deactivate</button>
          <!-- <button class="btn btn-default btn-md btn-block"><i class="fa fa-times"></i></button> -->
        </div>

      </div>
    </div>
  </section>
</div>

<?php include_once ("/sections/footer.php") ?>
