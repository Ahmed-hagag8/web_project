<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function admin_Deposit()
    {
        return view('admin.Deposit');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function index()
    {
        return view('index');
    }
    public function lost_and_found()
    {
        return view('lost-and-found');
    }
    public function cars()
    {
        return view('cars');
    }
    public function Deposit()
    {
        return view('Deposit');
    }
    public function Deposit_arabic()
    {
        return view('Deposit_arabic');
    }
    public function car_arabic()
    {
        return view('car_arabic');
    }
    public function lost_and_found_arabic()
    {
        return view('lost-and-found-arabic');
    }

////////////////////////////////////////////////////
public function auth_login(Request $request)
{

    $remember = !empty($request->remember) ? true : false;
    if ($request->email === 'admin@gmail.com' && $request->role ==='1' && $request->password ==='00000') {
        // Redirect admin user to a different page
        return redirect('/admin.Deposit');
    }
    elseif(Auth::attempt(['email' => $request->email , 'password' => $request->password , 'role' => $request->role]))
    {
        
        return redirect('/');

    }
    else
    {
        return redirect()->back()->with('error',"please enter currect email and password");
    }

}    





public function create_user(Request $request)
    {
       

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();

        return redirect('login')->with('success',"Register successfully");

    }
    
}
