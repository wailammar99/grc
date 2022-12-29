@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<form action= "{{url('home/contact/'. $contact->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$contact->nom}}"></td></tr>
		<tr><td>prenom</td><td><input type="text" name="prenom" value="{{$contact->prenom}}"></td></tr>
       
        <tr><td>foction</td><td><input type="text" name="foction" value="{{$contact->foction}}"></td></tr>
        <tr><td>email</td><td><input type="text" name="email" value="{{$contact->email}}"></td></tr>
        <tr><td>telephone </td><td><input type="text" name="telephone" value="{{$contact->telephone}}"></td></tr>
        <tr><td>client</td><td><input type="text" disabled name="client" value="{{$contact->client}}"></td></tr>
        <tr><td>password</td><td><input type="text" name="password" value="{{$contact->password}}"></td></tr>
	</table>
	<input type="submit" name="" value="Modifier">
 
</form>
@endsection