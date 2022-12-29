<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\opportunités as oppertunite ;
use App\Models\produits as produits ;

use App\Models\opportunités ;
use Illuminate\Http\Request;


class oppertuniteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oppertunite=opportunités::all();
        return $oppertunite;
    }
  public function listeoppertunite ()
  {
    $oppertunite=opportunités::all();
        
    return view('opportunite',['opportunités'=>$oppertunite]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oppertunite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oppertunite= new oppertunite();
        $oppertunite->nom = $request->input('nom');
    	$oppertunite->montant = $request->input('montant');
        $oppertunite->etape = $request->input('etape');
    	$oppertunite->date_de_cloture = $request->input('date_de_cloture');
        $oppertunite->client = $request->input('client');
        $oppertunite->produits = $request->input('produits');
        $oppertunite->save();
        return redirect('home/opportunite');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oppertunite = opportunités::find($id);
        $produits = produits::where('idopp', $id)->get();
      
      
        
        return view('oppertunite.afficher', ['opportunités'=>$oppertunite,'produits'=>$produits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oppertunite = oppertunite::find($id);
        return view('oppertunite.edit', ['opportunités'=>$oppertunite]);
       

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
        $oppertunite = oppertunite::find($id);
    	$oppertunite->nom = $request->input('nom');
    	$oppertunite->montant = $request->input('montant');
        $oppertunite->etape = $request->input('etape');
        $oppertunite->date_de_cloture = $request->input('date_de_cloture');
        $oppertunite->client = $request->input('client');
        $oppertunite->produits = $request->input('produits');

    	$oppertunite->save();
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
        
        $oppertunite = oppertunite::find($id);
    	$oppertunite->delete();
    	return redirect('home/opportunite');
    }
}
