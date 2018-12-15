@extends('master')
@section('content')
    <form action="{{route('student.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" name="department" id="department" placeholder="Department" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" name="message" id="message" placeholder="Your message" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection