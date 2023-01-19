<?php



namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\contacts as contact;
use App\Models\contacts;
use App\Models\Client ;
use App\Models\opportunités ;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Auth\Events\Attempting ;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Input;
use JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate;
use PhpParser\Node\Stmt\Echo_;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $contact=contact::all();
        return $contact;
   
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact/create');
    }

    public function listecontact()
    {
        $contact=contact::all();
        
        return view('contact',['contact'=>$contact]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new contact();
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        
    	$contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
    	$contact->client = $request->input('client');
        $random = Str::random(8);
        $contact->foction =$request->input('foction');
        $contact->password = Hash::make(00000000);
    	$contact->save();
        return redirect('/home/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = contact::find($id);
        return view('contact.edit', ['contact'=>$contact]);
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
        $contact = contacts::find($id);
    	$contact->nom = $request->input('nom');
    	$contact->prenom = $request->input('prenom');
        $contact->foction = $request->input('foction');
        $contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
        $contact->client = $request->input('client');
        $contact->password = $request->input('password');

    	$contact->save();
    	return redirect('home/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = contact::find($id);
    	$contact->delete();
    	return redirect('home/contact');
    }
    //
    public function login (Request $request)
    {
        $contact=contact::all();
      
        
       if (auth::attempt($request->only(['email','password'])))
       {
        return redirect()->route('homecontact');
       }
       
    
        return redirect()->back()->withErrors('cest le email ou mot passe incorrect');
    
    }
    public function handleLogin(Request $request)
    {
        
        $contact=contact::all();
        
        
       if (auth::guard("webcontact")->attempt($request->only(['$contact->email','$contact->password'])))
       {
        return redirect()->route('homecontact');
       }
       
    
        return redirect()->back()->withErrors('cest le email ou mot passe incorrect');
    
    }
    public function logout ()
    {
        Auth::guard('webcontact')->logout();
        return redirect()->route('loginconatct');
    }
    public function loginne (Request $request)
    {
  
        $contact = contacts::find(6);


        
        if ($request->input('email')==$contact->email && $request->input('password')==$contact->password)
        {
          return   redirect()->route('info');
        }
        else
        {
       echo 'passwor or email not correct' ;
        }
       

    }
    public function loginneform ()
    {
        return view('logincontact/logincontact');
    }
    public function afficherinnfo ()
    {
        $contact=db::table('contacts')->get();

        $contact=contact::find(6);
       
        $c=$contact->client;
        $client = clients::find(1);
        
        $oppertunités =opportunités::find(2);
        
        return view('logincontact/contacthome',['contact'=>$contact,'clients'=>$client,'oppertunite'=>$oppertunités]);
    }
  //
}
