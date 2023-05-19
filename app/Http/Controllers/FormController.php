<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FormData;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]
        );
        $name = $request->input('name') ;
        $email = $request->input('email') ;
         $password = Hash::make($request->input('password')) ;
      //  $password = $request->input('password') ;
        $data = array('name'=>$name,'email'=>$email,'password'=>$password);
        DB::table('test')->insert($data);
        // DB::insert('insert into test (name,email,password) values ("$name","$email","$password")');
      //  return redirect(url('/').'register');
    }
}
