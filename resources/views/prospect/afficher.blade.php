@extends ('adminlte::page')
@section('title')

   master detail de prospect 
@endsection

@section('content')
<form action='{{url("home/prospect/transformetoclient/".$prospect->id)}}' method="POST"  >
   
{{ csrf_field()}}
<table>
<tr><td>nom</td><td><input type="text" disabled name="nom" value="{{$prospect->nom}}"></td></tr>
		<tr><td>prenom</td><td><input type="text" disabled name="prenom" value="{{$prospect->prenom}}"></td></tr>
        <tr><td>societe</td><td><input type="text" disabled name="s" id="societe"value="{{$prospect->societe}}"></td></tr>

        <tr><td>email</td><td><input type="text" disabled name="email" value="{{$prospect->email}}"></td></tr>
        <tr><td>telephone</td><td><input type="text" disabled name="telephone" id="telephone" value="{{$prospect->telephone}}"></td></tr>
        <tr><td>adresse</td><td><input type="text" disabled name="adresse" id="adresse" value="{{$prospect->adresse}}"></td></tr>
        <tr><td>site web</td><td><input type="text" disabled name="site_web" id="site_web" value="{{$prospect->site_web}}"></td></tr>
        <tr><td>source</td><td><input type="text" disabled name="source" value="{{$prospect->source}}"></td></tr>
        <input type="hidden" name="id" value="{{ Request::get('id') }}"></input></td></tr>
</table> 
<button  type="submit"   >Transform to Client </button> </form>

@endsection