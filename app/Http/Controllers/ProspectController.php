<?php

namespace App\Http\Controllers;

use App\Models\clients as Client;

use App\Models\prospects as Prospects;
use App\Models\contacts as contact ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $prospect=Prospects::all();
        return   view('prospects',['prospects'=>$prospect]);
   
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        return view('prospect.create');
    }

    public function listeprospect()
    {
        $prospect=Prospects::all();
        
        return view('prospect',['prospect'=>$prospect]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prospect = new Prospects();
    	$prospect->nom = $request->input('nom');
    	$prospect->prenom = $request->input('prenom');
        
    	$prospect->email = $request->input('email');
        $prospect->telephone = $request->input('telephone');
    	$prospect->adresse = $request->input('adresse');
        
        $prospect->site_web = $request->input('site_web');
        $prospect->societe=$request->input('societe');
        $prospect->foction=$request->input('foction');
        $prospect->source=$request->input('source');
    	$prospect->save();
        return redirect('/home/prospect');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prospect=Prospects::find($id);
        return view('prospect.afficher',['prospect'=>$prospect]);
    }
    public function transformertoclient($id )
    {
        $prospect=Prospects::find($id);
     
        $dev ='devlopper' ;
       $client=Client::create([
            'societe' =>$prospect->societe,
            'telephone' =>$prospect->telephone,
            'site_web' =>$prospect->site_web ,
            'adresse' =>$prospect->adresse 
        ]);
        $client->save();
        $contact=contact::create(
            [
                
                'nom' =>$prospect->nom,
                'prenom' =>$prospect->prenom,
                'telephone' =>$prospect->telephone,
                'foction' =>$dev ,
                'email' =>$prospect->email ,
                'client' => $client->id,
                'password' =>Hash::make('123456')
            ]
            );
            $contact->save();
      
            $prospect->delete();
        return  redirect('home/clients');


 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prospect = Prospects::find($id);
        return view('prospect.edit', ['prospect'=>$prospect]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prospect = Prospects::find($id);
    	$prospect->nom = $request->input('nom');
    	$prospect->prenom = $request->input('prenom');
        $prospect->societe = $request->input('societe');
        $prospect->telephone = $request->input('telephone');
        $prospect->adresse = $request->input('adresse');
        $prospect->site_web = $request->input('site_web');
        $prospect->source = $request->input('source');
        $prospect->email = $request->input('email');
    	$prospect->save();
    	return redirect('home/prospect'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prospect = Prospects::find($id);
    	$prospect->delete();
    	return redirect('home/prospect');
    }
}
