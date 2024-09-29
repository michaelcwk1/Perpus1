<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller

{

    public function gallery_smecone()
    {
        $books = [

            ['id' => 1, 'title' => 'Analisis Risiko IT di Bank Maspion', 'description' => 'Studi tentang penerapan manajemen risiko teknologi informasi di sektor perbankan.', 'image' => 'hukum.jpg'],

            ['id' => 2, 'title' => 'Pengaruh Implementasi ERP pada Kinerja Perusahaan Manufaktur', 'description' => 'Penelitian mengenai dampak implementasi sistem ERP terhadap efisiensi operasional perusahaan manufaktur.', 'image' => 'hukum.jpg'],

            ['id' => 3, 'title' => 'Penerapan Machine Learning untuk Prediksi Penjualan di E-Commerce', 'description' => 'Studi kasus tentang bagaimana algoritma machine learning digunakan untuk memprediksi tren penjualan di platform e-commerce.', 'image' => 'hukum.jpg'],

            ['id' => 4, 'title' => 'Pengembangan Sistem Inventory Berbasis Laravel', 'description' => 'Perancangan dan implementasi sistem manajemen inventory menggunakan framework Laravel pada perusahaan retail.', 'image' => 'hukum.jpg'],

            ['id' => 5, 'title' => 'Optimasi Proses Logistik Menggunakan Algoritma Genetika', 'description' => 'Penelitian tentang penggunaan algoritma genetika dalam optimasi rute pengiriman logistik.', 'image' => 'hukum.jpg'],

            ['id' => 6, 'title' => 'Pengaruh Penggunaan Framework React.js dalam Pembangunan Web Responsif', 'description' => 'Analisis performa dan efisiensi framework React.js dalam pengembangan aplikasi web modern yang responsif.', 'image' => 'hukum.jpg'],

            ['id' => 7, 'title' => 'Keamanan Data pada Sistem Informasi Berbasis Cloud', 'description' => 'Penelitian mengenai tantangan dan solusi keamanan data pada sistem informasi yang berjalan di infrastruktur cloud.', 'image' => 'hukum.jpg'],

            ['id' => 8, 'title' => 'Analisis UX/UI dalam Aplikasi Mobile Banking', 'description' => 'Kajian tentang pengaruh desain UX/UI terhadap kepuasan pengguna aplikasi mobile banking.', 'image' => 'hukum.jpg'],

            ['id' => 9, 'title' => 'Pengaruh Transformasi Digital terhadap Perusahaan Startup', 'description' => 'Studi tentang bagaimana transformasi digital mempengaruhi pertumbuhan dan operasional perusahaan startup.', 'image' => 'hukum.jpg'],

            ['id' => 10, 'title' => 'Pengembangan Aplikasi E-Learning dengan Gamifikasi', 'description' => 'Rancangan aplikasi pembelajaran elektronik dengan pendekatan gamifikasi untuk meningkatkan motivasi belajar.', 'image' => 'hukum.jpg']
        ];

        return view('buku.skripsi', compact('books'));
    }

    public function gallery_artikel()
    {
        $books   = [
            [
                'id' => 1,
                'title' => 'Strategi Manajemen Krisis untuk Bisnis',
                'description' => 'Langkah-langkah efektif dalam mengelola krisis di dalam perusahaan',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 2,
                'title' => 'Manajemen Waktu untuk Produktivitas Optimal',
                'description' => 'Cara mengelola waktu dengan bijak untuk meningkatkan produktivitas kerja',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 3,
                'title' => 'Peran Manajemen Risiko dalam Bisnis Modern',
                'description' => 'Bagaimana manajemen risiko membantu dalam pengambilan keputusan yang lebih baik',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 4,
                'title' => 'Manajemen Proyek yang Efektif: Kunci Sukses Tim',
                'description' => 'Panduan langkah demi langkah dalam mengelola proyek secara efisien',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 5,
                'title' => 'Inovasi dalam Manajemen Sumber Daya Manusia',
                'description' => 'Cara-cara inovatif dalam mengelola dan mengembangkan SDM di era digital',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 6,
                'title' => 'Manajemen Keuangan untuk Perusahaan Startup',
                'description' => 'Strategi pengelolaan keuangan yang diperlukan bagi perusahaan rintisan',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 7,
                'title' => 'Pengaruh Manajemen Perubahan pada Perusahaan',
                'description' => 'Studi tentang pentingnya manajemen perubahan dalam mencapai keberhasilan',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 8,
                'title' => 'Perencanaan Strategis dalam Manajemen Bisnis',
                'description' => 'Cara merumuskan strategi jangka panjang yang efektif untuk pertumbuhan bisnis',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 9,
                'title' => 'Manajemen Kinerja untuk Meningkatkan Hasil Bisnis',
                'description' => 'Pentingnya pemantauan kinerja untuk mencapai target perusahaan',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 10,
                'title' => 'Manajemen Konflik di Tempat Kerja',
                'description' => 'Strategi untuk mengelola dan menyelesaikan konflik secara produktif',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 11,
                'title' => 'Digitalisasi dalam Manajemen Operasional',
                'description' => 'Bagaimana teknologi mempengaruhi efisiensi dalam manajemen operasional',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 12,
                'title' => 'Manajemen Kualitas untuk Meningkatkan Standar Produk',
                'description' => 'Cara memastikan produk dan layanan berkualitas tinggi melalui manajemen kualitas',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 13,
                'title' => 'Manajemen Pemasaran di Era Digital',
                'description' => 'Menerapkan strategi pemasaran modern untuk menjangkau pasar yang lebih luas',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 14,
                'title' => 'Mengelola Tim Jarak Jauh dengan Efektif',
                'description' => 'Tips dalam memimpin dan mengelola tim yang bekerja secara remote',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 15,
                'title' => 'Manajemen Inovasi dalam Industri Kreatif',
                'description' => 'Cara memanfaatkan manajemen inovasi untuk memperkuat daya saing di industri kreatif',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 16,
                'title' => 'Manajemen Logistik dan Rantai Pasok',
                'description' => 'Studi tentang pentingnya manajemen logistik dalam memperkuat rantai pasok',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 17,
                'title' => 'Manajemen Karyawan dalam Lingkungan Kerja Hybrid',
                'description' => 'Bagaimana cara terbaik untuk mengelola karyawan dalam model kerja hybrid',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 18,
                'title' => 'Manajemen Komunikasi dalam Organisasi',
                'description' => 'Pentingnya komunikasi yang efektif dalam mencapai tujuan organisasi',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 19,
                'title' => 'Manajemen Krisis: Persiapan untuk Masa Sulit',
                'description' => 'Studi mengenai pentingnya kesiapan perusahaan dalam menghadapi krisis',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 20,
                'title' => 'Manajemen Inovasi untuk Pertumbuhan Bisnis',
                'description' => 'Bagaimana manajemen inovasi mendorong pertumbuhan dan daya saing bisnis',
                'image' => 'manajemen.jpg'
            ],
        ];


        return view('buku.artikel', compact('books'));
    }

    public function gallery_disertasi()
    {
        $books = [
            ['id' => 1, 'title' => 'Pengaruh Hukum dalam Transformasi Digital', 'description' => 'Studi dampak hukum terhadap digitalisasi bisnis modern', 'image' => 'hukum.jpg'],
            ['id' => 2, 'title' => 'Peran Hukum dalam Perlindungan Konsumen', 'description' => 'Analisis hukum untuk melindungi hak konsumen dalam era e-commerce', 'image' => 'hukum.jpg'],
            ['id' => 3, 'title' => 'Implikasi Hukum Privasi dalam Teknologi', 'description' => 'Bagaimana hukum privasi melindungi data pribadi di era digital', 'image' => 'hukum.jpg'],
            ['id' => 4, 'title' => 'Tantangan Hukum dalam Ekonomi Digital', 'description' => 'Studi mengenai regulasi di sektor ekonomi digital yang terus berkembang', 'image' => 'hukum.jpg'],
            ['id' => 5, 'title' => 'Perkembangan Hukum Internasional dalam Globalisasi', 'description' => 'Penyesuaian hukum internasional menghadapi tantangan globalisasi', 'image' => 'hukum.jpg'],
            ['id' => 6, 'title' => 'Hukum Perburuhan di Era Gig Economy', 'description' => 'Studi mengenai hak pekerja lepas dalam industri ekonomi digital', 'image' => 'hukum.jpg'],
            ['id' => 7, 'title' => 'Kebijakan Hukum untuk Startup Teknologi', 'description' => 'Peran hukum dalam mendukung pertumbuhan startup teknologi di Indonesia', 'image' => 'hukum.jpg'],
            ['id' => 8, 'title' => 'Regulasi Hukum Terhadap Kejahatan Siber', 'description' => 'Bagaimana hukum siber menanggulangi kejahatan dunia maya yang semakin meningkat', 'image' => 'hukum.jpg'],
            ['id' => 9, 'title' => 'Penerapan Hukum Hak Cipta dalam Era Digital', 'description' => 'Studi tentang perlindungan kekayaan intelektual di dunia digital', 'image' => 'hukum.jpg'],
            ['id' => 10, 'title' => 'Hukum dan Keadilan dalam Konflik Digital', 'description' => 'Analisis konflik digital dan cara hukum menyelesaikannya', 'image' => 'hukum.jpg'],
            ['id' => 11, 'title' => 'Peran Hukum dalam Keberlanjutan Bisnis Online', 'description' => 'Bagaimana hukum mendukung keberlanjutan bisnis dalam ekosistem online', 'image' => 'hukum.jpg'],
            ['id' => 12, 'title' => 'Hukum Kontrak Elektronik dalam E-Commerce', 'description' => 'Analisis hukum mengenai perjanjian elektronik dalam transaksi digital', 'image' => 'hukum.jpg'],
            ['id' => 13, 'title' => 'Dampak Regulasi Terhadap Inovasi Teknologi', 'description' => 'Studi peran regulasi hukum dalam mendukung atau menghambat inovasi', 'image' => 'hukum.jpg'],
            ['id' => 14, 'title' => 'Hukum Lingkungan dan Perkembangan Industri Hijau', 'description' => 'Bagaimana hukum lingkungan mempengaruhi pertumbuhan industri yang ramah lingkungan', 'image' => 'hukum.jpg'],
            ['id' => 15, 'title' => 'Peran Hukum dalam Membangun Ekonomi Berkelanjutan', 'description' => 'Studi mengenai regulasi hukum untuk menciptakan ekonomi yang berkelanjutan', 'image' => 'hukum.jpg'],
            ['id' => 16, 'title' => 'Hukum dan Keamanan Data dalam Perbankan Digital', 'description' => 'Analisis hukum untuk melindungi data nasabah di sektor perbankan digital', 'image' => 'hukum.jpg'],
            ['id' => 17, 'title' => 'Peran Hukum dalam Ekonomi Berbasis Platform', 'description' => 'Studi mengenai regulasi terhadap bisnis platform dan dampaknya pada ekonomi', 'image' => 'hukum.jpg'],
            ['id' => 18, 'title' => 'Pengaturan Hukum untuk Perlindungan Data Pribadi', 'description' => 'Studi mengenai pentingnya regulasi dalam perlindungan data pribadi di era digital', 'image' => 'hukum.jpg'],
            ['id' => 19, 'title' => 'Hukum dan Etika dalam Kecerdasan Buatan', 'description' => 'Analisis hubungan antara hukum dan etika dalam penggunaan kecerdasan buatan', 'image' => 'hukum.jpg'],
            ['id' => 20, 'title' => 'Hukum Keuangan dan Investasi di Era Digital', 'description' => 'Studi mengenai regulasi hukum dalam dunia investasi dan keuangan digital', 'image' => 'hukum.jpg'],
        ];

        return view('buku.diserti', compact('books'));
    }

    public function gallery_jurnal()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Manajemen Risiko Teknologi Informasi di Sektor Perbankan',
                'description' => 'Jurnal ini membahas penerapan manajemen risiko teknologi informasi dalam operasional perbankan dan dampaknya terhadap keamanan data serta efisiensi.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 2,
                'title' => 'Peningkatan Kinerja Perusahaan Melalui Implementasi Sistem ERP',
                'description' => 'Studi tentang bagaimana sistem ERP dapat meningkatkan kinerja perusahaan dalam hal manajemen sumber daya dan efisiensi operasional.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 3,
                'title' => 'Prediksi Penjualan E-Commerce Menggunakan Algoritma Machine Learning',
                'description' => 'Jurnal ini mengeksplorasi penggunaan machine learning untuk memprediksi penjualan dan tren konsumen di platform e-commerce.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 4,
                'title' => 'Sistem Inventory Berbasis Web dengan Laravel: Studi Kasus pada Toko Retail',
                'description' => 'Penelitian ini berfokus pada pengembangan sistem inventory berbasis web dengan menggunakan Laravel untuk meningkatkan efisiensi pengelolaan stok barang.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 5,
                'title' => 'Optimalisasi Rute Logistik Menggunakan Algoritma Genetika',
                'description' => 'Jurnal ini membahas bagaimana algoritma genetika dapat digunakan untuk mengoptimalkan rute pengiriman dalam industri logistik.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 6,
                'title' => 'Desain Responsif Web Modern dengan React.js',
                'description' => 'Penelitian mengenai pengembangan web responsif menggunakan React.js untuk meningkatkan pengalaman pengguna di berbagai perangkat.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 7,
                'title' => 'Keamanan Data dalam Sistem Berbasis Cloud',
                'description' => 'Jurnal ini mengulas tantangan keamanan data pada sistem cloud dan solusi yang dapat diterapkan untuk mitigasi risiko.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 8,
                'title' => 'Evaluasi Pengalaman Pengguna (UX) pada Aplikasi Mobile Banking',
                'description' => 'Studi ini mengevaluasi bagaimana desain UX pada aplikasi mobile banking mempengaruhi interaksi dan kepuasan pengguna.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 9,
                'title' => 'Transformasi Digital: Dampaknya terhadap Pertumbuhan Startup',
                'description' => 'Penelitian ini membahas bagaimana startup dapat memanfaatkan transformasi digital untuk mempercepat pertumbuhan dan inovasi bisnis.',
                'image' => 'manajemen.jpg'
            ],

            [
                'id' => 10,
                'title' => 'Gamifikasi dalam E-Learning: Meningkatkan Motivasi Pembelajaran',
                'description' => 'Jurnal ini membahas penerapan gamifikasi dalam platform e-learning untuk meningkatkan keterlibatan dan motivasi belajar siswa.',
                'image' => 'manajemen.jpg'
            ]
        ];

        return view('buku.jurnal', compact('books'));
    }

    
}
