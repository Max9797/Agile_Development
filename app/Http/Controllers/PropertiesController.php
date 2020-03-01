<?php

namespace App\Http\Controllers;
use App\Property;
use DB;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function display(){

        $properties = Property::all();
        
        return view('welcome')->with('properties', $properties);
    }

    public function search(Request $request){
        // $properties = Property::find([$city,$price]);
        $city = $request->query('city');
        $price = $request->query('price');
        $gender = $request->query('gender');

        // return 'city = '.$city. ' price='.$price. 'gender='.$gender ;
        $properties = Property::where('gender',$gender)->where('city',$city)->where('price',$price)->get();
        return view('search-prop')->with('properties',$properties);
        }

    public function displayHome(){

        $properties = Property::all();
        
        return view('ownerhome')->with('properties', $properties);
    }

    public function store(Request $request)
    {
        $property = new Property_Model;
        
        $property->name = $request->input('name');
        $property->gender_pref = $request->input('gender_pref');
        $property->available_bed = $request->input('available_bed');
        $property->total_bed = $request->input('total_bed');
        $property->address = $request->input('address');
        $property->city = $request->input('city');
        $property->price = $request->input('price');
        $property->electricity_water = $request->input('electricity_water');
        $property->contact = $request->input('contact');
        $property->email = $request->input('email');
        $property->distance = $request->input('distance');
        $property->buildup = $request->input('buildup');
        $property->bathrooms = $request->input('bathrooms');
        $property->furnishing = $request->input('furnishing');
        $property->amenities = $request->input('amenities');
        $property->facilities = $request->input('facilities');
        $property->Occupants = $request->input('Occupants');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/property/', $filename);
            $property->image = $filename;
        }else{
            $property->image ='';
        }

        $property->save();

        //return view('property')->with('employee', $property);
        return redirect('propertiespage')->with('employee', $property);
    }



}
