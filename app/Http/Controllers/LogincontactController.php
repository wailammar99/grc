<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\contacts ;


class LogincontactController extends Controller
{

    public function showAdminLoginForm()
    {
        return view('logincontact\logincontact', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        $contact=contacts::all();

        if (Auth::guard('admin')->attempt($request->only(['$contact->email','$contact->password']), $request->get('remember'))){
            return redirect()->intended('/contact/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

}
