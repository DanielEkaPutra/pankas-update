const flashData = $('.flash-data').data('flashdata');

if(flashData)
{
    Swal.fire({
        title: 'Data Anggota Jemaat',
        text: 'Berhasil ' + flashData,
        icon: 'success'
    });
}

const duplikatData = $('.gagal-data').data('flashdata');

if(duplikatData)
{
  Swal.fire({
    title: 'Data Anggota Jemaat',
    text: 'Gagal ' + duplikatData,
    icon: 'Error'
  });
}

$('.tombol-hapus').on('click', function(e) {

    const href = $(this).attr('href');

    e.preventDefault()

    Swal.fire({
        title: 'Apakah Anda Yakin',
        text: "Ingin Menghapus Data Ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    },
    function(isConfirm){
      if(isConfirm)
      {
        document.location.href = href;
      }
    });

});