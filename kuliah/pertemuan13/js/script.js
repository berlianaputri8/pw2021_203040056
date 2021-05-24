    // Berliana Putri
    // 203040056
    // github.com/berlianaputri8/pw2021_203040056
    // Pertemuan 13 (15 Mei 2021)
    // Materi pertemuan kali ini mempelajari mengenai AJAX Live Searching & Upload Gambar

// const tombolCari = document.querySelector('.tombol-cari');
// const keyword = document.querySelector('.keyword');
// const container = document.querySelector('.container');

// // // hilangkan tombol cari
// tombolCari.style.display = 'none';

// // // event ketika menuliskan keyword
// keyword.addEventListener('keyup', function() {
// //     // ajax

// //     // xmlhhttprequest
// //     // const xhr = new XMLHttpRequest();

// //     // xhr.onreadystatechange = function() {
// //     //     if(xhr.readyState == 4 && xhr.status == 200) {
// //     //         container.innerHTML = xhr.responseText;
// //     //     }
// //     // }

// //     // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
// //     // xhr.send();

// //     // fetch()
//     fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
//       .then((response) => response.text())
//       .then((response) => (container.innerHTML = response));
// }); 

// Preview Image untuk Tambah dan Ubah
function previewImage() {
    const gambar = document.querySelector('.gambar');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
