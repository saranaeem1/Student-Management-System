@extends('layout')
@section('content')
<div class="card" style="width: 350px;">
    <div class="card-header"> Edit Page </div>
    <div class="card-body">
        <form action="{{ url("student/".$students->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $students->id }}" />
            <label>Name</label><br/>
            <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"><br/>
            <label>Address</label>
            <input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control"><br/>
            <label>Mobile</label>
            <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control"><br/> 
            <button type="submit" class="btn btn-success btn-md">Edit</button>
        </form>
    </div>
</div>

@stop
