<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv= "X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">
            <div class ="jumbotron">
            <h1>MY PROPERTIES</h1><br><br>
            @if (Session::has('message'))
                    <div class="alert alert-success"> {{Session::get('message')}}</div>
                @endif
            <div style='float:right;'>
                <a href ="/property" class = "btn btn-primary">Add Property </a>
            </div><br>
                <table class="table table-stripped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender Preference</th>
                        <th scope="col">City</th>
                        <th scope="col">Price(RM)</th>
                        <th scope="col">Available Bed(s)</th>
                        <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $item)
                        <tr>
                            <th> 
                                @if($item->image && $item->image != '')
                                <img src = "{{ asset('uploads/property/' . $item->image)}}" width = "100px;" height = "100px;" alt = "Image">
                                @else
                                <p>No Image</p>
                                @endif
                            </th>
                            <th> {{$item->name }}</th>
                            <th> {{$item->gender_pref }}</th>
                            <th> {{$item->city }}</th>
                            <th> {{$item->price }}</th>
                            <th> {{$item->available_bed }}</th>
                            <th> <a href="/viewproperty/{{ $item->id }}" class ="btn btn-success"> View </a><br>
                                    <a href="/editproperty/{{ $item->id }}" class ="btn btn-warning"> Edit </a><br>
                                    <a href="/deleteproperty/{{ $item->id }}" class ="btn btn-danger">Delete </a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>