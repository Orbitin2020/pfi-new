<script>
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

        var table = $('.tableGalery').DataTable({
            
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('admin.galeri.data') }}",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {data: 'nama', name: 'nama'},
                {data: 'deskripsi', name: 'deskripsi'},
                {data: 'category_id', name: 'category_id'},
                {data: 'gambar', name: 'gambar'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#addGaleri').click(function () {
            idEdit = 0;
            $('#frm_galeri').trigger("reset");
            $('#modalGaleri').modal('show');
            $('.img-preview').attr('src', '');
            $("div.s_kategori select").val('').change();

            $.ajax({
                url: "{{ route('admin.galeri.kategori.data') }}",
                type:'GET',
                success:function(res){
                    console.log(res.data)
                    $("#kategori").empty();
                    $.each(res.data,function(key,value)
                    {
                        $("#kategori").append('<option></option>');
                        $("#kategori").append('<option value=' + value.id + '>' + value.nama + '</option>');
                    })
                }
            })
            
        });

        $('#saveBtn').click(function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("frm_galeri"));
            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('admin.galeri.store') }}"
                type = "POST"
            }else{
                formData.append('_method', 'PUT');
                url = '{{ route("admin.galeri.update", ":id") }}';
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
                    $('#frm_galeri').trigger("reset");
                    $('#modalGaleri').modal('hide');
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
            var url = '{{ route("admin.galeri.edit",":id") }}'
            url = url.replace(':id',id)
            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    gambar = res.data.gambar;
                    base_url = 'http://localhost:8000/image/galeri/'+encodeURIComponent(res.data.gambar)+''

                    $('#frm_galeri').trigger("reset");
                    $('#modalGaleri').modal('show');
                    $('#nama').val(res.data.nama);
                    $('#deskripsi').val(res.data.deskripsi);
                    $('.img-preview').attr('src', base_url);
                    $("#kategori").empty()
                    
                    $.each(res.kategori,function(key, value)
                    {
                        $("#kategori").append('<option value=' + value.id + '>' + value.nama + '</option>');
                    });
                    $("div.s_kategori select").val(res.data.category_id).change();
                    console.log(res.data.category_id)
                }
            })
           
        })
        // END EDIT

        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.galeri.delete", ":id") }}';
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