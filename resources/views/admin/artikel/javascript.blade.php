<script>
    // inisiasi summernote
     $('#detail').summernote({
      placeholder: 'Deskripsi Schedule',
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]
    })
    // end
    $(document).ready(function(){

        var idEdit = 0;

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#gambar").change(function() {
            readURL(this);
        });

        var table = $('.tableNews').DataTable({
            
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('admin.artikel.data') }}",
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {data: 'judul', name: 'judul'},
                {data: 'gambar', name: 'gambar'},
                {data: 'kategori', name: 'kategori'},
                {data: 'detail', name: 'detail'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#addNews').click(function () {
            idEdit = 0;
            $('#frm_news').trigger("reset");
            $('#detail').summernote('reset');
            $('#modalNews').modal('show');
            $('.img-preview').attr('src', '');
            $("div.s_kategori select").val('').change();
        });

        $('#saveBtn').click(function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("frm_news"));
            formData.append("detail",$('#detail').summernote('code'))

            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('admin.artikel.store') }}"
                type = "POST"
            }else{
                formData.append('_method', 'PUT');
                url = '{{ route("admin.artikel.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "POST"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                data : formData,
                url: url,
                type: type,
                contentType:false,
                processData:false,
                success: function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_news').trigger("reset");
                    $('#modalNews').modal('hide');
                    table.draw()
                    // perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })

        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.artikel.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    
                    idEdit = res.data.id;
                    gambar = res.data.gambar;
                    base_url = 'http://localhost:8000/image/artikel/'+encodeURIComponent(res.data.gambar)+''

                    $('#frm_news').trigger("reset");
                    $('#modalNews').modal('show');
                    $('#judul').val(res.data.judul);
                    $('#detail').summernote('code', res.data.detail);
                    $('.img-preview').attr('src', base_url);
                    $("div.s_kategori select").val(res.data.kategori).change();
                    console.log(res.data.kategori)
                    
                
                }
            })
        })
        // END EDIT

        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.artikel.delete", ":id") }}';
            url = url.replace(':id', id );
            Swal.fire({
                title : 'Anda Yakin ?',
                text  : 'Data Yang Sudah Dihapus Tidak Akan Bisa Dikembalikan',
                icon  : 'warning',
                showConfirmButton : true,
                showCancelButton :true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak, Batalkan!',
                allowOutsideClick: false,
            })
            .then((result)=>{
                if(result.value) {
                    $.ajax({
                        headers:{
                            'X-CSRF-TOKEN' : '{{csrf_token()}}'
                        },
                        type : 'DELETE',
                        url:url,
                        success:function(response){
                        
                            Swal.fire({
                                title: 'Berhasil!',
                                icon : 'success',
                                text : 'Data Berhasil Di Hapus',
                                showConfirmButton :true
                            })
                        
                            table.draw()
                        }
                    })
                }else{
                    Swal.close()
                }
            })
        })
        // End Delete

    })

    
</script>