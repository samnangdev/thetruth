@extends('layouts.admin_master')
@section('title')
    User list
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Users List</h4>
            <a href="{{ route('admin.user.create') }}">
                <button type="button" class="btn btn-primary">
                    <i class="bx bx-plus-circle"></i> Add New
                </button>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>UserType</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->userid }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td> ******** </td>
                                    <td>
                                        {{ $user->usertype->usertypename }}
                                        {{-- {{$user->usertype->usertypename}} --}}

                                    </td>
                                    <td>
                                        @if ($user->status == 1)
                                            <span class="badge bg-label-primary me-1">Active</span>
                                        @else
                                            <span class="badge bg-label-danger me-1">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.user.edit', ['id' => $user->userid]) }}">
                                            <i class="bx bxs-edit"></i>
                                        </a>
                                        &nbsp;
                                        <a href="javascript:void(0);" class="btnDelete" data-id="{{ $user->userid }}"
                                            style="color:red;" class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"href="" name="btnDelete">
                                            <i class="bx bxs-trash"></i>
                                            {{-- {{$user->userid}} --}}
                                        </a>
                                    </td>
                                <tr>
                                    <!-- Confirm Del Modal -->
                                    {{-- <div class="mt-3">
                                        <div class="modal fade" id="deleteModal" tabindex="-1" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Confirm Deletion
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <hr />
                                                    <div class="modal-body">Are you sure you want to delete this record?
                                                        This action can't be undone.</div>
                                                    <hr />
                                                    <div class="modal-footer">
                                                        <form action="{{route('admin.user.delete', ['id'=>$user->userid])}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">Confirm</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <!-- Confirm Del Modal -->
     <div class="modal fade" id="deleteModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr />
                <div class="modal-body">Are you sure you want to delete this record? This action can't be undone.</div>
                <hr />
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger">Confirm</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        document.querySelectorAll('.btnDelete').forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
                const form = document.getElementById('deleteForm');
                form.action = `/admin/user/delete/${userId}`;
            });
        });
    </script>
    @endpush
@stop
