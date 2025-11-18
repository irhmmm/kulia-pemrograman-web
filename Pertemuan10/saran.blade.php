<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran & Kritik - Kopi Baik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Georgia', 'Times New Roman', serif;
        }
        
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        .input-style {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(200, 160, 100, 0.2);
            color: #f5f5f5;
            padding: 1rem;
            border-radius: 0.5rem;
            width: 100%;
            transition: all 0.3s;
        }
        
        .input-style:focus {
            border-color: #c8a064;
            outline: none;
            box-shadow: 0 0 0 3px rgba(200, 160, 100, 0.3);
        }
    </style>
</head>
<body class="bg-zinc-950 text-gray-100">
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
                    <li><a href="/saran" class="text-amber-500 text-xs uppercase tracking-widest font-light transition-colors duration-300">Saran</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="min-h-screen pt-32 pb-20 px-6 lg:px-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/60"></div>
            <img src="img/background4.png" alt="Background" class="w-full h-full object-cover opacity-40">
        </div>

        <div class="relative z-10 max-w-xl mx-auto bg-zinc-900/40 backdrop-blur-lg p-10 md:p-12 border border-amber-900/20 rounded-xl shadow-2xl shadow-black/50">
            <div class="text-center mb-10">
                <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-700 to-transparent mx-auto mb-8"></div>
                <h2 class="text-4xl lg:text-5xl font-light uppercase tracking-[0.3em] text-amber-700 font-playfair mb-4">Saran & Kritik</h2>
                <p class="text-gray-400 text-md italic">Bantu kami menjadi lebih baik! Semua masukan akan kami terima dengan senang hati.</p>
            </div>

            <form id="feedbackForm">
                <div class="space-y-6">
                    <div>
                        <label for="nama" class="block text-sm font-light text-gray-300 mb-2">Nama Anda (Opsional)</label>
                        <input type="text" id="nama" class="input-style" placeholder="Cth: Anonim, atau nama Anda">
                    </div>
                    
                    <div>
                        <label for="judul" class="block text-sm font-light text-gray-300 mb-2">Judul/Subjek Masukan</label>
                        <input type="text" id="judul" class="input-style" required placeholder="Cth: Saran Menu Baru, Kritik Pelayanan">
                    </div>

                    <div>
                        <label for="masukan" class="block text-sm font-light text-gray-300 mb-2">Saran atau Kritik Anda</label>
                        <textarea id="masukan" rows="6" class="input-style" required placeholder="Tulis masukan Anda di sini..."></textarea>
                    </div>

                    <button type="submit" class="w-full px-8 py-3 bg-amber-700 text-zinc-950 uppercase tracking-[0.2em] text-sm font-semibold hover:bg-amber-600 transition-all duration-300 rounded-lg shadow-lg">
                        Kirim Via Instagram DM
                    </button>
                </div>
            </form>
            
            <p id="alertMessage" class="mt-6 text-center text-sm text-yellow-400 hidden">
                Perhatian: Setelah menekan tombol, Anda akan dialihkan ke Instagram. Pesan sudah terisi, Anda hanya perlu menekan tombol kirim di sana.
            </p>
        </div>
    </section>

    <footer class="bg-zinc-950 border-t border-amber-900/20 py-8">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-gray-500 text-sm">&copy; 2025 Just Vrew - Kopi Baik. All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-6">
                <a href="https://www.instagram.com/just_vrew/" target="_blank" class="text-amber-700 hover:text-amber-500 transition-colors duration-300">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('feedbackForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const nama = document.getElementById('nama').value.trim() || 'Anonim';
            const judul = document.getElementById('judul').value.trim();
            const masukan = document.getElementById('masukan').value.trim();
            
            const message = `Halo @just_vrew!%0A%0A*Masukan dari:* ${nama}%0A*Subjek:* ${judul}%0A%0A*Isi Pesan:*%0A${masukan}`;
            
            const instagramUrl = 'https://www.instagram.com/direct/new/?user_id=123456789'; 
            
            const profileUrl = 'https://www.instagram.com/just_vrew/';

            navigator.clipboard.writeText(decodeURIComponent(message))
                .then(() => {
                    alert('Masukan Anda sudah disalin ke clipboard! Silakan klik OK, lalu di Instagram, tekan tombol "Message" (Pesan), lalu tempelkan (Paste) masukan Anda, dan Kirim.');
                    window.open(profileUrl, '_blank');
                })
                .catch(err => {
                    document.getElementById('alertMessage').textContent = 'Gagal menyalin. Harap salin teks berikut secara manual dan kirim ke DM @just_vrew:\n' + decodeURIComponent(message).replace(/%0A/g, '\n');
                    document.getElementById('alertMessage').classList.remove('hidden');
                    window.open(profileUrl, '_blank');
                });
        });
        
        document.getElementById('alertMessage').classList.remove('hidden');
    </script>
</body>
</html>