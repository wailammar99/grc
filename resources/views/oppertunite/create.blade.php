@extends ('adminlte::page')

@Section('content')
<form action= "{{url('opportunite')}}" method="POST">
	{{ csrf_field()}}
	<table>
          
		<tr><td>nom</td><td><input   type="text" name="nom"></input></td></tr>
		<tr><td>monatnt</td><td><input  type="text" name="montant"></input></td></tr>
		<tr><td>etape</td><td><input type="text" name="etape"></input></td></tr>
		<tr><td>date de cloture</td><td><input type="date" name="date_de_cloture"></input></td></tr>
        <tr><td>client</td><td><input  type="text"  name="client" value="{{ Request::get('id') }}"></input></td></tr>
        <tr><td>produit</td><td><input  type="text" name="produits"></input></td></tr>
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>


@endsection