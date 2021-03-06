@extends('layouts.app')



@section('content')


    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Update Profile</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('profile') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter your name"
                                name="name" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control form-control-lg" readonly
                                value="{{ Auth::user()->email }}" placeholder=" Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>

                        <div class="btn-group me-2 ml-3" role="group" aria-label="Second group">
                        <a href="{{url('home')}}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@endsection
