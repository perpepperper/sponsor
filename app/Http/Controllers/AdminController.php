<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use Auth;
class AdminController extends Controller
{
    public function dashboard(){
        $children = Child::all()->where('is_adopted','=',1);
        return view('admin.dashboard',compact('children'));
    }
    public function login($guard = null){
        if(Auth::guard($guard)->check())
        {
            return redirect('/backend/dashboard');
        }
        else
            return view('containers.login');
    }
    public function postlogin(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/backend/dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/backend/login');
    }
    public function adoptAction(Request $request)
    {
        if($request->action == 1)
        {
            $child = Child::find($request->id);
            $child->is_adopted = 2;
            $child->save();
        }
        else
        {
            $child = Child::find($request->id);
            $child->is_adopted = 0;
            $child->save();

            $person = $child->person;
            $person->delete();
        }
        return redirect()->back();
    }
}
