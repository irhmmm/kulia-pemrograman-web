<h2>Analisa program Navbar foto dan Linkedin </h2>

https://www.linkedin.com/posts/muh-irham-praditya-300517381_activity-7373396089233784832-n03p?utm_source=share&utm_medium=member_desktop&rcm=ACoAAF46DfABVA_aB-6pcG2Vsu14IUpypifmmYg

<hr>

```css
 nav ul li {
      position: relative;
      display: inline-block;
    }
    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 10px 20px;
      display: block;
    }
```
Kode CSS tersebut berfungsi untuk membuat menu navigasi agar rapi dan mudah digunakan. Bagian nav ul li menggunakan position: relative sebagai acuan posisi untuk elemen di dalamnya dan display: inline-block supaya menu tersusun horizontal. Sementara itu, pada nav ul li a, digunakan text-decoration: none untuk menghilangkan garis bawah, color: #333 untuk memberi warna abu-abu tua, serta font-weight: bold agar teks tebal. Ditambah padding: 10px 20px agar area klik lebih luas dan display: block supaya seluruh area link bisa diklik, bukan hanya teksnya saja.

```css
nav ul li ul.dropdown {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background: #f4f7f6;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      min-width: 180px;
    }

    nav ul li ul.dropdown li {
      display: block;
    }

    nav ul li ul.dropdown li a {
      padding: 10px 15px;
      font-weight: normal;
    }

    nav ul li:hover ul.dropdown {
      display: block;
    }
```
Kode CSS ini dipakai untuk membuat dropdown menu pada navigasi. Pada nav ul li ul.dropdown, awalnya dropdown disembunyikan dengan display: none, lalu diposisikan tepat di bawah menu induk menggunakan position: absolute; top: 100%; left: 0. Tampilan dropdown diberi warna latar abu-abu muda, sudut membulat dengan border-radius, serta efek bayangan dengan box-shadow, dan lebarnya minimal 180px.

Setiap item di dalam dropdown (ul.dropdown li) ditampilkan ke bawah dengan display: block. Link di dalamnya (ul.dropdown li a) diberi padding lebih kecil dan teks normal (tidak bold). Kemudian, aturan nav ul li:hover ul.dropdown { display: block; } membuat dropdown muncul hanya ketika pengguna mengarahkan kursor (hover) ke menu induk.

```html
<a href="#">Menu⬇️</a>
<ul class="dropdown">
    <li><a href="gallery.html">Gallery</a></li>
```
“Menu ⬇️” adalah menu utama, dan “Gallery” ada di dalam dropdown yang muncul saat di-hover

```html
<title>Gallery Foto - Irham</title>
```
Memberi judul pada tab browser → “Gallery Foto - Irham”.

```css
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
}
```
display: grid; → Layout pakai grid.<br>
grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
→ Membuat kolom otomatis, minimal 220px, maksimal 1fr (bagi rata).<br>
gap: 20px; → Jarak antar foto 20px.

```css
.gallery img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}
.gallery img:hover {
  transform: scale(1.05);
}
```
Setiap gambar diberi lebar penuh sesuai ukuran kolom grid (width: 100%) dan tinggi seragam (height: 220px). Properti object-fit: cover memastikan gambar tetap proporsional dengan cara memotong bagian yang berlebih tanpa merusak tampilannya. Kemudian, sudut gambar dibuat melengkung menggunakan border-radius: 12px, serta diberi efek bayangan halus (box-shadow) agar terlihat lebih menonjol dari latar belakang. Selain itu, ditambahkan efek transisi halus (transition: transform 0.3s) yang membuat gambar sedikit membesar (transform: scale(1.05)) saat diarahkan kursor, sehingga gallery tampak lebih interaktif dan modern.

```html
<li><a href="biodata.html">Kembali</a></li> <li><a href="gallery.html">Gallery</a></li>
```
ini adalah tombol navigasi.<br>
< a href="biodata.html">Kembali< /a> → link menuju halaman biodata.html dengan teks “Kembali”.

< a href="gallery.html">Gallery< /a> → link menuju halaman gallery.html dengan teks “Gallery”.

```html
  <div class="gallery-container">
    <h1>📸 Kumpulan Foto Saya</h1>
    <h4><center> Saya membuat Tempat Foto ini sebagai tempat untuk Menuangkan rasa suka saya terhadap alam </center></h4>
    <div class="gallery">
      <img src="img/Sunset (1).jpg" alt="Foto 1">
      <img src="img/Sunset (2).jpg" alt="Foto 2">
      <img src="img/Sunset (3).jpg" alt="Foto 3">
      <img src="img/Sunset (4).jpg" alt="Foto 4">
    </div>
  </div>
```
digunakan untuk membuat sebuah section gallery foto di halaman web. Bagian utama dibungkus dengan < div class="gallery-container">, yang berfungsi sebagai wadah dari seluruh isi gallery. Di dalamnya terdapat judul utama < h1>📸 Kumpulan Foto Saya</ h1> yang menandakan bahwa ini adalah kumpulan foto pribadi, kemudian ada teks penjelasan tambahan menggunakan < h4> dengan isi yang dipusatkan (< center>), yaitu deskripsi singkat bahwa gallery dibuat sebagai wadah untuk menuangkan rasa suka terhadap alam. Setelah itu, terdapat < div class="gallery"> yang berfungsi sebagai tempat menampilkan foto-foto. Di dalam gallery ini, ditampilkan empat gambar dengan tag < img> masing-masing, yang sumbernya diambil dari folder img (misalnya Sunset (1).jpg, Sunset (2).jpg, dan seterusnya), serta diberikan atribut alt sebagai teks alternatif jika gambar tidak dapat dimuat. Struktur ini memungkinkan gambar ditata dengan rapi, terutama jika dipadukan dengan CSS grid seperti yang sudah kamu tulis sebelumnya, sehingga gallery tampak teratur dan menarik.
<hr>