<script>
    // Initialisasi Summernote
    $('#deskripsi').summernote({
        placeholder: 'Deskripsi Client',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });
    $('#editDeskripsi').summernote({
        placeholder: 'Deskripsi Client',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });
    // End Summernote
    $(document).ready(function() {
        let token = $('input[name="_token"]').val();
        let createGambar = '';
        let updateGambar = '';
        var table = $('.tableClient').DataTable({
            lengthMenu: [[10, 25, 50, 100, 500, 1000], [10, 25, 50, 100, 500, 1000]],
            pageLength: 10,
            ajax: "{{ url('admin/client/getData') }}",
            dataType: 'jsonp',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'nm_category', name: 'nm_category', sClass: 'text-center'},
                {data: 'nama', name: 'nama',sClass:'text-center'},
                {data: 'deskripsi', name: 'deskripsi', sClass:'text-center'},
                {data: 'link', name: 'link', sClass:'text-center'},
                {data: 'gambar', name: 'gambar', sClass:'text-center'},
                {data: 'created_at', name: 'created_at', sClass:'text-center'},
                {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
            ],
        });

        function readURL(input) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function editReadURL(input) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.img-preview-edit').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#gambar').change(function() {
            readURL(this);
        });

        $('#editGambar').change(function() {
            editReadURL(this);
        });

        $('#editCategory_id').change(function() {
            $('.updateClient').removeAttr('disabled');
        });

        $('#addAccount').on('click', function() {
            $('#frm_client').trigger('reset');
            $('#deskripsi').summernote('reset');
            $('#modalClientAdd').modal('show');
            $('.img-preview').attr('src', '');
            $("div.s_kategori select").val('').change();
        });

        // Add Client
        $('#saveClient').on('click', function(e) {
            e.preventDefault();
            var fd = new FormData(document.getElementById("frm_client"));
            fd.append('deskripsi', $('#deskripsi').summernote('code'));

            $.ajax({
                url: "{{ url('admin/client/add') }}",
                type: 'POST',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: fd,
                success: function(data) {
                    console.log(data);

                    if(data.status == 200) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                        table.ajax.reload();
                        $('#modalClientAdd').modal('hide');
                        $('#frm_client').trigger('reset');
                    } else {
                        var values = '';
                        jQuery.each(data.message, function(key, value) {
                            values += value
                        });
                        Swal.fire(
                            'Failed!',
                            values,
                            'error'
                        );
                        $('#modalClientAdd').modal('hide');
                        $('#frm_client').trigger('reset');
                    }
                },
                error: function(err) {
                    console.log(err);
                    Swal.fire(
                        'Gagal!',
                        err.message,
                        'error'
                    );
                    $('#modalClientAdd').modal('hide');
                    $('#frm_client').trigger('reset');
                }
            })
        });

        $('body').on('click', '#editClient', function() {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('admin/client/edit/${id}') }}`,
                type: 'GET',
                processData: false,
                contentType: false,
                data: id,
                success: function(data) {
                    $('#modalClientEdit').modal('show');

                    $('#editNama').val(data.nama);
                    $('#editLink').val(data.link);
                    $('#editId').val(data.id);
                },
                error: function(err) {
                    alert('Nothing data...');
                }
            })

        });

        $('body').on('click', '#updateClient', function(e) {
            e.preventDefault();
            let id = $('input[name="editId"]').val();

            var fd = new FormData(document.getElementById("frm_clientEdit"));
            fd.append('deskripsi', $('#editDeskripsi').summernote('code'));
            
            $.ajax({
                url: `{{ url('admin/client/update/${id}') }}`,
                type: 'POST',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: fd,
                success: function(data) {
                    console.log(data);
                    if(data.status == 200) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                        table.ajax.reload();
                        $('#modalClientEdit').modal('hide');
                        $('#frm_clientEdit').trigger('reset');
                    } else {
                        var values = '';
                        jQuery.each(data.message, function(key, value) {
                            values += value
                        });
                        Swal.fire(
                            'Failed!',
                            values,
                            'error'
                        );
                        $('#modalClientEdit').modal('hide');
                    }
                },
                error: function(err) {
                    console.log(err);
                    Swal.fire(
                        'Gagal!',
                        err.message,
                        'error'
                    );
                    $('#modalClientEdit').modal('hide');
                    $('#frm_clientEdit').trigger('reset');
                }
            })
        });

        $('body').on('click', '#deleteClient', function(e) {
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
                        url: `{{ url('admin/client/delete/${id}') }}`,
                        type: 'DELETE',
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        data: id,
                        success: function(data) {
                            console.log(data);
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
                                    'Kesalahan menghapus data',
                                    'error'
                                );
                            }
                        },
                        error: function(err) {
                            Swal.fire(
                                'Gagal!',
                                'Kesalahan menghapus data',
                                'error'
                            );
                        }
                    })
                }
            })
        });
    })
</script>