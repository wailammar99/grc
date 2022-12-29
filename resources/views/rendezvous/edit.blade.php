@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<form action= "{{url('home/rendezvous/'.rendez_vouses->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{rendez_vouses->nom}}"></td></tr>
		<tr><td>date</td><td><input type="date" name="date" value="{{rendez_vouses->date}}"></td></tr>
       
        <tr><td>compte rendu </td><td><input type="text" name="compte_rendu" value="{{rendez_vouses->compte_rendu}}"></td></tr>
        <tr><td>client</td><td><input type="hidden" name="email" value="{{ Request::get('id') }}"></td></tr>
     
	<input type="submit" name="" value="Modifier">
 
</form>
@endsection