const tombol = document.getElementById('btn-primary');
tombol.addEventListener('click', function() {
    const konfirmasi = confirm("Buka Halaman Sekarang?")

    if (konfirmasi) {
        window.location.href("jadwal.php")
    }
    else  {
        console.log ("Tidak")
    }
});