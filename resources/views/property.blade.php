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
            <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
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
                    <input type="text" name="name" class="form-control" placeholder="Enter Name of Property">
                </div>
                <div class="form-group">
                    <label>Gender Preference</label>
                    <select name="gender_pref" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Available bed</label>
                    <input type="number" name="available_bed" min="1" class="form-control" placeholder="Enter number of available beds to be rented out">
                </div>
                <div class="form-group">
                    <label>Total number of bed</label>
                    <input type="number" name="total_bed" min="1" class="form-control" placeholder="Enter total number of beds in the hostel">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Adress of hostel">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select name="city" class="form-control">
                        <option value="Georgetown">Georgetown</option>
                        <option value="Bayan Lepas">Bayan Lepas</option>
                        <option value="Subang">Subang</option>
                        <option value="Kuala_Lumpur">Kuala Lumpur</option>
                        <option value="Nilai">Nilai</option>
                        <option value="Kota Kinabalu">Kota Kinabalu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Price/Month (RM)</label>
                    <input type="number" step="0.01" name="price" min ="0" class="form-control" placeholder="Enter monthly rental fee">
                </div>
                <div class="form-group">
                    <label>Electricity & Water</label>
                    <select name="electricity_water" class="form-control">
                        <option value="Included">Included</option>
                        <option value="Not Included">Not Included</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="Enter mobile phone number">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" pattern="^[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+(?:[a-zA-Z]{2}|aero|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel)$" placeholder="Enter Email Address">
                </div>
                <div class="form-group">
                    <label>Distance to campus(km) </label>
                    <input type="number" step="0.01" name="distance" min="0" class="form-control" placeholder="Enter distance from hostel to campus">
                </div>
                <div class="form-group">
                    <label>Build Up(Sq Ft) </label>
                    <input type="number" name="buildup" min="0" class="form-control" placeholder="Enter build up of hostel unit">
                </div>
                <div class="form-group">
                    <label>Bathrooms</label>
                    <input type="number" name="bathrooms" min="1" class="form-control" placeholder="Enter number of bathrooms in the hostel">
                </div>
                <div class="form-group">
                    <label>Furnishing</label>
                    <select name="furnishing" class="form-control">
                        <option value="Unfurnished">Unfurnished</option>
                        <option value="Semi-furnished">Semi-furnished</option>
                        <option value="Fully furnished">Fully furnished</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Amenities</label>
                    <input type="text" name="amenities" class="form-control" placeholder="Enter amenities in the hostel">
                </div>
                <div class="form-group">
                    <label>Facilities</label>
                    <input type="text" name="facilities" class="form-control" placeholder="Enter facilities in the hostel">
                </div>
                <div class="form-group">
                    <label>Occupants</label>
                    <input type="text" name="Occupants" class="form-control" placeholder="Enter current occupants in the hostel">
                </div>
                <div class="form-group">
                    <div class="custom-control">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
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
</html>