@extends('layouts.admin_master')
@section('title')
    Add Main category
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Add New Main Category</h4>
            <a href="hi.html">
                <button type="button" class="btn btn-primary">
                    <i class='bx bx-arrow-back'></i> Back
                </button>
            </a>
        </div>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
