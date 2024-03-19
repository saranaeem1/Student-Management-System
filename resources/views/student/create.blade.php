@extends('layout')
@section('content')
<div class="card" style="width: 350px; " >
    <div class="card-header">
    <div class="card-body">
        <form action="{{url("student")}}" method="POST">
          {{csrf_field()}}
          <label>Name</label><br/>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>Address</label>
          <input type="text" name="address" id="address" class="form-control"></br>
          <label>Mobile</label>
          <input type="text" name="mobile" id="mobile" class="form-control"></br> 
          <button type="submit" value="Save" class="btn btn-success btn-md" >Save</button>                          
    </form>
    </div>
</div>
</div>
@endsection