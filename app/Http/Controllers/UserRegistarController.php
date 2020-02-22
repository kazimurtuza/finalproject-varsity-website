<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

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

    public function EditHomeSlide()
    {
        return view('admin.EditHomePage');
    }
    public function PostEditHomeSlide()
    {
        return "PostEditHomeSlide";
    }



    public function EditUserinfo(Request $request)
    {
        
        // $data=user::find($request->id);
        // $data->name=$request->name;
        // $data->email=$request->email;
        // $data->phone=$request->phone;
        // $data->photo=$imgurl;
        // $data->save();
       
        return view('admin.EditUser-info');
    }
    public function PostEditUserinfo(Request $request)
    {
        
        $data=user::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
      
        $data->save();
       
        return redirect('Show-User-profile')->with('message',"user info successfuly pudate");
    }

    public function EditUserphoto(Request $request)
    {
        
     
       
        return view('admin.EditUser-photo');
    }
    public function PostEditUserphoto(Request $request)
    {
        $imgurl=$this->photo($request);
        if(Auth::user()->photo)
        {
            unlink(Auth::user()->photo);
            $data=user::find($request->id);
            $data->photo=$imgurl;
            $data->save();
        }
        else{
            $data=user::find($request->id);
            $data->photo=$imgurl;
            $data->save();

        }

        $profile=Auth::user();
        // return view('admin.user-profile',['user'=>$profile])->with('message','user info successfuly pudate');
        return redirect('Show-User-profile')->with('message','successflly update photo');
        
       
      
    }

    public function photo($request)
    {
        $file=$request->file('photo');
        $name=$file->getClientOriginalName();
        $path='public/img/user/';
        $imgurl=$path.$name;
        Image::make($file)->resize(100,100)->save($imgurl);
        return $imgurl;

    }



    public function EditUserpassword(Request $request)
    {
        
       
        return view('admin.EditUser-password');
    }
    public function PostEditUserpassword(Request $request)
    {
         $oldpass=Auth::user()->password;
         $oldpasword=$request->oldpassword;
         $newpasword=$request->newpassword;
        if(hash::check($oldpasword,$oldpass))
        {      
            $data=user::find($request->id);
            $data->password=hash::make($newpasword);
            $data->save();
            return view('admin.login');   
        }
        else{   
            return redirect('Show-User-profile')->with('error_message','old password not match try again');   
        }
  
       
   
    }


    public function ShowUserprofile()
    {
        $profile=Auth::user();
        return view('admin.user-profile',['user'=>$profile]);
    }
}
