@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Pusat Edukasi Keuangan</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Temukan artikel-artikel terbaik kami untuk meningkatkan pengetahuan dan keterampilan keuangan Anda
            </p>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-blue-900 mb-6">Mengapa Penting Belajar Keuangan?</h2>
            <p class="text-lg text-gray-600 mb-8">
                Literasi keuangan adalah kemampuan untuk memahami dan menggunakan berbagai produk, layanan, dan konsep keuangan secara efektif untuk membuat keputusan finansial yang baik. Dengan pengetahuan keuangan yang memadai, Anda dapat:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="bg-gold-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-gold-500"></i>
                    </div>
                    <h3 class="font-bold text-blue-900 mb-2">Mengelola Uang Lebih Baik</h3>
                    <p class="text-gray-600 text-sm">Membuat anggaran, mengontrol pengeluaran, dan menabung secara efektif</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="bg-gold-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-piggy-bank text-gold-500"></i>
                    </div>
                    <h3 class="font-bold text-blue-900 mb-2">Membangun Dana Darurat</h3>
                    <p class="text-gray-600 text-sm">Mempersiapkan dana darurat untuk menghadapi situasi tak terduga</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="bg-gold-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hand-holding-usd text-gold-500"></i>
                    </div>
                    <h3 class="font-bold text-blue-900 mb-2">Mencapai Tujuan Keuangan</h3>
                    <p class="text-gray-600 text-sm">Mencapai tujuan keuangan jangka pendek, menengah, dan panjang</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Articles Grid -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Artikel Terbaru</h2>
            <p class="text-lg text-gray-600">Temukan berbagai topik menarik seputar keuangan pribadi</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <form method="GET" action="{{ route('education') }}">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search articles..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ request('search') }}"
                        >
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <select name="category" class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">All Categories</option>
                        <option value="Budgeting" {{ request('category') === 'Budgeting' ? 'selected' : '' }}>Budgeting</option>
                        <option value="Investing" {{ request('category') === 'Investing' ? 'selected' : '' }}>Investing</option>
                        <option value="Savings" {{ request('category') === 'Savings' ? 'selected' : '' }}>Savings</option>
                        <option value="Retirement Planning" {{ request('category') === 'Retirement Planning' ? 'selected' : '' }}>Retirement Planning</option>
                        <option value="Insurance" {{ request('category') === 'Insurance' ? 'selected' : '' }}>Insurance</option>
                        <option value="Debt Management" {{ request('category') === 'Debt Management' ? 'selected' : '' }}>Debt Management</option>
                        <option value="Tax Planning" {{ request('category') === 'Tax Planning' ? 'selected' : '' }}>Tax Planning</option>
                        <option value="Credit Management" {{ request('category') === 'Credit Management' ? 'selected' : '' }}>Credit Management</option>
                    </select>

                    <!-- Sort Options -->
                    <select name="sort" class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>Newest First</option>
                        <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Oldest First</option>
                        <option value="title" {{ request('sort') === 'title' ? 'selected' : '' }}>Title A-Z</option>
                    </select>
                </div>
                <div class="mt-4 flex justify-center">
                    <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition-colors">
                        Apply Filters
                    </button>
                </div>
            </form>
        </div>
        </div>

        

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=500&q=80" alt="Financial Planning" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-3">Perencanaan Keuangan</span>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Strategi Membuat Anggaran Bulanan yang Efektif</h3>
                    <p class="text-gray-600 mb-4">Pelajari metode membuat anggaran bulanan yang realistis dan membantu mengontrol pengeluaran Anda.</p>
                    <a href="{{ route('article', ['id' => 1]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=500&q=80" alt="Investment" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-3">Investasi</span>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Panduan Investasi Saham untuk Pemula</h3>
                    <p class="text-gray-600 mb-4">Mulai investasi saham dengan langkah-langkah yang aman dan menguntungkan untuk pemula.</p>
                    <a href="{{ route('article', ['id' => 2]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221?auto=format&fit=crop&w=500&q=80" alt="Savings" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-3">Tabungan</span>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Tips Menabung Efektif Meskipun Gaji Kecil</h3>
                    <p class="text-gray-600 mb-4">Metode menabung yang bisa dilakukan meskipun penghasilan terbatas untuk membangun dana darurat.</p>
                    <a href="{{ route('article', ['id' => 3]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=500&q=80" alt="Insurance" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-3">Asuransi</span>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Memilih Asuransi yang Tepat untuk Keluarga</h3>
                    <p class="text-gray-600 mb-4">Panduan memilih jenis asuransi yang sesuai dengan kebutuhan dan kondisi keuangan Anda.</p>
                    <a href="{{ route('article', ['id' => 4]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=500&q=80" alt="Retirement" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-3">Dana Pensiun</span>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Persiapan Dana Pensiun Sejak Dini</h3>
                    <p class="text-gray-600 mb-4">Kenapa penting menyiapkan dana pensiun sejak muda dan bagaimana cara memulainya.</p>
                    <a href="{{ route('article', ['id' => 5]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a8d8a50f?auto=format&fit=crop&w=500&q=80" alt="Debt" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-3">Utang</span>
                    <h3 class="text-xl font-bold text-blue-900 mb-3">Strategi Melunasi Utang dengan Cepat</h3>
                    <p class="text-gray-600 mb-4">Metode efektif untuk melunasi utang dan kembali merdeka secara finansial.</p>
                    <a href="{{ route('article', ['id' => 6]) }}" class="text-gold-500 font-semibold hover:text-gold-600 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md">
                Muat Lebih Banyak Artikel
            </button>
        </div>
    </div>
</section>
@endsection