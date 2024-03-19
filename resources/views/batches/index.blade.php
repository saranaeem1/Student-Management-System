@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-ml-9">
            <div class="card">
                <div class="card-header">
                    <h2>Batches</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/batches/create')}}" class="btn btn-success btn-sm" title="Add new student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Batch
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Start Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($batches as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->course->name}}</td>
                                    <td>{{$item->start_date}}</td>

                                    <td>
                                        <a href="{{url("/batches/".$item->id)}}" class="btn btn-info btn-sm" title="view students">View</a>
                                        <a href="{{url("/batches/".$item->id. "/edit")}}" class="btn btn-primary btn-sm" title="edit students">Edit</a>
                                        <form method="POST" action="{{url("/batches"."/".$item->id)}}" accept-charset="" style="display:inline">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="delete Batch">Delete</button>
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