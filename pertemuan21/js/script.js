$(document).ready(function(){
    // lakukan ini semua ketika halaman nya sudah ready
    // script nya tidak akan mengeksekusi yang didalam function dlu, 
    // sebelum dokumennya di load semua kedalam memori

    // hilangkan tombol cari
    $('#tombol-cari').hide();
    // event ketika keyword ditulis
    // jquery tolong cariin keyword ketika di key up
    // ketika di key up lakukan fungsi berikut ini
    // jquery tolong cariin elemen container lalu load/ubah isinya 
    // dengan data yang kita ambil dari source

    $('#keyword').on('keyup', function(){
        // munculkan icon loading
        $('.loader').show(); //show memunculkan yang hilang
        // hide itu menghilangkan yang ada

        // ajax menggunakan load => mengambil data dari sumber menggunakan get
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        //$.get()
        // ambil data saat data nya udah diambil kita melakukan sesuatu
        $.get('ajax/mahasiswa.php?keyword='+$('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });


    });
// tapi fungsi load memiliki keterbatasan, karna dia hanya bisa menggunakan GET aja, 
// gabisa menggunakan post

});