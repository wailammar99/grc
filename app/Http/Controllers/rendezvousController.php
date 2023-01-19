<?php

namespace App\Http\Controllers;

use App\Models\rendezvous;
use Illuminate\Http\Request;

class rendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redez=rendezvous::all();
        return $redez ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('rendezvous.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rendez= new rendezvous();
        $rendez->date=$request->input('date');
        $rendez->heure=$request->input('heure');
        $rendez->compte_rendu=$request->input('compte_rendu');
        $rendez->client=$request->input('client');
        $rendez->save();
        $id=$request->input('client');
        return redirect('home/clients/'.$id);
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
        $rendez = rendezvous::find($id);
     
        return view('rendezvous.edit', ['rendez'=>$rendez ]);
        return redirect()->back();
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
        $rendez= new rendezvous();
        $rendez->date=$request->input('date');
        $rendez->heure=$request->input('heure');
        $rendez->compte_rendu=$request->input('compte_rendu');
        $rendez->client=$request->input('client');
        $rendez->save();
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
        $rendez = rendezvous::find($id);
        $rendez->delete ();
        return redirect()->back();
    }
}
