<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    public function index (){
        $user = User::paginate(10);
        return view ('user',compact('user'));
    }

    public function create(){
        return view ('tambahadmin');
    }

    // public function createCustomer()
    // {
    //     return view('registcustomer');
    // }

    public function createPetani()
    {
        return view('registpetani');
    }

    public function store (Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'role' => 'admin',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user');
    }

    // public function storeCustomer(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     User::create([
    //         'role' => 'customer',
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60)
    //     ]);
    //     return redirect('/user');
    // }

    public function storePetani(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'role' => 'petani',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user');
    }

    public function tambahadmin(){
        return view('tambahadmin');
    }

}
