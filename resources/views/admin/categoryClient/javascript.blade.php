<script>
    $(document).ready(function() {
        let token = $('input[name="_token"]').val();
        var table = $('.tableCategoryClient').DataTable({
            lengthMenu: [[10, 25, 50, 100, 500, 1000], [10, 25, 50, 100, 500, 1000]],
            pageLength: 10,
            ajax: "{{ url('admin/clientCategory/getData') }}",
            dataType: 'jsonp',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'nm_category', name: 'nm_category', sClass: 'text-center'},
                {data: 'created_at', name: 'created_at', sClass:'text-center'}, 
                {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
            ],
        });

        $('#addCategoryClient').on('click', function() {
            $('#modalAddCategoryClient').modal('show');
            $('#frm_categoryClient').trigger('reset');
        });

        $('#saveCategoryClient').on('click', function(e) {
            e.preventDefault();
            
            let nm_category = $('#nm_category').val();

            $.ajax({
                url: "{{ url('admin/clientCategory/add') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: {
                    nm_category: nm_category
                },
                success: function(data) {
                    if(data.status == 200) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                        $('#modalAddCategoryClient').modal('hide');
                        table.ajax.reload();
                    } else {
                        Swal.fire(
                            'Failed!',
                            data.message,
                            'error'
                        );
                        $('#modalAddCategoryClient').modal('hide');
                        table.ajax.reload();
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            })
        });

        $('#updateCategoryClient').on('click', function(e) {
            e.preventDefault();
            let id = $('input[name="editId"]').val();
            let nm_category = $('input[name="editNm_category"]').val();
            
            $.ajax({
                url: `{{ url('admin/clientCategory/update/${id}') }}`,
                type: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: {
                    id: id,
                    nm_category: nm_category
                },
                success: function(data) {
                    if(data.status == 200) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                        $('#modalEditCategoryClient').modal('hide');
                        table.ajax.reload();
                    } else {
                        Swal.fire(
                            'Failed!',
                            data.message,
                            'error'
                        );
                        $('#modalEditCategoryClient').modal('hide');
                        table.ajax.reload();
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            })
        });

        $('body').on('click', '#editCategoryClient', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('admin/clientCategory/edit/${id}') }}`,
                type: 'GET',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#modalEditCategoryClient').modal('show');

                    $('#editId').val(data.data.id);
                    $('#editNm_category').val(data.data.nm_category);
                },
                error: function(err) {
                    alert('Nothing Data...');
                }
            })
        });

        $('body').on('click', '#deleteCategoryClient', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('admin/clientCategory/delete/${id}') }}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        data: {
                            id: id,
                        },
                        success: function(data) {
                            if(data.status == 200) {
                                Swal.fire(
                                    'Good job!',
                                    data.message,
                                    'success'
                                );
                                table.ajax.reload();
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    data.message,
                                    'error'
                                );
                                table.ajax.reload();
                            }
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    })
                }
            })
        });

    })
</script>