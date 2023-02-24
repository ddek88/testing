<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function __invoke()
    {
          return view('auth.login');
    }

    public function store(Request $request)
    {
        
            $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {
                // Jika otentikasi berhasil, arahkan ke halaman yang diinginkan.
                return redirect()->intended('/home');
            } else {
                // Jika otentikasi gagal, arahkan kembali ke halaman login dengan pesan error.
                return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Email atau password salah.']);
            }
        
    }
    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('/');
        }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
            'new' => 'required',
        ]);
        #Match The Old Password
        if(!Hash::check($request->password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new),
            'email' => $request->email,
        ]);

        return back()->with("success", "Password changed successfully!");
    }
}
