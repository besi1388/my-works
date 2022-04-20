<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;

class AdminController extends Controller
{
   

    public function cars(){
        $cars=Car::all();
        return view('admin.cars', ['car' => $cars]);
    }

    public function delete($id){
        $cars=Car::find($id);
        $cars->delete();
        return redirect()->back();
    }

    public function showData($id){
        $cars= Car::find($id);
        return view('admin.edit', ['cars'=>$cars]);
       
    }

/*----------------- Update--------------------*/ 

    public function update(Request $request, $id)
    {
        
      
        $cars = Car::find($id);
        $cars->Make = $request->input('make');
        $cars->Model= $request->input('model');
        $cars->Year= $request->input('year');
        $cars->Price= $request->input('price');
        

        
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $extention = $file-> getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('imgs/', $filename);
            $cars->image = $filename;
        }

          
       
        
        $cars->Seats= $request->input('seats');
        $cars->Specs= $request->input('specs');
        $cars->update();
        return redirect('cars')->with('success', 'Car updated successfully');
         
        

        

    }

 /*----------------- Create--------------------*/   
    
    public function create()
    {
    
        $categories = Category::all();
        return view('admin.create', compact('categories'));
    }

    
    public function store(Request $request,  $cars)
    {
         
        $cars = new Cars;
        $cars->Make = $request->input('make');
        $cars->Model= $request->input('model');
        $cars->Year= $request->input('year');
        $cars->Price= $request->input('price');

        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('imgs/', $filename);
            $cars->image = $filename;
        }

        
        $cars->Seats= $request->input('seats');
        $cars->Specs= $request->input('specs');
       
        $cars->update();
           
          return redirect()->route('cars')
          ->with('success','Car has been created successfully.');

 
    }


    public function add(Request $request){

        
        $car = new Car;
        $car->Make = $request->make;
        $car->Model= $request->model;
        $car->Year= $request->year;
        $car->Price= $request->price;
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('imgs/', $filename);
            $car->image = $filename;
        }
        

        $car->Seats= $request->seats;
        $car->Specs= $request->specs;
        $car->save();
        //dd($request->get('categories'));
        $car->categories()->sync($request->get('categories')); 
        return redirect('/cars')->with('success','Car has been created successfully.');
    }


}
