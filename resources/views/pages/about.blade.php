@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">About</h1>
                <form action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <h5>Profile Picture</h5>
                            <div class="mb-3">
                                <img style="height:20vh" src="{{url($about->profile_picture)}}" class="img-thumbnail">
                                <input class="mt-3" type="file" id="profile_picture" name="profile_picture">
                            </div>
                            <div class="mb-3">
                                <label for="first_name"><h5>First Name</h5></label>
                                <input type="text" class="form-control" id="first_Name" name="first_Name" value="{{$about->first_Name}}">
                            </div>
                            <div class="mb-3">
                                <label for="last_name"><h5>Last Name</h5></label>
                                <input type="text" class="form-control" id="last_Name" name="last_Name" value="{{$about->last_Name}}">
                            </div>
                        </div>
                        <div class="form-group col-md-3 mt-3">
                            <div class="mb-3">
                                <label for="address"><h5>Address</h5></label>
                                <input type="text" class="form-control" id="address" name="address" value="{{$about->address}}">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number"><h5>Phone Number</h5></label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$about->phone_number}}">
                            </div>
                            <div class="mb-3">
                                <label for="email"><h5>Email</h5></label>
                                <input type="text" class="form-control" id="email" name="email" value="{{$about->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="short_description"><h5>Short Description</h5></label>
                                <textarea style="height:16vh" type="text" class="form-control" id="short_description" name="short_description"><?php echo $about->short_description ?></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-4">
                </form>
            </div>    
        </main>
@endsection        
