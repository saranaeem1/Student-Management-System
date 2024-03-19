@extends('layout')
@section('content')
<div class="card" style="width: 350px; " >
    <div class="card-header">
    <div class="card-body">
        <form action="{{url("course")}}" method="POST">
          {{csrf_field()}}
          <label>Name</label><br/>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>Syllabus</label>
          <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
          <label>Duration</label>
          <input type="text" name="duration" id="duration" class="form-control"></br> 
          <button type="submit" value="Save" class="btn btn-success btn-md" >Save</button>                          
    </form>
    </div>
</div>
</div>
@endsection