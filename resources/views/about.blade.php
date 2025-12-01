@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Tentang Maneki</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Meningkatkan literasi keuangan masyarakat Indonesia melalui edukasi yang mudah dipahami dan terpercaya
            </p>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-blue-900 mb-6">Sejarah Maneki</h2>
                <p class="text-gray-600 mb-6">
                    Maneki didirikan pada tahun 2020 dengan visi untuk meningkatkan literasi keuangan masyarakat Indonesia. Didorong oleh rendahnya tingkat pemahaman keuangan di Indonesia, kami memulai perjalanan ini untuk menyediakan edukasi keuangan yang mudah diakses, gratis, dan terpercaya.
                </p>
                <p class="text-gray-600 mb-6">
                    Sejak awal berdiri, kami telah membantu lebih dari 100.000 pengguna meningkatkan pemahaman mereka tentang manajemen keuangan, investasi, dan perencanaan keuangan pribadi. Dengan pendekatan yang sederhana dan konten yang disusun oleh para ahli keuangan, kami yakin dapat terus memberikan dampak positif bagi masyarakat Indonesia.
                </p>
                <p class="text-gray-600">
                    Kami percaya bahwa dengan pengetahuan keuangan yang memadai, setiap individu dapat membuat keputusan keuangan yang lebih baik dan mencapai kemandirian finansial.
                </p>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=600&q=80" alt="Our Story" class="rounded-xl shadow-lg w-full">
            </div>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Founder Maneki</h2>
            <p class="text-lg text-gray-600">Kepemimpinan dan visi untuk masa depan keuangan Indonesia</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center max-w-4xl mx-auto">
            <div class="flex justify-center">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Founder" class="rounded-full w-64 h-64 object-cover border-4 border-gold-400">
            </div>
            <div>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">Budi Santoso</h3>
                <p class="text-gold-500 font-semibold mb-4">Founder & CEO</p>
                <p class="text-gray-600 mb-4">
                    Budi Santoso adalah seorang praktisi keuangan dengan pengalaman lebih dari 15 tahun di industri perbankan dan investasi. Melihat rendahnya tingkat literasi keuangan di Indonesia, beliau memutuskan untuk mendirikan Maneki dengan tujuan memberikan edukasi keuangan yang mudah dipahami oleh masyarakat umum.
                </p>
                <p class="text-gray-600">
                    Dengan latar belakang pendidikan di bidang Ekonomi dan Keuangan dari Universitas Indonesia serta sertifikasi CFA (Chartered Financial Analyst), Budi berkomitmen untuk terus mengembangkan platform Maneki sebagai sumber edukasi keuangan terpercaya di Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Vision -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="text-center p-8 bg-blue-50 rounded-xl">
                <div class="bg-gold-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-bullseye text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Misi Kami</h3>
                <p class="text-gray-600">
                    Menyediakan edukasi keuangan yang mudah diakses, terpercaya, dan disajikan dalam bentuk yang mudah dipahami oleh masyarakat luas untuk meningkatkan tingkat literasi keuangan di Indonesia.
                </p>
            </div>
            
            <div class="text-center p-8 bg-blue-50 rounded-xl">
                <div class="bg-gold-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-eye text-gold-500 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Visi Kami</h3>
                <p class="text-gray-600">
                    Menjadi platform terkemuka dalam edukasi keuangan di Indonesia yang turut serta meningkatkan kesejahteraan masyarakat melalui pemahaman keuangan yang lebih baik.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection