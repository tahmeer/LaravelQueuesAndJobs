<?php

namespace App\Http\Controllers;

use App\People;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Symfony\Component\VarDumper\Cloner\Data;

class BasicController extends Controller
{
    function Login(){
        return view('Basic.Login');
    }

    function LoginUser(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email','password');
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // echo "yes";
            // dd();
           return redirect()->intended('/welcomeUser');


        }else{
            // dd();
            return redirect()->back()->with('error', 'Oppes! You have entered invalid credentials');;

        }

    }
    function ShowRegister(){
        return view('Basic.Register');
    }
    function Register(Request $request){
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            // 'zip' => 'required|string|max:255',
            'useremail' => 'required|string|email|max:255|unique:peoples',
            'password' => 'required|string|min:8',
        ]);
        // dd($request);
        // dd($request);

        $data = new User();
        $data->name = $request->firstname;
        // $data->lastname = $request->lastname;
        $data->email = $request->email;
        // $data->state = $request->state;
        // $data->city = $request->city;
        // $data->zip = $request->zip;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect()->route('welcome');
    }
    function WelcomeUser(){
        return view('Basic.Welcome');
    }
    function Logout(){
        Auth::logout();
        return redirect('/');
    }
}
