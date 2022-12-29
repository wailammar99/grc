
@section('content')
@if (session ('error'))
<p>{{session('error')}}</p>
@endif
<form action="{{route ('contacthadlelogin')}}" method="POST">
@csrf 
<input type="email" name="email"></input>
<input type="password" name="password"></input>
<button type="submit"> login</button>
<h1>hillloooo

</h1>


</form>
@endsection
