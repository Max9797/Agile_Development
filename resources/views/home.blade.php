<<<<<<< HEAD
{{-- resources/views/admin/dashboard.blade.php --}}
=======
@extends('layouts.app')
>>>>>>> b3bc68724e90acad2e36947ae50ab4917c87c3e2

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<<<<<<< HEAD
    <p>List Of Your Property</p>
    
<div class="row h-10">
    <div class="col-sm-12">
        <div class="card">

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
                        <td>{{ $i->property_name}}</td>
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
                        {{ $i->gender}}
                        </td>
                        <td>{{ $i->price}}</td>
                        <td ><button type="button" class="btn btn-block btn-success">More Info</button>
                        <button type="button" class="btn btn-block btn-success">Book</button>
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
=======
    <p>Welcome to this beautiful admin panel.</p>
>>>>>>> b3bc68724e90acad2e36947ae50ab4917c87c3e2
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
<<<<<<< HEAD
@stop
=======
@stop
>>>>>>> b3bc68724e90acad2e36947ae50ab4917c87c3e2
