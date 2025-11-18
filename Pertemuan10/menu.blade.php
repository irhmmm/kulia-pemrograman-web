<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Kopi Baik</title>
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
                    <li><a href="/saran" class="text-amber-700 hover:text-amber-500 text-xs uppercase tracking-widest font-light transition-colors duration-300">Saran</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="min-h-screen pt-32 pb-20 px-6 lg:px-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/60"></div>
            <img src="img/background.jpg" alt="Background" class="w-full h-full object-cover opacity-40">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-700 to-transparent mx-auto mb-8"></div>
                <h2 class="text-5xl lg:text-6xl font-light uppercase tracking-[0.3em] text-amber-700 font-playfair mb-4">Menu Just Vrew</h2>
                <p class="text-gray-400 text-lg mt-6 italic">Nikmati setiap tegukan dengan penuh cita rasa</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                
                <div class="group bg-zinc-900/40 backdrop-blur-md border border-amber-900/20 rounded-xl hover:border-amber-700/40 hover:bg-zinc-900/60 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 overflow-hidden">
                    <img src="img/kopifilter.png" alt="Kopi Filter" class="w-full h-48 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div class="p-8 text-center">
                        <h3 class="text-2xl uppercase tracking-[0.2em] text-amber-700 font-light mb-4 font-playfair">Kopi Filter</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Espresso klasik dengan cita rasa yang kuat dan aroma yang menggugah selera.</p>
                        <div class="mt-6 pt-6 border-t border-amber-900/20">
                            <span class="text-amber-600 font-semibold text-xl">Rp 25.000 - 30.000</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-zinc-900/40 backdrop-blur-md border border-amber-900/20 rounded-xl hover:border-amber-700/40 hover:bg-zinc-900/60 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 overflow-hidden">
                    <img src="img/kopi_hitam.jpg" alt="Kopi Hitam" class="w-full h-48 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div class="p-8 text-center">
                        <h3 class="text-2xl uppercase tracking-[0.2em] text-amber-700 font-light mb-4 font-playfair">Kopi Hitam</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Kopi murni tanpa gula, cocok untuk menemani malam hari yang tenang.</p>
                        <div class="mt-6 pt-6 border-t border-amber-900/20">
                            <span class="text-amber-600 font-semibold text-xl">Rp 20.000</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-zinc-900/40 backdrop-blur-md border border-amber-900/20 rounded-xl hover:border-amber-700/40 hover:bg-zinc-900/60 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 overflow-hidden">
                    <img src="img/kopi_aren.jpg" alt="Kopi Aren" class="w-full h-48 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div class="p-8 text-center">
                        <h3 class="text-2xl uppercase tracking-[0.2em] text-amber-700 font-light mb-4 font-playfair">Kopi Aren</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Signature drink dengan perpaduan sempurna kopi dan gula aren alami.</p>
                        <div class="mt-6 pt-6 border-t border-amber-900/20">
                            <span class="text-amber-600 font-semibold text-xl">Rp23.000</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-zinc-900/40 backdrop-blur-md border border-amber-900/20 rounded-xl hover:border-amber-700/40 hover:bg-zinc-900/60 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 overflow-hidden">
                    <img src="img/kopi_susu.jpg" alt="Kopi Susu" class="w-full h-48 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div class="p-8 text-center">
                        <h3 class="text-2xl uppercase tracking-[0.2em] text-amber-700 font-light mb-4 font-playfair">Kopi Susu</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Kombinasi lembut kopi dan susu yang creamy dan menenangkan.</p>
                        <div class="mt-6 pt-6 border-t border-amber-900/20">
                            <span class="text-amber-600 font-semibold text-xl">Rp 17.000 - 18.000</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-zinc-900/40 backdrop-blur-md border border-amber-900/20 rounded-xl hover:border-amber-700/40 hover:bg-zinc-900/60 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 overflow-hidden">
                    <img src="img/coklat.jpg" alt="Coklat" class="w-full h-48 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div class="p-8 text-center">
                        <h3 class="text-2xl uppercase tracking-[0.2em] text-amber-700 font-light mb-4 font-playfair">Coklat</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Minuman coklat hangat yang manis dan lembut untuk segala suasana.</p>
                        <div class="mt-6 pt-6 border-t border-amber-900/20">
                            <span class="text-amber-600 font-semibold text-xl">Rp 20.000</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-zinc-900/40 backdrop-blur-md border border-amber-900/20 rounded-xl hover:border-amber-700/40 hover:bg-zinc-900/60 hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/50 transition-all duration-500 overflow-hidden">
                    <img src="img/lemonTea.jpg" alt="Lemon Tea" class="w-full h-48 object-contain group-hover:scale-110 transition-transform duration-300">
                    <div class="p-8 text-center">
                        <h3 class="text-2xl uppercase tracking-[0.2em] text-amber-700 font-light mb-4 font-playfair">Lemon Tea</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Teh segar dengan perasan lemon yang menyegarkan dan menyehatkan.</p>
                        <div class="mt-6 pt-6 border-t border-amber-900/20">
                            <span class="text-amber-600 font-semibold text-xl">Rp 15.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-20">
                <a href="index.html#contact" class="inline-block px-12 py-4 bg-transparent border-2 border-amber-700 text-amber-700 uppercase tracking-[0.2em] text-sm font-light hover:bg-amber-700 hover:text-zinc-950 transition-all duration-300 rounded-lg">
                    Kunjungi Kami
                </a>
            </div>
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
</body>
</html>