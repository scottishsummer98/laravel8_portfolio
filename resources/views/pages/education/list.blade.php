@extends('layouts.admin_layout')
@section('content')
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">List of Educations</h1>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Institution</th>
                        <th scope="col">Qualification Type</th>
                        <th scope="col">Concentration</th>
                        <th scope="col">Result</th>
                        <th scope="col">Time-Frame</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($education)>0)
                            @foreach ($education as $education)
                                <tr>
                                    <th scope="row">{{$education->id}}</th>
                                    <td>{{$education->institution}}</td>
                                    <td>{{$education->qualification}}</td>
                                    <td>{{$education->concentration}}</td>
                                    <td>{{$education->result}}</td>
                                    <td>{{$education->timeframe}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="{{route('admin.education.edit',$education->id)}}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col-sm-4">
                                                <form action="{{route('admin.education.destroy',$education->id)}}" method="POST">
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
