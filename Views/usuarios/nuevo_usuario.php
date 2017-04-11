<div class="box-principal">
<h3 class="titulo">Creacion Usuarios<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar Nuevo usuario</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="nombre" class="control-label">Nombre</label>
				        <input class="form-control" name="nombre" type="text" required>
				    </div>

				    <div class="form-group">
				      <label for="inputEmail" class="control-label">e-mail</label>
				        <input class="form-control" name="email" type="email" required>
				    </div>

				    <div class="form-group">
				      <label for="contrasena" class="control-label">Contraseña</label>
				        <input class="form-control" name="contrasena" type="password" required>
				    </div>

				    <div class="form-group">
				      <label for="telefono" class="control-label">Telefono</label>
				        <input class="form-control" name="telefono" type="number" required>
				    </div>

				    <input type="submit" class="btn btn-info" value="Submit Button" align="right">
<!--
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Municipio</label>
				      <select name="mun" class="form-control">
				      	<?php while($row = mysqli_fetch_array($datos)){ ?>
				      		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Foto finca</label>
				        <input class="form-control" name="imagen" id="imagen" type="file" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>

				    -->
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>