@extends('layout')
@section('content')

<div class="card" style="width: 350px;">
    <div class="card-header"> Edit Page </div>
    <div class="card-body">
        <form action="{{ url("enrollments/".$enrollments->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $enrollments->id }}" />
            <label>Enroll No</label><br/>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{ $enrollments->enroll_no }}"></br>
            <label>Batch</label>
          <select name="batch_id" id="batch_id" class="form-control">
            @foreach($batches as $batch)
                <option value="{{ $batch->id }}">{{ $batch->name }}</option>
            @endforeach
          </select><br>
            <label>Student</label>
          <select name="student_id" id="student_id" class="form-control">
            @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
          </select>
          <br/>
            <label>Start date</label>
            <input type="text" name="join_date" id="join_date" class="form-control" value="{{ $enrollments->join_date }}" ></br> 
            <label>Fee</label>
            <input type="text" name="fee" id="fee" class="form-control" value="{{ $enrollments->fee }}" ></br>
            <button type="submit" class="btn btn-success btn-md">Update</button>  
        </form>

    </div>
</div>

@stop