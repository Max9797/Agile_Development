@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    You Are Logged in as an Admin
                    <br>
                    <br>
                    <a href='https://www.freecodecamp.org/'><button class="btn btn-danger">Access Admin Profile</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection