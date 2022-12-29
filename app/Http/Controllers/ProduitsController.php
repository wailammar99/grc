<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\opportunités as oppertunite ;
use  App\Models\produits as Produits ;


class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=produits::all();
        return $produits;
    }
    public function listedesproduits ()
    {
        $produits=Produits::all();
        return view('oppertunite.afficher',['Produits'=>$produits]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $file_extension=$request->produits->photo->getclientoriginalExtension();
        $file_name=time().$file_extension;
        $path='images';
        $request->photo->move($path,$file_name);
        */
        $produits =new Produits() ;
        $produits->nom = $request->input('nom');
        $produits->description = $request->input('despription');
        $produits->photo = $request->input('photo');
        
        $produits->prix = $request->input('prix');
        $produits->quantite = $request->input('quantite');
        $produits->idopp = $request->input('idopp');

        $produits->save();
        return redirect()->back() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits = Produits::find($id);
        return view('produits.edit', ['produits'=>$produits]);
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
        $produits = Produits::find($id);
    	$produits->nom = $request->input('nom');
    	$produits->description = $request->input('description');
        $produits->photo = $request->input('photo');
        $produits->ptix = $request->input('prix');
        $produits->quantite = $request->input('quantite');
       

    	$produits->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $produits = Produits::find($id);
    	$produits->delete();
    	return redirect()->back();
    }
}
