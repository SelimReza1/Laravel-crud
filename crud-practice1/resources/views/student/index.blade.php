@extends('master')
@section('content')
    <h2 style="text-align: center">Student Information</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Department</th>
            <th>Information</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1; @endphp
        @foreach($student as $student)
            <tr>
                <td>{{$i}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->department}}</td>
                <td>{{$student->message}}</td>
                <td>
                    <a href="{{route('student.edit' , $student->id)}}" class="btn btn-success">Edit</a>||
                    {{--<a href="{{route('student.destroy' , $student->id)}}" method="delete" onclick="confirm('are you want to delete ?')" class="btn btn-danger">delete</a>--}}
                    <form action="{{route('student.destroy' , $student->id)}}" method="POST" class="update-form">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type='submit' class="btn btn-danger" onclick="confirm('are you want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @php $i++; @endphp
        @endforeach
        </tbody>
    </table>
@endsection