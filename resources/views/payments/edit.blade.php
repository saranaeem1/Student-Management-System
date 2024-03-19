@extends('layout')
@section('content')

<div class="card" style="width: 350px;">
    <div class="card-header"> Edit Page </div>
    <div class="card-body">
        <form action="{{ url("payments/".$payments->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $payments->id }}" />
            <label>Enrollment No</label><br/>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($enrollments as $id => $enroll_no)
                    <option value="{{$id}}">{{$enroll_no}}</option>
                    @endforeach
                </select>
                <br/>
            <label>Paid Date</label>
            <input type="text" name="paid_date" id="paid_date" value="{{ $payments->paid_date }}" class="form-control"><br/>
            <label>Amount</label>
            <input type="text" name="amount" id="amount" value="{{ $payments->amount }}" class="form-control"><br/> 
            <button type="submit" class="btn btn-success btn-md">Update</button>
        </form>
    </div>
</div>

@stop