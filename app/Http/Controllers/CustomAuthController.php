<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\SerializableClosure\Serializers\Signed;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CustomAuthController extends Controller
{
   public function index () {
    return view('auth.Login');
   }
   public function welcome(){
      return view('auth.welcome');
   }
   public function customLogin(Request $request){
      $request->validate([
         'email' => 'required|email',
         'password' => 'required',
      ]);

      $credentials = $request-> only('email','password');
      if (Auth::attempt($credentials)) {
        return redirect()->intended('dashboard')->withSuccess('Signed in succssfully');

      }
      return redirect('login')->withSuccess('Invalid Cridentials');

   }
   public function registration(){
      return view('auth.registration');
   }
   public function customRegistration(Request $request){
      $request->validate([
          'name' => 'required',
         'email' => 'required|email|unique:users',
         'password' => 'required|min:6',
      ]);
      
      $data = $request->all();
      $check = $this->create($data);
       
      return redirect("login")->withSuccess('You have Register Successfully Login Now');
   }
   public function create(array $data){
      return User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'password' => Hash::make($data['password'])
      ]);
   }
   public function dashboard()
   {
       if(Auth::check()){
           return view('dashboard');
       }
       return redirect("login")->withSuccess('You are not allowed to access');
   }
   
   public function signOut() {
       Auth::logout();
       return Redirect('login');
   }

   public function showusers() {
      $users = User::all();
      $data = compact('users');
      return redirect('users')->with($data);
   }
}
