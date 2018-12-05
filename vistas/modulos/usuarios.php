<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestionar Usuarios
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="usuarios">Usuarios</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <div class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</div>
        </div>
        <div class="box-body">
        
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuarios</th>
              <th>Fotos</th>
              <th>Perfil</th>
              <th>Estados</th>
              <th>Ultimo Login</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>1</td>
            <td>Usuario administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2017-12-11 12:33:32</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
            </tr>
            <tr>
            <td>2</td>
            <td>Usuario Vendedpr</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px" alt=""></td>
            <td>Administrador</td>
            <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
            <td>2017-12-11 12:33:32</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              </div>
            </td>
            </tr>
          </tbody>
        </table>
          
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#3c8dbc; color:#fff">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
      <div class="modal-body">
      <div class="box-body">
        <div class="form-group">
          <!-- nombre -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="ingresar nombre">
          </div>
        </div>

        <!-- usuario -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="ingresar el nombre de usuario">
          </div>
        </div>

        <!-- password -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="ingresar password">
          </div>
        </div>

        <!-- perfil -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users"></i></span>
            <select name="nuevoPerfil" id="" class="form-control input-lg">
              <option value="">Seleccione perfil</option>
              <option value="Administrador">Administrador</option>
              <option value="Especial">Especial</option>
              <option value="Vendedor">Vendedor</option>
            </select>
          </div>
        </div>

        <!-- foto de perfil -->
        <div class="form-group">
          <div class="panel"><b>SUBIR FOTO</b></div>
          <input type="file" name="nuevaFoto" id="nuevaFoto">
          <p class="help-block">Peso maximo de la foto 200 MB</p>
          <img src="vistas/img/usuarios/default/anonymous.png" alt="" class="img-thumbnail" width="40px">
        </div>

        <!--  -->
        
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary" >Guardar usuario</button>
      </div>
    </div>

  </div>
</div>