<script>
    function tambahKategori() {
        $('#inputKategoriModal').modal('show');
    }

    function editKategori() {
        $('#editKategoriModal').modal('show');

        const id = $(this).data('id')
        console.log(id);
    }
</script>