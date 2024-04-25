// ambil elemen2 yang dibutuhin

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// untuk menjalankan ajax, butuh trigger
// trigger adalah aksi yang dilakukan untuk menjalankan ajax nya
// kalo di javascript, aksi itu disebut sebagai even
// jadi kita akan menjalankan ajax pada saat even tertentu dijalankan

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){
    // buat objek AJAX
    var xhr = new XMLHttpRequest();
    // cek kesiapan ajax
    // apakah sumber data nya siap atau ngga, nah itu dicek
    xhr.onreadystatechange = function() {
        // readyState itu kek kesiapan sebuah sumber menerima data itu range nya dari 1-4
        // 0 inisialisasi, 1 membuka koneksi, dst. intinya ini 4 tuh ngecek siap atau ga nya
        // status code itu emg code 200 tuh ya emg buat nunjukin kalo sumber nya tuh emang udah oke
        if (xhr.readyState == 4 && xhr.status == 200) {
            // console.log(xhr.responseText); // ini tuh kek nampilin apapun isi dari sumber nya
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    // parameter pertama request method nya apa
    // parameter kedua sumber nya dari mana
    // parameter ketiga asyncronus = true, synxronus = false
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
});