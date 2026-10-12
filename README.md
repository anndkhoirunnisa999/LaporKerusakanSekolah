**LAPOR KERUSAKAN SEKOLAH**

**LAPOR SEKOLAH** adalah aplikasi untuk melaporkan kerusakan fasilitas sekolah, seperti meja, kursi, komputer, dan fasilitas lainnya. Aplikasi dibuat menggunakan MIT App Inventor dan terhubung ke database MySQL melalui PHP.

## Alur Kerja Aplikasi

### 1. Login Siswa
Siswa memasukkan username dan password untuk masuk ke aplikasi.

### 2. Dashboard
Siswa memilih menu **Buat Laporan** atau **Riwayat Laporan**.

### 3. Input Laporan
Siswa mengisi nama fasilitas, kategori kerusakan, dan deskripsi, kemudian mengambil foto menggunakan kamera.

### 4. Penyimpanan Data
PHP menerima data laporan dan menyimpannya ke database MySQL dengan status awal **Menunggu**.

### 5. Riwayat Laporan
Siswa dapat melihat laporan yang pernah dikirim beserta status dan tanggalnya.

## Status Laporan

- **Menunggu**  
  Laporan baru diterima dan menunggu penanganan.

- **Diproses**  
  Kerusakan sedang ditangani.

- **Selesai**  
  Perbaikan atau penanganan laporan telah selesai.

## Web Admin

Admin dapat membuka halaman Web Admin berbasis PHP untuk:

- Melihat seluruh laporan kerusakan.
- Melihat rekapitulasi jumlah laporan.
- Memperbarui status laporan.
- Mencetak laporan.
- Mengekspor data ke Excel.

Status yang diubah oleh admin disimpan ke database MySQL. Siswa dapat melihat status terbaru ketika riwayat laporan dimuat kembali.

## Teknologi yang Digunakan

- **MIT App Inventor** — membuat aplikasi Android.
- **Kamera** — mengambil foto kerusakan fasilitas.
- **PHP** — menghubungkan aplikasi dengan database.
- **MySQL** — menyimpan data laporan dan status.
- **HTML dan CSS** — membuat tampilan Web Admin.
- **XAMPP** — menjalankan server lokal selama pengembangan.
