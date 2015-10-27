<?php include_once ("/menumateriales.php") ?>
<div  class="content-wrapper">
  <section class="content">
   <div class="row" id="r1">
      <h1 class="">Consult Existences</h1>
    </div>
    <div class="container-fluid"><!--División superior-->
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
            <li><input type="checkbox" value=""><b>Existences by Store</b></li>
            <li><input type="checkbox" value=""><b>Existences Resume</b></li>
            <li><input type="checkbox" value=""><b>General Resume</b></li>
          </ul>
        </div>
      </div>
         <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Run</th>
                  <th>Description</th>
                  <th>Cost</th>
                  <th>Quantity</th>
                  <th>Store</th>
                  <th>UNITA</th>
                  <th>Min</th>
                  <th>Max</th>
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
                  <td>DATOS</td>
                  <td>DATOS</td>
                </tr>
              </tbody>
            </table>
         </div>
        </div>
      <!--División inferior-->
        <div class="col-lg-4">
          <button class="btn btn-default"><i class="fa fa-search"></i>Buscar</button>
          <input type="text">
        </div>
        <div class="col-lg-4">
          <button class="btn btn-default"><i ></i>Command</button>
        </div>
    </div>
  </section>
</div>
<?php include_once ("/sections/footer.php") ?>
