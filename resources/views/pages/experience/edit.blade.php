@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">Edit Experience</h1>
                <form action="{{route('admin.experience.update',$experience->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <div class="mb-3">
                                <label for="designation"><h5>Designation</h5></label>
                                <input type="text" class="form-control" id="designation" name="designation" value="{{$experience->designation}}">
                            </div>
                            <div class="mb-3">
                                <label for="company"><h5>Company</h5></label>
                                <input type="text" class="form-control" id="company" name="company" value="{{$experience->company}}">
                            </div>
                            <div class="mb-3">
                                <label for="timeframe"><h5>timeframe</h5></label>
                                <input type="text" class="form-control" id="timeframe" name="timeframe" value="{{$experience->timeframe}}">
                            </div>
                        </div>
                        <div class="form-group col-md-3 mt-3">
                        <div class="mb-3">
                                <label for="summary"><h5>Summary</h5></label>
                                <textarea style="height:23vh" type="text" class="form-control" id="summary" name="summary">{{$experience->summary}}"</textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary mt-4">
                </form>
            </div>    
        </main>
@endsection        
