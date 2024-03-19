@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-ml-9">
            <div class="card">
                <div class="card-header">
                    <h2>Payment Application</h2>
                </div>

                <div class="card-body">
                    <a href="{{url('/payments/create')}}" class="btn btn-success btn-sm" title="Add new course">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New 
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Enrollment No</th>
                                    <th>Paid Date</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{optional($item->enrollment)->enroll_no}}</td>
                                    <td>{{$item->paid_date}}</td>
                                    <td>{{$item->amount}}</td>

                                    <td>
                                        <a href="{{url("/payments/".$item->id)}}" class="btn btn-info btn-sm" title="view payments">View</a>
                                        <a href="{{url("/payments/".$item->id. "/edit")}}" class="btn btn-primary btn-sm" title="edit payments">Edit</a>
                                        <form method="POST" action="{{url("/payments"."/".$item->id)}}" accept-charset="" style="display:inline">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="delete payments">Delete</button>
                                        </form>
                                        <a href="{{ url('/report/report1/' .$item->id)}}" title="Edit Payment"><button class="btn btn-success btn-sm"><i class="fa fa-print" aria-hidden="true"></i>Print</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection