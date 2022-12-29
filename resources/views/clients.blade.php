@extends ('adminlte::page')



@section('title')

   clients

@endsection


@section('content_header')

@section('content')
<div class="container">
    <div class="row my5">
        <div class="col-md-10 mx auto">
            <div class="card my3">
                <div class="text-center text-uppercase">
                    clients
                </div>
                <div class="card-body">
               
             
                
                   
                    
             
            <table id="mytable" class=" table table-bordered table-strippe">
                <thead>
                    <tr>
                        <th>
                           society
                        </th>
                        <th>
                            address
                        </th>
                        <th>
                            site web
                        </th>
                        <th>
                            numero
                        </th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>
                        {{$client->societe}}
                        </td>
                        <td>
                        {{$client->adresse}}
                        </td>
                        <td>
                        {{$client->site_web}}
                        </td>
                        <td>
                        {{$client->telephone}}
                        </td>
                        <td class="d-flex jusify-content-center align-items-center flex-100 ">
                            <a href="{{url('home/clients/'.$client->id)}} ">
                            <button class="btn btn-sm btn-info" >afficher </button>
                            </a>
                            <a href="{{url('home/clients/'.$client->id.'/edit')}} ">
                            <button class="btn btn-sm btn-warning" >modifier</button>
                            </a>
                            <form action ="{{url('home/clients/'.$client->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                           
                           
                        </td>
                        
                    
                    </tr></th>
                        
                @endforeach 
                </tbody>
</form>
            </table>
        </div>
            </div>
        </div>
       
    </div>

</div>
@endsection
  
 @endsection 