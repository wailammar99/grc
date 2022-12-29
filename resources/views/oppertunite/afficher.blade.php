@extends ('adminlte::page')
@section('title')

   affciher 
@endsection

@section('content')
<table>
		<tr><td>nom</td><td><input type="text" disabled name="nom" value="{{$opportunités->nom}}"></td></tr>
		<tr><td>montant</td><td><input type="text" disabled name="montant" value="{{$opportunités->montant}}"></td></tr>
        <tr><td>etape</td><td><input type="text" disabled name="etape" value="{{$opportunités->etape}}"></td></tr>
        <tr><td>date de cloture</td><td><input type="text" disabled name="date_de_cloture" value="{{$opportunités->date_de_cloture}}"></td></tr>
        <tr><td>client</td><td><input type="text" disabled name="client" value="{{$opportunités->client}}"></td></tr>
        <tr><td>produits</td><td><input type="text" disabled name="produits" value="{{$opportunités->produits}}"></td></tr>

	</table>
    <a></a>
    <a href="{{url('home/produits/create?id='.$opportunités->id)}}"> <button method= "get">ajouter des produits </button></a>
    <h1><center>table des produits </center></h1>
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
                            photo
                        </th>
                        <th>
                        prix
                        </th>
                        <th>
                            quantite
                        </th>
                   
                            actions
                        </th>
                    
                    </tr>
                   
   
                </thead>
                <tbody>
                @foreach($produits as $p)
                    <tr>
                        <th>
                        {{$p->nom}}
                        </th>
                        <th>
                        {{$p->description}}
                        </th>
                        <th>
                        <img src="{{$p->image}}" />
                        </th>
                        <th>
                        {{$p->prix}}
                        </th>
                        <th>
                        {{$p->quantite}}
                        </th>
                        
                       
                      <th>
                 
                         
            
                          <a href="{{url('home/produits/edit')}} ">
                            <button class="btn btn-sm btn-warning" >modifier</button>
                            </a>
                        
                          <form action ="{{url('home/produits/'.$p->id)}}" method="post">
				            {{csrf_field()}}
                            {{method_field('DELETE')}}
				            <button type="submit" class="btn btn-sm btn-danger" >supprimer</button></form>
                           
                      </th> 
                    
                    </tr>
                    
                </tbody>
                @endforeach

    @endsection