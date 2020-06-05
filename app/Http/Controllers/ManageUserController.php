<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    public function index()
    {
        $user = User::paginate(10);
        if(Auth::user()->roles == '1'){
        return view('user.index', compact('user'));
        }
        else{
            return redirect()->back();
        }
    }
    public function edit(User $user)
    {
        return view('country.edit', compact('country'));
    }
    
}
