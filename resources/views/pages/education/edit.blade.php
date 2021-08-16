@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">Edit Education</h1>
                <form action="{{route('admin.education.update',$education->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <div class="mb-3">
                                <label for="institution"><h5>Institution</h5></label>
                                <input type="text" class="form-control" id="institution" name="institution" value="{{$education->institution}}">
                            </div>
                            <div class="mb-3">
                                <label for="qualification"><h5>Qualification</h5></label>
                                <input type="text" class="form-control" id="qualification" name="qualification" value="{{$education->qualification}}">
                            </div>
                            <div class="mb-3">
                                <label for="concentration"><h5>Concentration</h5></label>
                                <input type="text" class="form-control" id="concentration" name="concentration" value="{{$education->concentration}}">
                            </div>
                            <div class="mb-3">
                                <label for="result"><h5>Result</h5></label>
                                <input type="text" class="form-control" id="result" name="result" value="{{$education->result}}">
                            </div>
                            <div class="mb-3">
                                <label for="timeframe"><h5>Timeframe</h5></label>
                                <input type="text" class="form-control" id="timeframe" name="timeframe" value="{{$education->timeframe}}">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary mt-4">
                </form>
            </div>    
        </main>
@endsection        
