<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    

    public function user(){
        $data=user::all();
        return view('admin.user.users', compact('data'));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
}
