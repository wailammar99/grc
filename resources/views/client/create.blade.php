@extends ('adminlte::page')

@Section('content')
<form action= "{{url('clients')}}" method="POST">
	{{ csrf_field()}}
	<table>
          
		<tr><td>societe</td><td><textarea name="societe"></textarea></td></tr>
		<tr><td>telephone</td><td><textarea name="telephone"></textarea></td></tr>
		<tr><td>adrese</td><td><textarea name="adresse"></textarea></td></tr>
		<tr><td>site web</td><td><textarea name="site_web"></textarea></td></tr>
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>

@endsection

