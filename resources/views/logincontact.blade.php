<h2>hillo</h2>
<form action="" method="POST">
<input type="email" name="email"></input>
<input type="password" name="password"></input>
<button type="submit"> login</button>
</form>
@section('content')
@if (session ('error'))
<p>{{session('error')}}</p>
@endif

@csrf 
<input type="email" name="email"></input>
<input type="password" name="password"></input>
<button type="submit"> login</button>
<h1>hillloooo

</h1>


</form>
@endsection
