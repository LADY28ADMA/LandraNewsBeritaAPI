
    document.addEventListener("DOMContentLoaded", function() {
        // Menentukan tanggal target (1 Mei)
        var targetDate = new Date('2024-05-01');
        // Mendapatkan tanggal hari ini
        var today = new Date();
        // Mendapatkan elemen tautan
        var link = document.getElementById('showcaseAnchor');

        // Memeriksa apakah sudah tanggal 1 Mei atau setelahnya
        if (today < targetDate) {
            // Jika belum, mengatur kursor menjadi 'not-allowed'
            link.style.cursor = 'not-allowed';
            // Menambahkan event listener untuk menghentikan tindakan default ketika tautan diklik
            link.addEventListener('click', function(event) {
                event.preventDefault();
            });
        }
    });

