<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterCustomerController extends Controller
{
    //
    public function index (){
        $user = User::paginate(10);
        return view ('user',compact('user'));
    }

    public function createCustomer()
    {
        return view('registcustomer');
    }

    public function storeCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'role' => 'user',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user');
    }

    public function registcustomer(){
        return view('registcustomer');
    }

}
