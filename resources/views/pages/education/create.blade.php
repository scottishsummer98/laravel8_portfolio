@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">Add Education</h1>
                <form action="{{route('admin.education.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <div class="mb-3">
                                <label for="institution"><h5>Institution</h5></label>
                                <input type="text" class="form-control" id="institution" name="institution">
                            </div>
                            <div class="mb-3">
                                <label for="qualification"><h5>Qualification</h5></label>
                                <input type="text" class="form-control" id="qualification" name="qualification">
                            </div>
                            <div class="mb-3">
                                <label for="concentration"><h5>Concentration</h5></label>
                                <input type="text" class="form-control" id="concentration" name="concentration">
                            </div>
                            <div class="mb-3">
                                <label for="result"><h5>Result</h5></label>
                                <input type="text" class="form-control" id="result" name="result">
                            </div>
                            <div class="mb-3">
                                <label for="timeframe"><h5>Timeframe</h5></label>
                                <input type="text" class="form-control" id="timeframe" name="timeframe">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Create" class="btn btn-primary mt-4">
                </form>
            </div>    
        </main>
@endsection        
