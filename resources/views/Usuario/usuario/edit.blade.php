@extends ('Layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Editar Usuario: {{$us->Nom .' ' .$us->Ap}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($us,['method'=>'PATCH','route'=>['usuario.update',$us->Id]])!!}
                  {{Form::token()}}
            <div class="form-group">
            	<label for="Nombre">Nombre:</label>
            	<input type="text" name="N" class="form-control" value="{{$us->Nom}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="Apellido">Apellido:</label>
            	<input type="text" name="A" class="form-control" value="{{$us->Ap}}" placeholder="Apellido...">
            </div>
            <div class="form-group">
                  <label for="Contraseña">Usuario:</label>
                  <input type="text" name="U" class="form-control" value="{{$us->User}}" placeholder="Nombre de Usuario..." readonly="true">
            </div>
            <div class="form-group">
            	<label for="Contraseña">Contraseña:</label>
            	<input type="text" name="C" class="form-control" value="{{$us->Pass}}" placeholder="Contraseña...">
            </div>
            <div class="form-group">
            	<label for="Departamento">Departamento:</label>
            	<input type="text" name="D" class="form-control" value="{{$us->Dpto}}" placeholder="Departamento...">
            </div>
            <div class="form-group">
            	<label for="Puesto">Puesto:</label>
            	<input type="text" name="P" class="form-control" value="{{$us->Puesto}}" placeholder="Puesto...">
            </div>
            <div class="form-group">
            	<label for="Rol">Rol:</label>
            	<select name="R" form="Form" class="form-control" value="{{$us->Puesto}}">
                         <option value="" disabled="select" selected="">Selecciona Una Opcion</option>
                         <option value="Administrador" selected="{{$us->Puesto}}">Administrador</option>
                         <option value="Invitado" selected="{{$us->Puesto}}">Invitado</option>
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