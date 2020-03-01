<?php

namespace App\Http\Controllers;
use App\Property;
use App\Property_Model;

use DB;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function edit($id){
        $properties = Property_Model::find($id);
        return view('propertyupdateform')->with('properties',$properties);
        //return view('propertyupdateform',compact('properties'));
    }

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

        $properties = Property_Model::all();
        
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
            $file->move('assets/property-img/', $filename);
            $property->image = $filename;
        }else{
            $property->image ='';
        }

        $property->save();

        //return view('property')->with('employee', $property);
        return redirect('ownerhome')->with('employee', $property);
    }

    public function delete($id){
        $properties = Property_Model::find($id);
        $properties ->delete();
        return redirect('/propertiespage')->with('message', 'A property has been deleted successfully!');
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'name'=> 'required',
            'gender_pref'=> 'required',
            'available_bed'=> 'required',
            'total_bed'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'price'=> 'required',
            'electricity_water'=> 'required',
            'contact'=> 'required',
            'email'=> 'required',
            'distance'=> 'required',
            'bathrooms'=> 'required',
            'furnishing'=> 'required',
            'amenities'=> 'required',
            'facilities'=> 'required',
            'Occupants'=> 'required'
        ]);

        $property = Property_Model::find($id);

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
            $file->move('assets/property-img/', $filename);
            $property->image = $filename;
        }

        $property->save();

        //return redirect('propertiespage')->with('property', $property);
        return redirect('propertiespage')->with('message', 'A property has been updated successfully!');
    }



}
