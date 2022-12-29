<?php

namespace App\Http\Controllers;
use App\Models\contacts as contact;
use App\Models\clients as Client;
use App\Models\opportunités;
use App\Models\rendezvous as rendezvous;
use Illuminate\Http\Request;

class clientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $clients=Client::all();
        return $clients;
   
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');

    }

    public function clients()
    {
        $clients=Client::all();
        
        return view('clients',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients= new Client();
        $clients->societe = $request->input('societe');
    	$clients->telephone = $request->input('telephone');
        $clients->adresse = $request->input('adresse');
    	$clients->site_web = $request->input('site_web');
        $clients->save();
        return redirect('clients');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        $contact = Contact::where('client', $id)->get();
        $oppertunite =opportunités::where('client',$id)->get();
        $rendez=rendezvous::where('client',$id)->get();
       
        return view('client.afficher', ['client'=>$client ,'contact'=>$contact,'oppertunite'=>$oppertunite,'rendez'=>$rendez]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
     
        return view('client.edit', ['client'=>$client ]);
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
        $client = Client::find($id);
    	$client->societe = $request->input('societe');
    	$client->telephone = $request->input('tel');
        $client->adresse = $request->input('adresse');
        $client->site_web = $request->input('site');
    	$client->save();
    	return redirect('home/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
    	$client->delete();
    	return redirect('home/clients');

    }
}
