@extends('layouts.app')

@section('content')
<!-- Article Header -->
<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="mb-6">
                <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded">Perencanaan Keuangan</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-4">Strategi Membuat Anggaran Bulanan yang Efektif</h1>
            <div class="flex flex-col md:flex-row md:items-center text-gray-600 text-sm">
                <span class="mb-2 md:mb-0 md:mr-4">Oleh: Budi Santoso</span>
                <span class="mb-2 md:mb-0 md:mr-4">•</span>
                <span>15 November 2024</span>
                <span class="mb-2 md:mb-0 md:ml-4 md:mr-4">•</span>
                <span>5 Menit Membaca</span>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<article class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80" alt="Budget Planning" class="w-full h-96 object-cover rounded-xl mb-8">
                
                <div class="prose max-w-none text-gray-700 text-lg leading-relaxed">
                    <p class="mb-6">
                        Membuat anggaran bulanan adalah langkah pertama yang harus dilakukan oleh setiap orang yang ingin mengelola keuangan dengan baik. Bagi sebagian orang, membuat anggaran mungkin terasa membingungkan atau terlalu rumit. Namun sebenarnya, anggaran bulanan adalah alat yang sangat sederhana namun efektif untuk mengontrol pengeluaran dan mencapai tujuan keuangan.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-blue-900 mt-8 mb-4">Mengapa Membuat Anggaran Sangat Penting?</h2>
                    <p class="mb-6">
                        Banyak orang tidak menyadari bahwa mereka menghabiskan uang lebih dari yang seharusnya karena tidak memiliki kontrol terhadap pengeluaran mereka. Dengan membuat anggaran, Anda akan lebih sadar akan ke mana uang Anda pergi dan bisa mengalokasikan dana untuk prioritas yang lebih penting.
                    </p>
                    
                    <div class="bg-blue-50 p-6 rounded-lg my-6">
                        <p class="text-blue-800 italic">
                            "Membuat anggaran bukan berarti mengurangi gaya hidup Anda, tetapi mengarahkan uang Anda untuk bekerja lebih keras untuk Anda."
                        </p>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-blue-900 mt-8 mb-4">Langkah-Langkah Membuat Anggaran Bulanan</h2>
                    <p class="mb-6">
                        Berikut adalah langkah-langkah praktis yang bisa Anda ikuti untuk membuat anggaran bulanan yang efektif:
                    </p>
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-6 mb-3">1. Catat Pendapatan dan Pengeluaran</h3>
                    <p class="mb-6">
                        Langkah pertama adalah mencatat semua sumber pendapatan yang Anda terima setiap bulan, termasuk gaji pokok, bonus, penghasilan tambahan, dan lainnya. Setelah itu, catat semua pengeluaran yang Anda keluarkan, termasuk pengeluaran tetap (seperti sewa rumah, cicilan) dan tidak tetap (makanan, hiburan, transportasi).
                    </p>
                    
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" alt="Income and Expense Tracking" class="w-full h-64 object-cover rounded-lg my-6">
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-6 mb-3">2. Prioritaskan Kebutuhan daripada Keinginan</h3>
                    <p class="mb-6">
                        Pisahkan antara kebutuhan dan keinginan. Kebutuhan adalah hal-hal yang benar-benar penting untuk bertahan hidup, seperti makanan, tempat tinggal, dan perawatan kesehatan. Keinginan adalah hal-hal yang dapat meningkatkan kenyamanan hidup tetapi bukan kebutuhan utama.
                    </p>
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-6 mb-3">3. Gunakan Aturan 50/30/20</h3>
                    <p class="mb-6">
                        Aturan 50/30/20 adalah pendekatan sederhana untuk mengelola penghasilan:
                    </p>
                    <ul class="list-disc pl-6 mb-6 space-y-2">
                        <li>50% untuk kebutuhan pokok (tempat tinggal, makanan, transportasi)</li>
                        <li>30% untuk keinginan (hiburan, makan di restoran, belanja)</li>
                        <li>20% untuk tabungan dan investasi</li>
                    </ul>
                    
                    <img src="https://images.unsplash.com/photo-1589546813756-838b04d0b3d2?auto=format&fit=crop&w=600&q=80" alt="Budget Allocation" class="w-full h-64 object-cover rounded-lg my-6 float-right ml-6 mb-4">
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-6 mb-3">4. Gunakan Aplikasi atau Spreadsheet</h3>
                    <p class="mb-6">
                        Untuk memudahkan proses pembuatan dan pengawasan anggaran, Anda bisa menggunakan aplikasi keuangan atau spreadsheet sederhana. Banyak aplikasi gratis yang bisa membantu Anda melacak pengeluaran dan menyesuaikan anggaran sesuai kebutuhan.
                    </p>
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-6 mb-3">5. Evaluasi dan Sesuaikan Secara Berkala</h3>
                    <p class="mb-6">
                        Anggaran bukanlah sesuatu yang kaku. Anda harus mengevaluasi dan menyesuaikannya setiap bulan berdasarkan kondisi keuangan terkini. Jika ada perubahan pendapatan atau pengeluaran penting, sesuaikan anggaran Anda agar tetap realistis dan efektif.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-blue-900 mt-8 mb-4">Tips Tambahan untuk Anggaran yang Sukses</h2>
                    <p class="mb-6">
                        Selain langkah-langkah di atas, ada beberapa tips tambahan yang bisa membantu Anda membuat anggaran yang benar-benar efektif:
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                        <div class="bg-gold-50 p-6 rounded-lg border border-gold-200">
                            <h4 class="font-bold text-blue-900 mb-2">Buat Dana Darurat</h4>
                            <p class="text-gray-700">Selalu sediakan sebagian dari anggaran Anda untuk membangun dana darurat minimal 3-6 bulan pengeluaran.</p>
                        </div>
                        <div class="bg-gold-50 p-6 rounded-lg border border-gold-200">
                            <h4 class="font-bold text-blue-900 mb-2">Hindari Pemborosan</h4>
                            <p class="text-gray-700">Identifikasi pengeluaran yang sebenarnya tidak penting dan kurangi pengeluaran tersebut.</p>
                        </div>
                        <div class="bg-gold-50 p-6 rounded-lg border border-gold-200">
                            <h4 class="font-bold text-blue-900 mb-2">Gunakan Metode Envelope</h4>
                            <p class="text-gray-700">Alokasikan uang tunai untuk kategori-kategori pengeluaran tertentu untuk mengontrol pengeluaran.</p>
                        </div>
                        <div class="bg-gold-50 p-6 rounded-lg border border-gold-200">
                            <h4 class="font-bold text-blue-900 mb-2">Tetapkan Tujuan Keuangan</h4>
                            <p class="text-gray-700">Tetapkan tujuan jangka pendek dan panjang untuk memberikan arah pada anggaran Anda.</p>
                        </div>
                    </div>
                    
                    <p class="mb-6">
                        Dengan menerapkan strategi anggaran bulanan yang efektif, Anda akan memiliki kontrol yang lebih baik terhadap keuangan pribadi Anda. Penting untuk diingat bahwa pembuatan anggaran adalah proses yang perlu dilakukan secara konsisten dan disiplin.
                    </p>
                    
                    <p class="mb-6">
                        Awalnya mungkin terasa sulit untuk mengikuti anggaran, tetapi seiring waktu Anda akan melihat manfaat besar dari membuat dan mengikuti anggaran bulanan. Anda akan lebih tenang secara finansial dan lebih siap menghadapi masa depan yang tidak pasti.
                    </p>
                    
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Kesimpulan</h3>
                        <p>
                            Membuat anggaran bulanan bukanlah tugas yang sulit jika Anda memiliki kerangka kerja yang jelas dan komitmen untuk melaksanakannya. Dengan mengikuti langkah-langkah praktis di atas dan menggunakan alat bantu yang tersedia, Anda dapat mengambil alih kendali keuangan Anda dan bergerak menuju kemandirian finansial.
                        </p>
                    </div>
                </div>
                
                <!-- Social Share -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-bold text-blue-900 mb-4">Bagikan Artikel Ini</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-blue-400 text-white p-3 rounded-full hover:bg-blue-500 transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-red-600 text-white p-3 rounded-full hover:bg-red-700 transition-colors duration-300">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="#" class="bg-blue-800 text-white p-3 rounded-full hover:bg-blue-900 transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-24">
                    <!-- Related Articles -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Artikel Terkait</h3>
                        <div class="space-y-4">
                            <a href="{{ route('article', ['id' => 2]) }}" class="block group">
                                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=400&q=80" alt="Investment" class="w-full h-24 object-cover rounded-lg mb-3">
                                <h4 class="text-blue-900 group-hover:text-gold-500 font-semibold transition-colors duration-300">Panduan Investasi Saham untuk Pemula</h4>
                                <p class="text-gray-600 text-sm mt-1">Mulai investasi saham dengan langkah-langkah yang aman...</p>
                            </a>
                            
                            <a href="{{ route('article', ['id' => 3]) }}" class="block group">
                                <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221?auto=format&fit=crop&w=400&q=80" alt="Savings" class="w-full h-24 object-cover rounded-lg mb-3">
                                <h4 class="text-blue-900 group-hover:text-gold-500 font-semibold transition-colors duration-300">Tips Menabung Efektif Meskipun Gaji Kecil</h4>
                                <p class="text-gray-600 text-sm mt-1">Metode menabung yang bisa dilakukan meskipun...</p>
                            </a>
                            
                            <a href="{{ route('article', ['id' => 4]) }}" class="block group">
                                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=400&q=80" alt="Insurance" class="w-full h-24 object-cover rounded-lg mb-3">
                                <h4 class="text-blue-900 group-hover:text-gold-500 font-semibold transition-colors duration-300">Memilih Asuransi yang Tepat untuk Keluarga</h4>
                                <p class="text-gray-600 text-sm mt-1">Panduan memilih jenis asuransi yang sesuai dengan...</p>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Newsletter Signup -->
                    <div class="bg-blue-900 text-white p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Dapatkan Update Terbaru</h3>
                        <p class="mb-4 text-blue-100">Berlangganan newsletter kami untuk mendapatkan tips keuangan terbaru</p>
                        <form class="space-y-3">
                            <input type="email" placeholder="Alamat Email Anda" class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-gold-400">
                            <button type="submit" class="w-full bg-gold-500 hover:bg-gold-600 text-blue-900 font-bold py-2 px-4 rounded-lg transition-colors duration-300">
                                Berlangganan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Article Navigation -->
<section class="py-8 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <a href="{{ route('article', ['id' => 2]) }}" class="flex items-center text-blue-900 hover:text-gold-500 transition-colors duration-300 mb-4 md:mb-0">
                <i class="fas fa-arrow-left mr-2"></i>
                <span>Panduan Investasi Saham untuk Pemula</span>
            </a>
            <a href="{{ route('education') }}" class="text-gold-500 hover:text-gold-600 font-medium transition-colors duration-300">
                Kembali ke Artikel
            </a>
            <a href="{{ route('article', ['id' => 5]) }}" class="flex items-center text-blue-900 hover:text-gold-500 transition-colors duration-300 mt-4 md:mt-0">
                <span>Presiapan Dana Pensiun Sejak Dini</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endsection