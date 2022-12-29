@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<form action= "{{url('home/opportunite/'.$opportunités->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$opportunités->nom}}"></td></tr>
		<tr><td>montant</td><td><input type="text" name="montant" value="{{$opportunités->montant}}"></td></tr>
       
        <tr><td>etape</td><td><input type="text" name="etape" value="{{$opportunités->etape}}"></td></tr>
        <tr><td>date de cloture</td><td><input type="date" name="date_de_cloture" value="{{$opportunités->date_de_cloture}}"></td></tr>
        <tr><td>client </td><td><input type="text" name="client" value="{{$opportunités->client}}"></td></tr>
        <tr><td>produits</td><td><input type="text" name="produits" value="{{$opportunités->produits}}"></td></tr>
       
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection