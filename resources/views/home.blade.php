@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Meningkatkan <span class="text-gold-400">Literasi Keuangan</span><br> untuk Masa Depan Lebih Baik
                </h1>
                <p class="text-xl mb-8 text-blue-100">
                    Pelajari dasar-dasar manajemen keuangan, investasi, dan perencanaan keuangan pribadi secara gratis bersama Maneki.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('education') }}" class="bg-gold-500 hover:bg-gold-600 text-blue-900 font-bold py-3 px-8 rounded-lg text-center transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Explore Article
                    </a>
                    <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-900 text-white font-bold py-3 px-8 rounded-lg text-center transition-all duration-300">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=500&q=80" alt="Financial Education" class="rounded-lg shadow-2xl w-full">
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Artikel Pilihan</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Temukan artikel-artikel terpilih kami yang akan membantu meningkatkan pengetahuan keuangan Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Article 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" alt="Financial Planning" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Dasar-Dasar Financial Planning</h3>
                    <p class="text-gray-600 mb-4">Pelajari pentingnya perencanaan keuangan dan bagaimana membuat rencana keuangan yang tepat untuk masa depan Anda.</p>
                    <a href="{{ route('article', ['id' => 1]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=500&q=80" alt="Investment" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Panduan Investasi Saham</h3>
                    <p class="text-gray-600 mb-4">Mulai investasi saham dengan langkah-langkah yang aman dan menguntungkan untuk pemula.</p>
                    <a href="{{ route('article', ['id' => 2]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1574643156937-8b7309e7d3e8?auto=format&fit=crop&w=500&q=80" alt="Savings" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Cara Menabung Efektif</h3>
                    <p class="text-gray-600 mb-4">Strategi menabung yang mudah dan efektif untuk membangun dana darurat dan masa depan.</p>
                    <a href="{{ route('article', ['id' => 3]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=500&q=80" alt="Budget" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Membuat Anggaran Bulanan</h3>
                    <p class="text-gray-600 mb-4">Metode membuat anggaran bulanan yang realistis dan membantu mengontrol pengeluaran.</p>
                    <a href="{{ route('article', ['id' => 4]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('education') }}" class="inline-block bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md">
                Lihat Semua Artikel
            </a>
        </div>
    </div>
</section>

<!-- Why Us Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Mengapa Memilih Maneki?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Kami berkomitmen untuk meningkatkan literasi keuangan masyarakat Indonesia
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center p-6">
                <div class="bg-gold-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-graduation-cap text-gold-500 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Pendidikan Berkualitas</h3>
                <p class="text-gray-600">Konten edukasi yang dirancang oleh para ahli keuangan dan disampaikan secara sederhana dan mudah dipahami.</p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-6">
                <div class="bg-gold-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lock text-gold-500 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Informasi Terpercaya</h3>
                <p class="text-gray-600">Semua informasi yang kami berikan telah diverifikasi dan berasal dari sumber terpercaya dalam dunia keuangan.</p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-6">
                <div class="bg-gold-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hand-holding-usd text-gold-500 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">Gratis</h3>
                <p class="text-gray-600">Semua materi dan alat bantu yang kami sediakan sepenuhnya gratis tanpa biaya tersembunyi.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Meningkatkan Literasi Keuangan Anda?</h2>
        <p class="text-xl mb-8 text-blue-100 max-w-3xl mx-auto">
            Bergabunglah dengan ribuan orang lainnya yang telah memperbaiki kondisi keuangan mereka bersama Maneki
        </p>
        <a href="{{ route('contact') }}" class="inline-block bg-gold-500 hover:bg-gold-600 text-blue-900 font-bold py-4 px-10 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
            Mulai Sekarang
        </a>
    </div>
</section>
@endsection