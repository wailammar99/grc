@extends ('adminlte::page')



@section('title')

   contact

@endsection


@section('content_header')

@section('content')
<div class="container">
    <div class="row my5">
        <div class="col-md-10 mx auto">
            <div class="card my3">
                <div class="text-center text-uppercase">
                    contact
                </div>
                <a href="{{url('home/contact/create')}}"> <button method= "get">ajouter</button></a>
                <div class="card-body">
            <table id="mytable" class=" table table-bordered table-strippe">
                <thead>
                    <tr>
                        <th>
                           nom
                        </th>
                        <th>
                            prenom
                        </th>
                        <th>
                            foction
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            telephone
                        </th>
                        <th>
                            cleints
                        </th>
                        <th>
                            actions
                        </th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach($contact as $c)
                    <tr>
                        <th>
                        {{$c->nom}}
                        </th>
                        <th>
                        {{$c->prenom}}
                        </th>
                        <th>
                        {{$c->foction}}
                        </th>
                        <th>
                        {{$c->email}}
                        </th>
                        <th>
                        {{$c->telephone}}
                        </th>
                        <th>
                        {{$c->client}}
                        </th>
                       
                      <th>
               
                            <a href="{{url('home/contact/'.$c->id.'/edit')}} ">
                            <button class="btn btn-sm btn-warning" >modifier</button>
                            </a>
                            <form action ="{{url('home/contact/'.$c->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                           
                      </th> 
                    
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
            </div>
        </div>
       
    </div>

</div>
@endsection
  
 @endsection 