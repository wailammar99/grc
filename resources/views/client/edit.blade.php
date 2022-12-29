@extends ('adminlte::page')



@section('title')

   edit clients

@endsection

@section('content')
<form action= "{{url('home/client/'. $client->id)}}" method="POST"  class=" form-control-sm mb-3">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>society</td><td><input type="text" name="societe" value="{{$client->societe}}"></td></tr>
		<tr><td>telephone</td><td><input type="text" name="tel" value="{{$client->telephone}}"></td></tr>
        <tr><td>address</td><td><input type="text" name="adresse" value="{{$client->adresse}}"></td></tr>
        <tr><td>site web</td><td><input type="text" name="site" value="{{$client->site_web}}"></td></tr>
	</table>
	<input type="submit" name="" value="Modifier">
</form>

@endsection