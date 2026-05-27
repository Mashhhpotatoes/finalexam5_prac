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

            <div class="row">
                @if(session('status'))
                    <div class="alert alert-successs">{{session('status')}}</div>
                @endif

                <div class="m-auto col-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Student</h3>
                        </div>

                        <form action="{{ route('studentmngt.store') }}" method="POST">
                            @csrf
                            <div class="row card-body col-12">
                                <div class="form-group col-12">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control g-2" name="fname" id="fname" placeholder="Enter your Firstname" require>
                                </div>
                                @error('fname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="mname">Middle Name</label>
                                    <input type="text" class="form-control g-2" name="mname" id="mname" placeholder="Enter your Middlename" require>
                                </div>
                                @error('mname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control g-2" name="lname" id="lname" placeholder="Enter your Lastname" require>
                                </div>
                                @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control g-2" name="address" id="addres" placeholder="Enter your Address" require>
                                </div>
                                @error('address') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" class="form-control g-2" name="dob" id="dob" placeholder="" require>
                                </div>
                                @error('dob') <span class="text-danger">{{$message}}</span> @enderror

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success col-12 ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
