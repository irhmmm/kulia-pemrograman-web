<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kopi Baik</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="fixed top-0 left-0 right-0 z-50 bg-zinc-950/95 backdrop-blur-xl border-b border-amber-900/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-20 py-6 flex justify-between items-center">
            <div class="logo">
                <img src="img/logo2.png" alt="Logo Coffee Shop" class="h-10 w-auto rounded-full brightness-110 hover:scale-105 transition-transform duration-300">
            </div>
            <nav>
        <ul class="flex gap-8 list-none">
            <li><a href="/#about" class="text-amber-700 hover:text-amber-500 text-xs uppercase tracking-widest font-light transition-colors duration-300">About</a></li>
            <li><a href="/#contact" class="text-amber-700 hover:text-amber-500 text-xs uppercase tracking-widest font-light transition-colors duration-300">Info</a></li>
            <li><a href="/menu" class="text-amber-700 hover:text-amber-500 text-xs uppercase tracking-widest font-light transition-colors duration-300">Menu</a></li>
            <li><a href="/saran" class="text-amber-700 hover:text-amber-500 text-xs uppercase tracking-widest font-light transition-colors duration-300">Saran</a></li>
        </ul>
        </ul>
        </nav>
    </div>
    </header>

    <section class="relative min-h-screen flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="img/background3.jpg" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/70"></div>
    </div>

    <div class="relative z-10 text-white px-6">
        <h1 class="text-5xl md:text-7xl font-light tracking-widest uppercase drop-shadow-2xl">
        Just Vrew <br> Kopi Baik
        </h1>
    </div>
    </section>


    <section id="about" class="about">
        <h2> Just Vrew</h2>
        <p>
            Just Vrew adalah tempat yang menyajikan kopi sederhana namun penuh makna dengan berbagai pilihan menu.
            dan memastikan setiap pengalaman kopi yang kami berikan adalah unik dan memuaskan. Just Vrew dibangun pada tahun 2023
            dikarnakan ownernya sendiri sudah lelah bekerja dengan orang lain dan akhirnya memulai usahanya sendiri.
        </p>
    </section>

    <section id="contact" class="relative py-32 px-6 lg:px-20 overflow-hidden">
        <div class="absolute inset-0">
        <img src="img/background2.jpg" alt="Background Just Info" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/70"></div>
    </div>

    <div class="relative z-10 text-center">
        <h2 class="text-5xl lg:text-6xl font-light uppercase tracking-[0.3em] text-amber-700 mb-6">Just Info</h2>
        <p class="text-gray-300 text-lg italic mb-12">Sharing-sering di pendekkeran</p>

    <div class="contact-info flex justify-center gap-6 flex-wrap">
      <div class="contact-item bg-black/40 backdrop-blur-md border border-amber-900/20 p-8 rounded-xl">
        <h3 class="text-amber-700 text-xl uppercase mb-3">Jam Buka</h3>
        <p class="text-gray-300">Cek Story Instagram <br>20:30 - Mau Pulang</p>
      </div>

    <div class="contact-item bg-black/40 backdrop-blur-md border border-amber-900/20 p-8 rounded-xl">
        <h3 class="text-amber-700 text-xl uppercase mb-3">Instagram</h3>
        <p class="text-gray-300">Follow us</p>
        <a href="https://www.instagram.com/just_vrew/" target="_blank" class="text-amber-500 hover:text-amber-300 transition-colors">@Just_Vrew</a>
      </div>
    </div>

    <div class="mt-12 max-w-4xl mx-auto rounded-2xl overflow-hidden border border-amber-900/20 shadow-lg shadow-black/50">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6780122524547!2d119.4400804!3d-5.1554134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee30053f57ad9%3A0xd9f9140f797a353f!2sJust_Vrew%20Kopi.Baik!5e0!3m2!1sid!2sid!4v1759317532363!5m2!1sid!2sid"
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
    </div>
    </section>
    <footer class="bg-zinc-950 border-t border-amber-900/20 py-8">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-gray-500 text-sm">&copy; 2025 Just Vrew - Kopi Baik. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>