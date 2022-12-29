<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminauth extends Controller
{
    function userlogin(Request $req)
    {
    $data= $req->input();
    $req->session()->put('user',$data['user']);
    return redirect('home');
   

    }
}
