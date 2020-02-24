<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeslider;
use Image;

class HomesliderController extends Controller
{
    public function PostEditHomeSlide(Request $request)
    {
          $this->validate($request,[
        
            'about'=>'required|max:255',
            'status'=>'required',
        ]);

        $image=$this->image($request);

        $data=new Homeslider();
        $data->sliderpic=$image;
        $data->title=$request->title;
        $data->about=$request->about;
        $data->status=$request->status;
        $data->save();
        return redirect('Edit-home-slide')->with('message','sucessfully save slide');
    }

    public function image($request)
    {
        $file=$request->file('slidepic');
        $imgpath='public/images/slideimg/';
        $imagename=$file->getClientOriginalName();
        $fullname=$imgpath.$imagename;
        Image::make($file)->resize(1400,570)->save($fullname);
        return $fullname;
    }
}
