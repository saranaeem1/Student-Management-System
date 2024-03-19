@extends('layout')
@section('content')
<div class="card" style="width: 350px;">
    <div class="card-header"> Edit Page </div>
    <div class="card-body">
        <form action="{{ url("course/".$courses->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $courses->id }}" />
            <label>Name</label><br/>
            <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control"><br/>
            <label>Syllabus</label>
            <input type="text" name="syllabus" id="syllabus" value="{{ $courses->syllabus }}" class="form-control"><br/>
            <label>Duration</label>
            <input type="text" name="duration" id="duration" value="{{ $courses->duration }}" class="form-control"><br/> 
            <button type="submit" class="btn btn-success btn-md">Edit</button>
        </form>
    </div>
</div>
@stop
