@extends ('layouts.app')



@section('title')

   home 

@endsection


@section('content')
 <div class="conteiner"
  <div class="row.my-5">
      <div class="col-md-6 mx-auto">
          <div class="card ">
              <div class="card-header bg-light"><h3 class="p-2">welcome</h3></div>
              <div class="card-body">

              @guest 
           
                  <a href="{{url('/login')}}" class="btn outline primary">login</a>   @endguest
                  @auth  <a href="#" class="btn outline primary">home</a> @endauth
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>
 @endsection 