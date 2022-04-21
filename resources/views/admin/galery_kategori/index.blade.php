@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Kategori Gallery</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addKategori" data-toggle="modal" data-target="#modalKategori"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i>Add Kategori</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableKategori">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center">nama</th>
                        <th class="" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Artikel --}}
<div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="modalKategori" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Kategori</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_kategori" id="frm_kategori" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
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
@include('admin.galery_kategori.javascript')
@endpush