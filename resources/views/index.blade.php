<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Bagian Header -->
    <header class="bg-[#0a2c54] text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold ">Welcome to My Portofolio</h1>
            <nav class="mt-4">
                <ul class="flex space-x-4 justify-center">
                    <li><a href="#about" class="hover:text-gray-400">About</a></li>
                    <li><a href="#portfolio" class="hover:text-gray-400">Portofolio</a></li>
                    <li><a href="#contact" class="hover:text-gray-400">Contact</a></li>
                    <li><a href="login" class="hover:text-gray-400">Login</a></li>
                    <li><a href="about" class="hover:text-gray-400">About</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Bagian Tentang Saya -->
    <section id="about" class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">About</h2>
            <p>Halo, saya Syaqib Hida, seorang pelajar SMK di bidang Rekayasa Perangkat Lunak (PPLG). Saya sangat tertarik dengan pemrograman dan pengembangan web.</p>
        </div>
    </section>

    <!-- Bagian Portofolio -->
    <section id="portfolio" class="py-8 bg-[#f5f5f5]">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Portofolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="portfolio-item bg-white p-4 shadow-md">
                    <h3 class="text-lg font-bold mb-2">Proyek 1</h3>
                    <p>Deskripsi proyek pertama.</p>
                    <img src="assets/image/nahida.jpg" class="w-24 mt-2" alt="Proyek 1">
                </div>
                <div class="portfolio-item bg-white p-4 shadow-md">
                    <h3 class="text-lg font-bold mb-2">Proyek 2</h3>
                    <p>Deskripsi proyek kedua.</p>
                    <img src="assets/image/paimon.jpg" class="w-24 mt-2" alt="Proyek 2">
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Kontak -->
    <section id="contact" class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Contact</h2>
            <p>Email: your.email@example.com</p>
            <p>Nomor Telepon: 08xxxxxxxxxx</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0a2c54] text-white py-4 text-center">
        <p>&copy; 2024 Syaqib. Semua hak dilindungi.</p>
    </footer>
</body>
</html>