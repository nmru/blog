@extends ('Layouts.admin')
@section('contenido')
 <div class = "row">
    <div class = "col-lg-8 col-md-8 col-sm-8 col-xs-12" >
        <h3>Listado de Usuarios <a href="usuario/create"><button class = "btn btn-success">Nuevo</button></a></h3>
        @include ('Usuario.usuario.searchU')

    </div>
 </div>

 <div class = "row">
    <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" >
       <div class = "table-resposive">
         <table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>Departamento</th>
					<th>Puesto</th>
					<th>Rol</th>
					<th>Opciones</th>
				</thead>
				@foreach($u as $us)
				<tr>
				   <td>{{ $us-> Id }}</td>
				   <td>{{ $us-> Nom}}</td>
				   <td>{{ $us-> Ap}}</td>
				   <td>{{ $us-> User}}</td>
				   <td>{{ $us-> Pass}}</td>
				   <td>{{ $us-> Dpto}}</td>
				   <td>{{ $us-> Puesto}}</td>
                   <td>{{ $us-> Rol}}</td>
                   <td>
                      <a href="{{URL::action('UsuarioController@edit',$us->Id)}}"><button class="btn btn-info">Editar</button></a>
                      <a href="#" data-target="#modal-delete-{{$us->Id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                   </td>  
				</tr>
				@include('Usuario.usuario.modal')
				@endforeach
		</table>
    </div>
    {{$u->render()}}
 </div>

@endsection