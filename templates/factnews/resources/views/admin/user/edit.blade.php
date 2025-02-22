@extends('layouts.admin_master')
@section('title')
    Edit User
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Edit User</h4>
            <a href="{{ route('admin.user.index') }}">
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
                        <form action="{{ route('admin.user.update', $users->userid) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" required name="TxtUsername"
                                            class="form-control" value="{{ old('TxtUsername', $users->username) }}" placeholder="Example" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" required name="TxtEmail" class="form-control"
                                            value="{{ old('TxtEmail', $users->email) }}" placeholder="Example@example.com" />
                                        @if ($errors->has('TxtEmail'))
                                            <div class="form-text text-danger">{{ $errors->first('TxtEmail') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" required name="TxtPassword" class="form-control"
                                            value="{{ old('TxtPassword', $users->password) }}" placeholder="********" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" required name="TxtConfirmPassword" class="form-control"
                                            value="{{ old('TxtConfirmPassword', $users->password) }}" placeholder="********" />
                                        @if ($errors->has('TxtConfirmPassword'))
                                            <div class="form-text text-danger">{{ $errors->first('TxtConfirmPassword') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">UserType</label>
                                        <select name="TxtUserTypeID" class="form-select">
                                            <option hidden disabled selected>------------------------------------------------------------------------------------------------------------------------</option>
                                            @foreach ($usertypes as $item)
                                                <option value="{{ $item->usertypeid }}"
                                                    @if ($item->usertypeid == $users->usertypeid) selected @endif>
                                                    {{ $item->usertypename }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
