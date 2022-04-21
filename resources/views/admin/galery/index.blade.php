@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Gallery</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addGaleri" data-toggle="modal" data-target="#modalGaleri"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableGalery">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center">nama</th>
                        <th class="text-center">deskripsi</th>
                        <th class="">kategori</th>
                        <th class="">gambar</th>
                        <th class="" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Artikel --}}
<div class="modal fade" id="modalGaleri" tabindex="-1" role="dialog" aria-labelledby="modalGaleri" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Gallery</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_galeri" id="frm_galeri" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Gambar ">
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Gambar ">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <div class="s_kategori">
                                <select class="js-select2 form-control" id="kategori" name="kategori" style="width: 100%;" data-placeholder="Choose..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label class="" for="gambar">gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambar" >
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group ">
                                <img class="img-preview img-fluid mt-3 col-sm-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-primary" id="saveBtn">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
@include('admin.galery.javascript')
@endpush