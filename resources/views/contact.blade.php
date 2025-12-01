@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Hubungi Kami</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Punya pertanyaan seputar keuangan? Kami siap membantu Anda
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold text-blue-900 mb-8">Kantor Pusat Maneki</h2>
                
                <div class="space-y-6 mb-8">
                    <div class="flex items-start">
                        <div class="bg-gold-100 p-3 rounded-full mr-4">
                            <i class="fas fa-map-marker-alt text-gold-500"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900">Alamat</h3>
                            <p class="text-gray-600">Jl. Jendral Sudirman Kav. 10-11, Jakarta Pusat, DKI Jakarta 10220</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-gold-100 p-3 rounded-full mr-4">
                            <i class="fas fa-phone-alt text-gold-500"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900">Telepon</h3>
                            <p class="text-gray-600">+62 21 573 8888</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-gold-100 p-3 rounded-full mr-4">
                            <i class="fas fa-envelope text-gold-500"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900">Email</h3>
                            <p class="text-gray-600">info@maneki.id</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-gold-100 p-3 rounded-full mr-4">
                            <i class="fas fa-clock text-gold-500"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-900">Jam Operasional</h3>
                            <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00 WIB</p>
                        </div>
                    </div>
                </div>
                
                <!-- Map Placeholder -->
                <div class="bg-gray-200 rounded-lg h-80 flex items-center justify-center mb-8">
                    <div class="text-center">
                        <i class="fas fa-map-marked-alt text-gray-500 text-4xl mb-4"></i>
                        <p class="text-gray-600">Peta Lokasi Kantor Maneki</p>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-semibold text-blue-900 mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-100 hover:bg-blue-200 text-blue-900 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-blue-100 hover:bg-blue-200 text-blue-900 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-blue-100 hover:bg-blue-200 text-blue-900 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-blue-100 hover:bg-blue-200 text-blue-900 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-blue-900 mb-8">Kirim Pesan</h2>
                
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-400 focus:border-gold-400 transition-colors duration-300">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-400 focus:border-gold-400 transition-colors duration-300">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                        <input type="text" id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-400 focus:border-gold-400 transition-colors duration-300">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea id="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold-400 focus:border-gold-400 transition-colors duration-300"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md">
                        Kirim Pesan
                    </button>
                </form>
                
                <!-- Contact Options -->
                <div class="mt-12 p-6 bg-blue-50 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-900 mb-4">Pilihan Kontak Lain</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-white rounded-lg border border-blue-200">
                            <i class="fas fa-comments text-gold-500 text-2xl mb-3"></i>
                            <h4 class="font-semibold text-blue-900">Live Chat</h4>
                            <p class="text-gray-600 text-sm mt-1">Obrolan langsung dengan tim kami</p>
                        </div>
                        <div class="text-center p-4 bg-white rounded-lg border border-blue-200">
                            <i class="fas fa-video text-gold-500 text-2xl mb-3"></i>
                            <h4 class="font-semibold text-blue-900">Video Call</h4>
                            <p class="text-gray-600 text-sm mt-1">Konsultasi via video call</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Pertanyaan Umum</h2>
            <p class="text-lg text-gray-600">Temukan jawaban untuk pertanyaan yang sering ditanyakan</p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-blue-900 mb-3">Apakah semua materi di Maneki gratis?</h3>
                <p class="text-gray-600">Ya, semua artikel, panduan, dan alat bantu keuangan yang tersedia di Maneki sepenuhnya gratis tanpa biaya tersembunyi.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-blue-900 mb-3">Bagaimana saya bisa mulai belajar keuangan di Maneki?</h3>
                <p class="text-gray-600">Anda bisa mulai dengan menjelajahi artikel-artikel kami di halaman Edukasi, atau mengikuti panduan langkah-demi-langkah yang kami sediakan untuk pemula.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-blue-900 mb-3">Apakah Maneki menawarkan konsultasi keuangan pribadi?</h3>
                <p class="text-gray-600">Saat ini kami menyediakan informasi dan panduan umum, namun Anda dapat menghubungi kami untuk informasi lebih lanjut tentang layanan konsultasi yang akan datang.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-blue-900 mb-3">Bagaimana saya bisa berkontribusi di Maneki?</h3>
                <p class="text-gray-600">Kami terbuka untuk kolaborasi dengan para ahli keuangan dan penulis yang ingin berkontribusi dalam meningkatkan literasi keuangan masyarakat.</p>
            </div>
        </div>
    </div>
</section>
@endsection