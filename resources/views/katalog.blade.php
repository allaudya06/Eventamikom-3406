<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 font-sans text-gray-800 antialiased p-6 md:p-12">
    <div class="max-w-4xl mx-auto">
        
        <nav class="flex flex-wrap justify-center gap-3 mb-10">
            <a href="/" class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition duration-300 shadow-md">Home</a>
            <a href="/profil" class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition duration-300 shadow-md">Profil</a>
            <a href="/katalog" class="px-5 py-2 bg-indigo-800 text-white font-medium rounded-lg shadow-md pointer-events-none">Katalog</a>
            <a href="/bantuan" class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition duration-300 shadow-md">Bantuan</a>
            <a href="/kontak" class="px-5 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition duration-300 shadow-md">Kontak</a>
        </nav>

        <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Katalog AmikomEventHub</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 cursor-pointer border border-gray-100">
                <div class="h-32 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-lg mb-4"></div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Seminar Artificial Intelligence</h2>
                <p class="text-gray-500 text-sm mb-4 line-clamp-2">Membahas tren terbaru dan penerapan AI di dunia industri kreatif dan teknologi masa depan.</p>
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Gratis</span>
                    <span class="text-sm text-gray-400 font-medium">12 Mei 2026</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 cursor-pointer border border-gray-100">
                <div class="h-32 bg-gradient-to-r from-purple-400 to-pink-500 rounded-lg mb-4"></div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Workshop Web Development</h2>
                <p class="text-gray-500 text-sm mb-4 line-clamp-2">Pelatihan intensif membangun aplikasi web modern menggunakan framework Laravel dan Tailwind CSS.</p>
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold">Premium</span>
                    <span class="text-sm text-gray-400 font-medium">20 Mei 2026</span>
                </div>
            </div>

        </div>
    </div>
</body>
</html>