@extends ('adminlte::page')

@Section('content')
<form action= "{{url('produits')}}" method="POST">
	{{ csrf_field()}}
	<table>
          
		<tr><td>nom</td><td><input   type="text" name="nom"></input></td></tr>
		<tr><td>description</td><td><input  type="text" name="despription"></input></td></tr>
		<tr><td>photo</td><td><input type="file" name="photo"></input></td></tr>
		<tr><td>prix  </td><td><input type="text" name="prix"></input></td></tr>
		<tr><td>quantite  </td><td><input type="text" name="quantite"></input></td></tr>
		<tr><td> </td><td><input type="hidden"  name="idopp" value="{{ Request::get('id') }}"></input></td></tr>

       
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>


@endsection