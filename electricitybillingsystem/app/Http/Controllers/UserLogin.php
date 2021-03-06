<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserLogin extends Controller
{
    public  function store(Request $request)
    {
        // print_r($request->input());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->password = Crypt::encrypt($request->input('password'));
        $user->save();

        $request->session()->flash('msg', 'Register Sucessful');
        return redirect('login');
    }
    public function logs(Request $request)
    {

        $user = User::where('name', $request->input('name'))->get();
        if (Crypt::decrypt($user[0]->password) == $request->input('password')) {
            $request->session()->put('user', $user[0]->name);
            return redirect('welcome');
        } else {
            echo "Name or Password incorrect";
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('login');
    }
}
