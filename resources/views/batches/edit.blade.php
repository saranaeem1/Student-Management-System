@extends('layout')
@section('content')
<div class="card" style="width: 350px;">
    <div class="card-header"> Edit Page </div>
    <div class="card-body">
        <form action="{{ url("batches/".$batches->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $batches->id }}" />
            <label>Name</label><br/>
            <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"><br/>
            <label>Course ID</label>
            <input type="text" name="course_id" id="course_id" value="{{ $batches->course->name }}" class="form-control"><br/>
            <label>Start Date</label>
            <input type="text" name="start_date" id="start_date" value="{{ $batches->start_date }}" class="form-control"><br/> 
            <button type="submit" class="btn btn-success btn-md">Edit</button>
        </form>
    </div>
</div>
@stop
