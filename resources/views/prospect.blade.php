@extends ('adminlte::page')



@section('title')

   prospects

@endsection


@section('content_header')

@section('content')
<div class="container">
    <div class="row my5">
        <div class="col-md-10 mx auto">
            <div class="card my3">
                <div class="text-center text-uppercase">
                    prospects
                </div>
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
                            soccite 
                        </th>
                        
                        <th>
                            email
                        </th>
                        <th>
                            telephone
                        </th>
                        <th>
                            adresse
                        </th>
                        <th>
                            site web 
                        </th>
                       
                        <th>
                            source 
                        </th>
                        <th>action </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($prospect as $p)
                    <tr>
                        <td>
                        {{$p->nom}}
                        </th>
                        <td>
                        {{$p->prenom}}
                        </td>
                        <td>
                        {{$p->societe}}
                        </td>
                      
                        <td>
                        {{$p->email}}
                        </td>
                        <td>
                        {{$p->telephone}}
                        </td>
                        <td>
                        {{$p->adresse}}
                        </td>
                        <td>
                        {{$p->site_web}}
                        </td>
                       
                        <td>
                        {{$p->source}}
                        </td>
                      
                        
                        <td class="d-flex jusify-content-center align-items-center flex-100 ">
                        <a href="{{url('home/prospect/'.$p->id.'/edit')}} ">
                            <button class="btn btn-sm btn-warning" >modifier</button>
                          
                            <form action ="{{url('home/prospect/'.$p->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                         <a href="{{url('home/prospect/'.$p->id)}}"><button type="submit" class="btn-sm btn-info">afficher</button>
                         </a>
                        </td>
                    
                    </tr></th>
                @endforeach 
                </tbody>
               
            </table>
        </div>
            </div>
           
        </div>
       
    </div>

</div>
</div>

@endsection
  