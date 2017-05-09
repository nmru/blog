@extends ('Layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Usuario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'Usuario/usuario','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="Nombre">Nombre:</label>
            	<input type="text" name="N" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="Apellido">Apellido:</label>
            	<input type="text" name="A" class="form-control" placeholder="Apellido...">
            </div>
            <div class="form-group">
            	<label for="Usuario">Usuario:</label>
            	<input type="text" name="U" class="form-control" placeholder="Nombre de Usuario...">
            </div>
            <div class="form-group">
            	<label for="Contraseña">Contraseña:</label>
            	<input type="text" name="C" class="form-control" placeholder="Contraseña...">
            </div>
            <div class="form-group">
            	<label for="Departamento">Departamento:</label>
            	<input type="text" name="D" class="form-control" placeholder="Departamento...">
            </div>
            <div class="form-group">
            	<label for="Puesto">Puesto:</label>
            	<input type="text" name="P" class="form-control" placeholder="Puesto...">
            </div>
            <div class="form-group">
            	<label for="Rol">Rol:</label>
            	 <select name="R" class="form-control">
                  <option value="" disabled selected>Selecciona una Opcion...</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Invitado">Invitado
                  </option>      
                 </select>
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection