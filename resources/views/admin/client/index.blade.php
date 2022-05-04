@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Management Client</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addAccount" class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i>
                Add</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableClient">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">No</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Link</th>
                        <th class="">Gambar</th>
                        <th class="text-center" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Client --}}
<div class="modal fade" id="modalClientAdd" tabindex="-1" role="dialog" aria-labelledby="modalClientAdd"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Client</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_client" id="frm_client" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Client ">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Link">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <div class="s_kategori">
                                <select class="js-select2 form-control" id="category_id" name="category_id"
                                    style="width: 100%;" data-placeholder="Choose..">
                                    <option></option>
                                    @foreach ($client_category as $cg)
                                    <option value="{{ $cg->id }}">{{ $cg->nm_category }}</option>
                                    @endforeach
                                    <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="gambar">gambar</label>
                                    <input type="file" class="form-control-file" name="gambar" id="gambar">
                                </div>

                                <div class="form-group ">
                                    <img class="img-preview img-fluid mt-3 col-sm-5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"
                                        placeholder="Deskripsi"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-primary" id="saveClient">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Form Modal Edit --}}
<div class="modal fade" id="modalClientEdit" tabindex="-1" role="dialog" aria-labelledby="modalClientEdit"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Form Edit Client</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_clientEdit" id="frm_clientEdit" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="editNama" name="editNama">
                            <input type="number" class="form-control" hidden id="editId" name="editId">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" id="editLink" name="editLink">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <div class="s_kategori">
                                <select class="js-select2 form-control" id="editCategory_id" name="editCategory_id"
                                    style="width: 100%;" data-placeholder="Choose..">
                                    <option></option>
                                    @foreach ($client_category as $cg)
                                    <option value="{{ $cg->id }}">{{ $cg->nm_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="" for="gambar">gambar</label>
                                    <input type="file" class="form-control-file" name="editGambar" id="editGambar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <img class="img-preview-edit img-fluid mt-3 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="editDeskripsi" id="editDeskripsi" class="form-control" cols="30"
                                rows="10"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" disabled class="updateClient btn btn-alt-primary" id="updateClient">
                    <i class="fa fa-check"></i> Update Now
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.client.javascript')
@endpush