<script>
    $(document).ready(function() {
        let token = $('input[name="_token"]').val();
        var table = $('.tableAccount').DataTable({
            lengthMenu: [[10, 25, 50, 100, 500, 1000], [10, 25, 50, 100, 500, 1000]],
            pageLength: 10,
            ajax: "{{ route('user.getData') }}",
            dataType: 'jsonp',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name', name: 'name', sClass: 'text-center'},
                {data: 'email', name: 'email',sClass:'text-center'},
                {data: 'username', name: 'username', sClass:'text-center'},
                {data: 'created_at', name: 'created_at', sClass:'text-center'},
                {data: 'Actions', name: 'Actions', orderable:false, serachable:false, sClass:'text-center'},
            ],
        });

        $('body').on('click', '#editAccount', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            FormEditAccount(id);
        });

        $('#saveBtn').on('click', function(e) {
            e.preventDefault();
            
            let name = $('#name').val();
            let email = $('#email').val();
            let username = $('#username').val();
            let password = $('#password1').val();
            let role = $('#role').val();

            $.ajax({
                url: "{{ route('user.store') }}",
                type: 'POST', 
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: {
                    name: name,
                    email: email,
                    username: username,
                    password: password,
                    role: role,
                },
                success: function(data) {
                    console.log(data);
                    if(data.status == 200) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );

                        $('#modalAccount').modal('hide');
                        $('#addUser').trigger('reset');
                        table.ajax.reload();
                    } else {
                        Swal.fire(
                            'Failed!',
                            data.message,
                            'error'
                        );
                        $('#modalAccount').modal('hide');
                        $('#addUser').trigger('reset');
                        table.ajax.reload();
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            })
        });

        function FormEditAccount(id) {
            $.ajax({
                url: `{{ url('admin/provenadmin/edit/${id}') }}`,
                type: 'GET', 
                dataType: 'JSON', 
                success: function(data) {
                    console.log(data);
                    $('#menuAccountEdit').modal('show');

                    $('#editId').val(data.data.id);
                    $('#editName').val(data.data.name);
                    $('#editUsername').val(data.data.username);
                    $('#editEmail').val(data.data.email);
                },
                error: function(err) {
                    alert('Nothing Data..');
                }
            })
        }

        $('body').on('change', '#editRole', function() {
            $('.updateAccount').removeAttr('disabled');
        });

        $('#updateAccount').on('click', function(e) {
            e.preventDefault();
            let id = $('input[name="editId"]').val();
            // let url = `{{ url('admin/provenadmin/update/${id}') }}`;

            let name = $('input[name="editName"]').val();
            let email = $('input[name="editEmail"]').val();
            let username = $('input[name="editUsername"]').val();
            let role = $('#editRole').val();

            $.ajax({
                url: `{{ url('admin/provenadmin/update/${id}') }}`,
                type: 'POST', 
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: {
                    name: name,
                    email: email,
                    username: username,
                    role: role,
                },
                success: function(data) {
                    console.log(data);
                    if(data.status == 200) {
                        Swal.fire(
                            'Good job!',
                            data.message,
                            'success'
                        );
                        
                        $('#menuAccountEdit').modal('hide');
                        $('#editUser').trigger('reset');
                        table.ajax.reload();
                    } else {
                        Swal.fire(
                            'Failed!',
                            data.message,
                            'error'
                        );
                        
                        $('#menuAccountEdit').modal('hide');
                        $('#editUser').trigger('reset');
                        table.ajax.reload();
                    }
                },
                error: function(err) {
                    console.log(data);
                }
            })
        });

        $('body').on('click', '#deleteAccount', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            
            Swal.fire({
            title: 'Anda ingin menghapusnya?',
            text: "Pilih 'DELETE' jika ingin menghapusnya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'DELETE'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('admin/provenadmin/delete/${id}') }}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        data: {
                            id: id
                        },
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
                                    data.message,
                                    'error'
                                );
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

<script>
    $(document).ready(function() {
        $('#alertPassword').hide();
        $('#password2').keyup(function() {
            var password1 = $('#password1').val();
            var password2 = $('#password2').val();
            var smallText = document.getElementById('alertPassword');

            if(password2 == null || password2 == "") {
                // $('#saveBtn').attr('disabled', true);
                $(smallText).hide();
            } else if(password1 != password2) {
                $(smallText).show();
                $(smallText)
                    .addClass('alert-danger')
                    .removeClass('alert-primary')
                // $('#saveBtn').attr('disabled', true);
                smallText.innerText = 'Password Tidak Cocok';
            } else {
                $(smallText)
                    .removeClass('alert-danger')
                    .addClass('alert-primary')
                $('#saveBtn').removeAttr('disabled');
                smallText.innerText = 'Password Cocok';
            }
        });
    })
</script>