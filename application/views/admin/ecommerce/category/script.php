<script>
    function tambahKategori() {
        $('#inputKategoriModal').modal('show');
    }

    //tombol hapus
    $('.tombol-hapus').on('click', function(e) {

        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apa anda yakin?',
            text: "Data mahasiswa akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href
                window.location = base_url + "admin/category";
            }
        })
    })

    function hapusKategori(e) {
        Swal.fire({
            title: "Are you sure ?",
            text: "Deleted data can not be restored!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + "admin/category/hapusKategori/" + e,
                    type: "post",
                    success: function(data) {
                        window.location = base_url + "admin/category";
                    }
                })
            }
        })
    }
</script>