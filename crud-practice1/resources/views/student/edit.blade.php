@extends('master')
@section('content')
    <form action="{{route('student.update', $student->id)}}" method="POST" >
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" name="department" id="department" value="{{$student->department}}" placeholder="Department" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" name="message" id="message" value="{{$student->message}}" placeholder="Your message" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection