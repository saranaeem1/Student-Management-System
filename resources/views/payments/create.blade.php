@extends('layout')
@section('content')
<div class="card" style="width: 350px; " >
    <div class="card-header">
    <div class="card-body">

        <form action="{{url("payments")}}" method="POST">
          {{csrf_field()}}
          <label>Enrollment No</label><br/>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($enrollments as $id => $enroll_no)
                    <option value="{{$id}}">{{$enroll_no}}</option>
                    @endforeach
                </select>
          </br>
          <label>Paid Date</label>
          <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
          <label>Amount</label>
          <input type="text" name="amount" id="amount" class="form-control"></br> 
          <button type="submit" value="Save" class="btn btn-success btn-md" >Save</button>                          
    </form>
    </div>
</div>
</div>
@endsection