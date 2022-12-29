@extends ('adminlte::page')



@section('title')

   oppertunite 

@endsection


@section('content_header')

@section('content')
<div class="container">
    <div class="row my5">
        <div class="col-md-10 mx auto">
            <div class="card my3">
                <div class="text-center text-uppercase">
                    oppertunite
                </div>
                <div class="card-body">
            <table id="mytable" class=" table table-bordered table-strippe">
                <thead>
                    <tr>
                        <th>
                           nom
                        </th>
                        <th>
                            montant
                        </th>
                        <th>
                            etape
                        </th>
                        <th>
                            date de cloture
                        </th>
                        <th>
                            client 
                        </th>
                        <th>
                            produit
                        </th>
                  <th>action </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($opportunités as $o)
                <tr>
                        <td>
                        {{$o->nom}}
                        </td>
                        <td>
                        {{$o->montant}} 
                        </td>
                        <td>
                        {{$o->etape}}
                        </td>
                        <td>
                        {{$o->date_de_cloture}}
                        </td>
                        <td>
                        {{$o->client}}
                        </td>
                        <td>
                        {{$o->produits}}
                        </td>
                        <td class="d-flex jusify-content-center align-items-center flex-100 ">  <form action ="{{url('home/opportunite/'.$o->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                              <a href="{{url('home/opportunite/'.$o->id.'/edit')}} ">
                            <button class="btn btn-sm btn-warning" >modifier</button>
                            </a>
                            <a href="{{url('home/opportunite/'.$o->id)}} ">
                            <button class="btn btn-sm btn-info" >affciher</button> </a>
                            </a>
                        
                        </td>
                            
                        @endforeach
                    </tr>

                </tbody>
            </table>
        </div>
            </div>
        </div>
        
    </div>

</div>
@endsection
  
 @endsection 