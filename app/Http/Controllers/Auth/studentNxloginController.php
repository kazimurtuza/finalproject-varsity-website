<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentNxloginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:studentNx');
    }

    public function showlogin()
    {
        return view('Nx.loginNx');
    }

       public function login(Request $request)
    {
          Auth::attempt(['email-address'=>$request->email])

    }
}
