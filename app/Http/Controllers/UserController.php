<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $userName = $request->input('user_name', '');
        $password = $request->input('user_password', '');
        $nickName = $request->input('user_nickname', '');
        $designation = $request->input('user_designation', '');
        $user_id = $request->input('user_id_no', '');
        $user_phone = $request->input('user_phone');
        $image_file = $request->file('image');
        $sector = $request->input('sector');
        $path = public_path() . ‘/uploads/’;
        if(User::where('phone', '=', $user_phone)->first()!=null)
        {
            return "exists";
        }
        $user = new User();
        $user->name = $userName;
        $user->password = $password;
        $user->nickname = $nickName;
        $user->designation = $designation;
        $user->id_no = $user_id;
        $user->phone = $user_phone;
        $user->sector = $sector; 
        $file_name = $this->generateRandomString(6);       
        $file->move($path, $file_name);
        $user->imageurl = $file_name;
        $user->save();
        return $user;
    }
    public function login(Request $request)
    {
        $userPhone = $request->input('user_phone', '');
        $password = $request->input('user_password', '');
        $user = User::where('phone', '=', $userPhone)->where('password', '=', $password)->first();
        if($user == null)
        {
            return "failed";
        }
        else
        {
            return $user;
        }
    }
    public function generateRandomString($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getallusers()
    {
        return User::all();
    }
}