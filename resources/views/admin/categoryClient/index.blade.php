@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Management Category Client</h3>
        </div>
        <div class="block-content block-content-full">
            <button type="button" id="addCategoryClient" class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i>
                Add</button>
            <table
                class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableCategoryClient">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center">Nama</th>
                        <th class="" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add CategoryClient --}}
<div class="modal fade" id="modalAddCategoryClient" tabindex="-1" role="dialog" aria-labelledby="modalAddCategoryClient"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Category</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form name="frm_categoryClient" id="frm_categoryClient" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nm_category" name="nm_category"
                                placeholder="Nama Category ">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-primary" id="saveCategoryClient">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Form Edit Category Client --}}
<div class="modal fade" id="modalEditCategoryClient" tabindex="-1" role="dialog"
    aria-labelledby="modalEditCategoryClient" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Edit Category</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form name="frmedit_categoryClient" id="frmedit_categoryClient">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="editNm_category" name="editNm_category">
                            <input type="text" hidden readonly class="form-control" id="editId" name="editId">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" id="updateCategoryClient">
                    <i class="fa fa-check"></i> Update
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.categoryClient.javascript')
@endpush