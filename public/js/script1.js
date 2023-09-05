$(function() {
    $('.tombolTambahData').on('click', function() {
    $('#staticBackdropLabel').html('Tambah Data Guru');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#kode_guru').val('');
    $('#nama_guru').val('');
    $('#matpel').val('');
    $('#prod_noprod').val('');
    $('#id').val('');
    });

    $('.tampilModalUbah').on('click', function() {
    $('#staticBackdropLabel').html('Ubah Data Guru');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/blog/ubah');
    const id = $(this).data('id');

    $.ajax({
    url: 'http://localhost/phpmvc/public/blog/getubah',
    data: {id : id},
    method: 'post',
    dataType: 'json',
    success: function(data) {
        $('#kode_guru').val(data.kode_guru);
        $('#nama_guru').val(data.nama_guru);
        $('#matpel').val(data.matpel);
        $('#prod_noprod').val(data.prod_noprod);
        $('#id').val(data.id);
        }
        });
        });
        });