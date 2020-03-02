<html>
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv= "X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class='container'>
        <div class ="jumbotron">
            <form action="/updatepropertydetails/{{ $properties->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <h1>Add Property</h1><br><br>

                @if(count($errors)>0)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                
                <div class="form-group">
                    <label>Name of Property</label>
                    <input type="text" name="name"  class="form-control" placeholder="Enter Name of Property" value="{{$properties->name}}">
                </div>
                <div class="form-group">
                    <label>Gender Preference</label>
                    <select name="gender_pref" class="form-control" value="{{$properties->gender_pref}}">
                        <option value="Male" {{($properties->gender_pref =="Male") ? "selected" : "" }}>Male</option>
                        <option value="Female" {{($properties->gender_pref =="Female") ? "selected" : "" }}>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Available bed</label>
                    <input type="number" name="available_bed" min="1" class="form-control" placeholder="Enter number of available beds to be rented out" value="{{$properties->available_bed}}">
                </div>
                <div class="form-group">
                    <label>Total number of bed</label>
                    <input type="number" name="total_bed" min="1" class="form-control" placeholder="Enter total number of beds in the hostel"value="{{$properties->total_bed}}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Adress of hostel"value="{{$properties->address}}">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select name="city" class="form-control" value="{{$properties->city}}">
                        <option value="Georgetown" {{($properties->city =="Georgetown") ? "selected" : "" }}>Georgetown</option>
                        <option value="Bayan Lepas" {{($properties->city =="Bayan Lepas") ? "selected" : "" }}>Bayan Lepas</option>
                        <option value="Subang" {{($properties->city =="Subang") ? "selected" : "" }}>Subang</option>
                        <option value="Kuala Lumpur" {{($properties->city =="Kuala Lumpur") ? "selected" : "" }}>Kuala Lumpur</option>
                        <option value="Nilai" {{($properties->city =="Nilai") ? "selected" : "" }}>Nilai</option>
                        <option value="Kota Kinabalu" {{($properties->city =="Kota Kinabalu") ? "selected" : "" }}>Kota Kinabalu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Price/Month (RM)</label>
                    <input type="number" step="0.01" name="price" min ="0" class="form-control" placeholder="Enter monthly rental fee" value="{{$properties->price}}">
                </div>
                <div class="form-group">
                    <label>Electricity & Water</label>
                    <select name="electricity_water" class="form-control" value={{$properties->electricity_water}}>
                        <option value="Included" {{($properties->electricity_water =="Included") ? "selected" : "" }}>Included</option>
                        <option value="Not Included" {{($properties->electricity_water =="Not Included") ? "selected" : "" }}>Not Included</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="Enter mobile phone number" value="{{$properties->contact}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address"  pattern="^[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+(?:[a-zA-Z]{2}|aero|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel)$" value="{{$properties->email}}">
                </div>
                <div class="form-group">
                    <label>Distance to campus(km) </label>
                    <input type="number" step="0.01" min="0" name ="distance" class="form-control" placeholder="Enter distance from hostel to campus" value="{{$properties->distance}}">
                </div>
                <div class="form-group">
                    <label>Build Up(Sq Ft) </label>
                    <input type="number" name="buildup" min="1" class="form-control" placeholder="Enter build up of hostel unit" value="{{$properties->buildup}}">
                </div>
                <div class="form-group">
                    <label>Bathrooms</label>
                    <input type="number" name="bathrooms" min="1" class="form-control" placeholder="Enter number of bathrooms in the hostel" value="{{$properties->bathrooms}}">
                </div>
                <div class="form-group">
                    <label>Furnishing</label>
                    <select name="furnishing" class="form-control" value="{{$properties->furnishing}}">
                        <option value="Unfurnished" {{($properties->furnishing =="Unfurnished") ? "selected" : "" }}>Unfurnished</option>
                        <option value="Semi-furnished" {{($properties->furnishing =="Semi-furnished") ? "selected" : "" }}>Semi-furnished</option>
                        <option value="Fully furnished" {{($properties->furnishing =="Fully furnished") ? "selected" : "" }}>Fully furnished</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Amenities</label>
                    <input type="text" name="amenities" class="form-control" placeholder="Enter amenities in the hostel" value="{{$properties->amenities}}">
                </div>
                <div class="form-group">
                    <label>Facilities</label>
                    <input type="text" name="facilities" class="form-control" placeholder="Enter facilities in the hostel" value="{{$properties->facilities}}">
                </div>
                <div class="form-group">
                    <label>Occupants</label>
                    <input type="text" name="Occupants" class="form-control" placeholder="Enter current occupants in the hostel" value="{{$properties->Occupants}}">
                </div>
                <div class="form-group">
                    <div class="custom-control">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                        <br><br>
                            <div> 
                            @if($properties->image && $properties->image != '')
                                <center><img src = "{{ asset('uploads/property/' . $properties->image)}}" width = "200px;" height = "200px;" alt = "Image"></center>
                            @else
                                <center><p>No Image</p></center>
                            @endif
                            </div>
                 
                    </div>
                </div>
                
                <br><br>
                <div style='float:right;'>
                    <button type="submit" name="submit" class ="btn btn-primary">Save</button>
                    <a href ="/propertiespage" class = "btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div> 
</body>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop