@extends('layouts.main')

@section('content')

	<form action="{{url('maker/store')}}" method="post">@csrf
		<fieldset>
			<legend>Crear Fabricantes</legend>
			<label>Nombre :</label>
			<input name="nombre">
			<label>Descripción :</label>
			<textarea name="descripcion"></textarea>
			<input type='submit' value="Enviar Datos">
		</fieldset>
	</form>

@endsection