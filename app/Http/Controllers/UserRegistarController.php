<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
class UserRegistarController extends Controller
{
    // public function addregister(Request $request)
    // {

    // }
    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function addregister(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect('user-list');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required','digits:11'],
            'role' => ['required', 'string',],
        ]);

        
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showuserlist()
    {    
        $user=user::all();
         return view('admin.userlist',['user'=>$user]);
    }
}
