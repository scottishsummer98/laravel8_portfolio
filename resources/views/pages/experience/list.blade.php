@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">List of Experiences</h1>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Company</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Time-Frame</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($experience)>0)
                            @foreach ($experience as $experience)
                                <tr>
                                    <th scope="row">{{$experience->id}}</th>
                                    <td>{{$experience->designation}}</td>
                                    <td>{{$experience->company}}</td>
                                    <td>{{Str::limit(strip_tags($experience->summary),40)}}</td>
                                    <td>{{$experience->timeframe}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="{{route('admin.experience.edit',$experience->id)}}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col-sm-4">
                                                <form action="{{route('admin.experience.destroy',$experience->id)}}" method="POST">
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
