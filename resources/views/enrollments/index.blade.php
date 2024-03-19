@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-ml-9">
            <div class="card">
                <div class="card-header">
                    <h2>Enrollments Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/enrollments/create')}}" class="btn btn-success btn-sm" title="Add new student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Enrollment
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Enroll No</th>
                                    <th>Batch</th>
                                    <th>Student</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enrollments as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->enroll_no}}</td>
                                    <td>{{$item->batch->name}}</td>
                                    <td>{{$item->student->name}}</td>
                                    <td>{{$item->join_date}}</td>
                                    <td>{{$item->fee}}</td>

                                    <td>
                                        <a href="{{url("/enrollments/".$item->id)}}" class="btn btn-info btn-sm" title="view students">View</a>
                                        <a href="{{url("/enrollments/".$item->id. "/edit")}}" class="btn btn-primary btn-sm" title="edit students">Edit</a>
                                        <form method="POST" action="{{url("/enrollments"."/".$item->id)}}" accept-charset="" style="display:inline">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="delete student">Delete</button>
                                        </form>
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