@extends('layout')
@section('content')

<div class="card" style="width: 350px; " >
    <div class="card-header">
    <div class="card-body">
        <form action="{{url("batches")}}" method="POST">
          {{csrf_field()}}
          <label>Name</label><br/>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>Course ID</label>
           <select name="course_id" id="course_id" class="form-control">
           @foreach($courses as $course)
        <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
           </select><br>
          <label>Start Date</label>
          <input type="text" name="start_date" id="start_date" class="form-control"></br> 
          
          <button type="submit" value="Save" class="btn btn-success btn-md" >Save</button>
                                        
    </form>
    </div>
</div>
</div>
@endsection