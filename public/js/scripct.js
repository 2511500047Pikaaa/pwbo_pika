
$(function () {

    // Tombol Tambah
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').text('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').text('Tambah Data');

        $('#formModal form').attr(
            'action',
            'http://localhost/pwbo_pika/public/mahasiswa/tambah'
        );

        $('#formModal form')[0].reset();
        $('#id').val('');
    });

    // Tombol Ubah
    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').text('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').text('Simpan Perubahan');

        $('#formModal form').attr(
            'action',
            'http://localhost/pwbo_pika/public/mahasiswa/ubah'
        );

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/pwbo_pika/public/mahasiswa/getubah',
            method: 'POST',
            data: { id: id },
            dataType: 'json',

            success: function (data) {
                if (!data) {
                    alert('Data mahasiswa tidak ditemukan.');
                    return;
                }

                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            },

            error: function (xhr) {
                console.error(xhr.responseText);
                alert('Gagal mengambil data mahasiswa.');
            }
        });
    });

});
