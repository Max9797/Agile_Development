@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>List Of Your Property</p>
    
<div class="row h-10">
    <div class="col-sm-12">
        <div class="card">

        @if(session()->has('id'))
         <?php echo 'got'; ?>
         @else
         <?php echo 'none'; ?>
        @endif

            <!-- /.card-header -->
            <div class="card-body">
            <div style='float:right;'>
                <a href ="/property" class = "btn btn-primary">Add Property </a>
            </div>
                <table class="table table-bordered mt-10">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Price</th>
                        <th width="10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $i)
                    <tr>
                  
                        <td>{{ $i->id}}</td>
                        <td>{{ $i->name}}</td>
                        <td>
                                @if($i->image && $i->image != '')
                                <img src = "{{ asset('assets/property-img/' . $i->image)}}" width = "100px;" height = "100px;" alt = "Image">
                                @else
                                <p>No Image</p>
                                @endif
                        </td>
                        <td>
                        {{ $i->city}}
                        </td>
                        <td>
                        {{ $i->gender_pref}}
                        </td>
                        <td>{{ $i->price}}</td>
                        <td> <a href="/viewproperty/{{ $i->id }}" class ="btn btn-success"> View </a><br>
                                    <a href="/editproperty/{{ $i->id }}" class ="btn btn-warning"> Edit </a><br>
                                    <a href="/deleteproperty/{{ $i->id }}" class ="btn btn-danger">Delete </a>
                            </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
