@extends ('adminlte::page')



@section('title')

   affciher clients
@endsection

@section('content')

<table>
		<tr><td>society</td><td><input type="text" disabled name="societe" value="{{$client->societe}}"></td></tr>
		<tr><td>telephone</td><td><input type="text" disabled name="tel" value="{{$client->telephone}}"></td></tr>
        <tr><td>address</td><td><input type="text" disabled name="adresse" value="{{$client->adresse}}"></td></tr>
        <tr><td>site web</td><td><input type="text" disabled name="site" value="{{$client->site_web}}"></td></tr>
	</table>

    <div class="card-body" style="display: flex;flex-direction: row;gap: 1rem;"></br>
                <a href="{{url('home/contact/create?id='.$client->id)}}"> <button style="border-radius: 2rem;padding-inline: 1rem;padding-top: 0.5rem;padding-bottom: 0.5rem;border-width: 0.05rem;font-weight: 700;color: rgb(255, 170, 140);
                    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;  box-shadow: 10px 10px 5px rgb(255, 170, 140);
                " method= "get">ajouter un contact </button></a>
            <a href="{{url('home/opportunite/create?id='.$client->id)}}"> <button  style="border-radius: 2rem;padding-inline: 1rem;padding-top: 0.5rem;padding-bottom: 0.5rem;border-width: 0.05rem;font-weight: 700;color: rgb(255, 170, 140);
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;  box-shadow: 10px 10px 5px rgb(255, 170, 140);
" method= "get">ajouter un oppertunite</button></a>
            <a href="{{url('home/rendezvous/create?id='.$client->id)}}"> <button style="border-radius: 2rem;padding-inline: 1rem;padding-top: 0.5rem;padding-bottom: 0.5rem;border-width: 0.05rem;font-weight: 700;color: rgb(255, 170, 140);
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;  box-shadow: 10px 10px 5px rgb(255, 170, 140);
" method= "get">ajouter un rendez vous</button></a>
            </div>
                <div class="card-body">
    
                <div class="card-body">
               <h1> <center>table de contact </center></h1> 
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
            <h1><center>tableux de oppertunite</center></h1>
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
                            produits
                        </th>
                        <th>
                            actions
                        </th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach($oppertunite as $o)
                    <tr>
                        <th>
                        {{$o->nom}}
                        </th>
                        <th>
                        {{$o->montant}}
                        </th>
                        <th>
                        {{$o->etape}}
                        </th>
                        <th>
                        {{$o->date_de_cloture}}
                        </th>
                        <th>
                        {{$o->client}}
                        </th>
                        <th>
                        {{$o->produits}}
                        </th>
                       
                      <th>
               
                            <a href="{{url('home/opportunite/'.$o->id.'/edit')}} ">
                            <button class="btn btn-sm btn-warning" >modifier</button>
                            </a>
                            <form action ="{{url('home/opportunite/'.$o->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                           
                      </th> 
                    
                    </tr>

                @endforeach 
                </tbody> 
            </table>
            <h1><center>tableux des rendez vous </center></h1>
                <table id="mytable" class=" table table-bordered table-strippe">
                <thead>
                    <tr>
                      
                        <th>
                            date 
                        </th>
                        <th>
                            heure
                        </th>
                        <th>
                           comte rendu
                        </th>
                        <th>
                            client
                        </th>
                     
                            actions
                        </th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach($rendez as $r)
                    <tr>
                     
                        <th>
                        {{$r->date}}
                        </th>
                        <th>
                        {{$r->heure}}
                        </th>
                        <th>
                        {{$r->compte_rendu}}
                        </th>
                        <th>
                        {{$r->client}}
                        </th>
                 
                       
                      <th>
               
                            <form action ="{{url('home/rendezvous/'.$r->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                           
                      </th> 
                    
                    </tr>
                @endforeach 
                </tbody> 
            </table>
            


            
            @endsection