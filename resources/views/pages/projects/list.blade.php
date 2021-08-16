@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">List of Educations</h1>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Project Title</th>
                        <th scope="col">Used Components</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($project)>0)
                            @foreach ($project as $project)
                                <tr>
                                    <th scope="row">{{$project->id}}</th>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->usedcomponents}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="{{route('admin.project.edit',$project->id)}}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col-sm-4">
                                                <form action="{{route('admin.project.destroy',$project->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach   
                        @endif 
                    </tbody>
                  </table>
            </div>    
        </main>
@endsection        
