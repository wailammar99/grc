@extends('layouts.app')
@Section('content')
<form action= "{{url('contact')}}" method="POST">
	{{ csrf_field()}}
	<table>
          <tr><td>nom</td><td><input type="text" name="nom"></td></tr>
		<tr><td>prenom</td><td><input type="text" name="prenom"></input></td></tr>
        <tr><td>foction</td><td><input type="text" name="foction"></input></td></tr>
        <tr><td>email</td><td><input type="text" name="email"></input></td></tr>
        <tr><td>telephone</td><td><input type="number" name="telephone"></input></td></tr>
        <input type="hidden" name="client" value="{{ Request::get('id') }}"></input></td></tr>
        
       
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>
@endsection