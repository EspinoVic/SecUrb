<!-- <?php  ?>
 -->

<h1 class="title">Expedientes</h1>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo Expediente
</button>
<button type="button" class="btn btn-secondary">Filtrar</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Expediente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-3">
        <div class="row g-3 ">
          
          <!-- col-auto nel -->
          <div class="col">
             
            <p  > <b >Expediente:</b> 0003/2022 </p>
            
          </div>
          <div class="col">
            <p  > <b >Fecha Ingreso:</b> 19/09/2022 </p>  
          
          </div>
          
        </div>

        <div class="col-12">
          <label for="selectTramite" class="form-label">Trámite</label>
          <select id="selectTramite" class="form-select" aria-label="Default select example">
              <option selected>Selecciona tramite</option>
              <option value="1">Construcción</option>
              <option value="2">Alineación</option>
              <option value="3">Número Oficial</option>
              <option value="4">Etc</option>
          </select>
        </div>

        <div class="col-12">
          <label for="inputNombre" class="form-label">Nombre (s)</label>
          <input type="text" class="form-control" id="inputNombre" placeholder=" ">
        </div>
        <div class="col-md-6">
          <label for="inputAPaterno4" class="form-label">Apellido Paterno</label>
          <input type="APaterno" class="form-control" id="inputAPaterno4">
        </div>
        <div class="col-md-6">
          <label for="inputAMaterno4" class="form-label">Apellido Materno</label>
          <input type="AMaterno" class="form-control" id="inputAMaterno4">
        </div>
         
        <div class="col-12">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      
       
      </form>


      </div>
       
    </div>
  </div>
</div>


<table class="table table-striped  table-hover">
  <thead>
    <tr>
      <th scope="col"># ExPediente</th>
      <th scope="col">Fecha Registro</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">A. Paterno</th>
      <th scope="col">A. Materno</th>
      <th scope="col">Trámite</th>
      <th scope="col">Estado</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">0001/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0002/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0003/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0004/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0005/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0003/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0004/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0005/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0003/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0004/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0005/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0003/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0004/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0005/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0003/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0004/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
    <tr>
      <th scope="row">0005/2022</th>
      <td>13/09/2022</td>
      <td>Javier Alejandro</td>
      <td>Pérez</td>
      <td>Garcpia</td>
      <td>Construcción</td>
      <td>OK</td>
    </tr>
  </tbody>
</table>

<nav aria-label="...">
  <ul class="pagination pagination-sm">
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>

