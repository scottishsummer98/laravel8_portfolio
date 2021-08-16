@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">Edit Projects</h1>
                <form action="{{route('admin.project.update',$project->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <div class="mb-3">
                                <label for="title"><h5>Project Title</h5></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="usedcomponents"><h5>Used Components</h5></label>
                                <input type="text" class="form-control" id="usedcomponents" name="usedcomponents" value="{{$project->usedcomponents}}">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary mt-4">
                </form>
            </div>    
        </main>
@endsection        
