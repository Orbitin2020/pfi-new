@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Management User</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addAccount" data-toggle="modal" data-target="#modalAccount"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableAccount">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Username</th>
                        <th class="text-center" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Account --}}
<div class="modal fade" id="modalAccount" tabindex="-1" role="dialog" aria-labelledby="modalAccount" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">New User</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form id="addUser">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama ">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" id="role" name="role">
                                <option selected="true" disabled="true">Choose Role</option>
                                @foreach($role as $rl)
                                <option value="{{ $rl->name }}">{{ $rl->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password1" name="password1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password2"
                                placeholder="Konfirmasi Password">
                        </div>
                        <div class="alert alert-danger" id="alertPassword" role="alert">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" disabled id="saveBtn">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Form Edit Account --}}
<div class="modal fade" id="menuAccountEdit" tabindex="-1" role="dialog" aria-labelledby="menuAccountEdit"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Edit Account</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form id="editUser">
                        @csrf
                        <input type="number" hidden class="form-control" id="editId" name="editId">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="editName" name="editName" placeholder="Nama ">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="editEmail" name="editEmail"
                                placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="editUsername" name="editUsername"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" id="editRole" name="editRole">
                                <option selected="true" disabled="true">Choose Role</option>
                                @foreach($role as $rl)
                                <option value="{{ $rl->name }}">{{ $rl->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary updateAccount" disabled id="updateAccount">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
@include('admin.user.javascript')
@endpush