<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //

    public function getData(Request $request) {
       
        $cars = Car::all();
    
        return view('index', ['cars'=>$cars]);
    }

   
    

    public function redirect() {

        $usertype= Auth::user()->usertype;

        

        if($usertype=='1'){

            return view('admin.home');
        }

        else{
            return redirect()->route('index');
        }
    }
    
    
}

