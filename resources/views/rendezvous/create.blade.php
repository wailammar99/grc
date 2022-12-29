@extends('layouts.app')
@Section('content')
<form action= "{{url('home/rendezvous/create')}}" method="POST">
	{{ csrf_field()}}
	<table>
          <tr><td>date</td><td><input type="date" name="date"></td></tr>
		<tr><td>heure</td><td><input type="text" name="heure"></input></td></tr>
        <tr><td>compte rendu</td><td><input type="text" name="compte_rendu"></input></td></tr>
        <tr><td>client</td><td><input type="hidden" name="client" value="{{ Request::get('id') }}"></input></td></tr>
      
        
       
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>
@endsection