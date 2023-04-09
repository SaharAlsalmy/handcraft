<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit(){
        $user=Auth::user();
        return view('dashboard.profile.edit',compact('user'));
    }

    public function update(Request $requset){
        $requset->validate([
            'name' => ['required', 'string', 'max:255'],
            'birthday' => ['nullable', 'date', 'before:today'],
            'gender' => ['in:male,female'],
            'country' => ['required', 'string', 'size:2'],


        ]);

        $user=$requset->user();  // auth هي نفس عمل ال
        // return redirect('');

    }
}
