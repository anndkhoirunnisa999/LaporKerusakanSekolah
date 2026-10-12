# LaporKerusakanSekolah

LAPOR SEKOLAH adalah aplikasi untuk melaporkan kerusakan fasilitas sekolah, seperti meja, kursi, komputer, atau fasilitas lainnya. Aplikasi dibuat menggunakan MIT App Inventor dan terhubung ke database MySQL melalui PHP.

Alur kerja aplikasi dari awal

1. Login
Siswa memasukkan username dan password.

2. Dashboard
Siswa memilih menu buat laporan atau riwayat laporan.

3. Input Laporan
Siswa mengisi nama fasilitas, kategori kerusakan, deskripsi, dan mengambil foto menggunakan kamera.

4. PHP dan Database MySQL
PHP menerima data laporan dan menyimpannya ke database dengan status awal Menunggu.

5. Riwayat Laporan
Siswa melihat laporan yang pernah dikirim beserta status dan tanggalnya.
2. Cara kerja status laporan

Status laporan dapat diperbarui oleh admin melalui halaman Web Admin PHP.

Menunggu
Laporan baru diterima dan menunggu penanganan.

Diproses
Kerusakan sedang ditangani.

Selesai
Perbaikan atau penanganan laporan telah selesai.

Ketika admin mengubah status di Web Admin, data status tersimpan di MySQL. Aplikasi siswa akan menampilkan status terbaru ketika data riwayat dimuat kembali.

3. Cara kerja Web Admin

Web Admin merupakan halaman terpisah dari aplikasi Android yang dibuat menggunakan PHP.

Admin dapat:

- Melihat seluruh laporan yang masuk.
- Melihat rekap jumlah laporan.
- Mengubah status laporan menjadi Menunggu, Diproses, atau Selesai.
- Mencetak laporan.
- Mengekspor data laporan ke Excel.

Rekap jumlah laporan dihitung berdasarkan data di database MySQL.

4. Teknologi yang digunakan

MIT App Inventor : Membuat tampilan dan navigasi aplikasi Android   
Kamera           : Mengambil foto kerusakan fasilitas               
PHP              : Menghubungkan aplikasi dengan database           
MySQL            : Menyimpan data pengguna dan laporan              
XAMPP            : Menjalankan server Apache dan MySQL secara lokal 
HTML dan CSS     : Membuat tampilan Web Admin                               

Kesimpulan: alur utama aplikasi adalah siswa login → membuat laporan beserta foto → data tersimpan di MySQL → admin memeriksa dan memperbarui status melalui Web Admin → siswa melihat perkembangan laporan melalui menu Riwayat.
