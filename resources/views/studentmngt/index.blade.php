@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="{{route('studentmngt.create')}}" class="btn btn-info">Add New Student</a>
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-secondary">
                        This is the table for the students
                    </div>

                    <div class="card">
                        <div class="p-0 card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($students as $items)
                                    <tr>
                                        <td>{{ $items->id }}</td>
                                        <td>{{ $items->fname }}</td>
                                        <td>{{ $items->mname }}</td>
                                        <td>{{ $items->lname }}</td>
                                        <td>{{ $items->address }}</td>
                                        <td>{{ $items->dob }}</td>

                                        <td>
                                            <a href="{{route('studentmngt.edit', $items->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('studentmngt.delete', $items->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
