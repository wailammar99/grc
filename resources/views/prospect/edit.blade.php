@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<form action= "{{url('home/prospect/'. $prospect->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$prospect->nom}}"></td></tr>
		<tr><td>prenom</td><td><input type="text" name="prenom" value="{{$prospect->prenom}}"></td></tr>
        <tr><td>societe</td><td><input type="text" name="societe" value="{{$prospect->societe}}"></td></tr>
        <tr><td>telephone</td><td><input type="text" name="telephone" value="{{$prospect->telephone}}"></td></tr>
        <tr><td>adresse</td><td><input type="text" name="adresse" value="{{$prospect->adresse}}"></td></tr>
        <tr><td>site web </td><td><input type="text" name="site_web" value="{{$prospect->site_web}}"></td></tr>
        <tr><td>source</td><td><input type="text" name="source" value="{{$prospect->source}}"></td></tr>
        <tr><td>email</td><td><input type="text" name="email" value="{{$prospect->email}}"></td></tr>
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection