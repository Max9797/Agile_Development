@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
            <div class ="jumbotron">
                @if($properties->image && $properties->image != '')
                    <center><img src = "{{ asset('assets/property-img/' . $properties->image)}}" width = "300px;" height = "300px;" alt = "Image"></center>
                @else
                    <center><p>No Image</p></center>
                @endif
                <br>
                <center><h1><b>{{$properties->name }}</b></h1></center>
                <br><br><br>

                <h5 class="text-left-right">
                    <b><span class="left-text">Hostel Gender Preference: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->gender_pref}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Number of available beds to rent: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->available_bed}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Hostel Address: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->address}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Hostel City: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->city}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Hostel rental fee per month: </span></b>
                    <span class="byline" style="color:blue;">RM {{$properties->price}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Inclusivity of electric & water bill: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->electricity_water}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Landlord Contact: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->contact}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Landlord Email: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->email}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Distance to INTI campus: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->distance}}KM</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Hostel build up: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->buildup}} sq ft</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Number of bathrooms in the hostel: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->bathrooms}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Hostel furnishing: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->furnishing}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Amenities of the hostel: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->amenities}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Facilities of the hostel: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->facilities}}</span>
                </h5>
                <br>
                <h5 class="text-left-right">
                    <b><span class="left-text">Occupants of the hostel: </span></b>
                    <span class="byline" style="color:blue;">{{$properties->Occupants}}</span>
                </h5>
                <br>
                <center><a href ="/editproperty/{{$properties->id}}" class = "btn btn-warning">EDIT</a></center>
            </div>
        @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
