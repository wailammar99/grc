@extends ('adminlte::page')



@section('title')

   edit rendez vous 

@endsection

@section('content')
@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<form action= "{{url('home/rendezvous/'.Request::get('id')} }}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>heure</td><td><input type="text" name="nom" value="{{$rendez->heure}}"></td></tr>
		<tr><td>date</td><td><input type="date" name="date" value="{{$rendez->date}}"></td></tr>
        <tr><td>compte rendu</td><td><input type="text" name="compte_rendu" value="{{$rendez->compte_rendu}}"></td></tr>
		<tr><td>client</td><td><input type="hidden" name="email" value="{{ Request::get('id') }}"></td></tr>
       
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection
@endsection