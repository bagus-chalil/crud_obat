<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    
    public function create(){
        return view('auth.register');
    }
    
    public function store(Request $request){  
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|min:3|max:255|unique:users|email:dns',
            'telephone' => 'required|min:11|max:13',
            'password' => 'required|min:5|max:20|same:repassword',
            'repassword' => 'required|min:5|max:20'
        ]);
        $password = $request->input('password'); // password is form field
        $data=([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'telephone'=>$request->input('telephone'),
            'image'=>"default.jpg",
            'password' => Hash::make($password),
            'created_at'=>time()
        ]);
        
        User::create($data);
        return redirect('/login')->with('success','Data berhasil ditambahkan!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email','email:dns'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/main');
        }
 
        return back()->with('loginError','The provided credentials do not match our records.');
    }

    public function logout(Request $request)
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login')->with('success','Proses Logout berhasil!');
    }

    public function profil()
    {
        return view('page.profil');
    }

    public function edit_profil()
    {
        return view('page.edit_profil');
    }

    public function update_profil(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->input('edit_name');
        $user->telephone = $request->input('edit_telephone');
        if ($request->hasFile('image')) {

            $old_image_destination= 'image_user/'.$request->input('image1');
            if (File::exists($old_image_destination)) 
            {
                File::delete($old_image_destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->input('edit_name').'-'.time().'.'.$extention;
            $file->move(public_path('image_user'), $filename);
            $user->image = $filename;
        }
        $user->update();
        
        
        return redirect('/profil')->with('success','Data berhasil Diupate!');
    }
}
