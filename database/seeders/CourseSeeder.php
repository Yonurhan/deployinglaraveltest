<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $courses =[
            [
                'nama'=>'Kalkulus I',
                'kode'=>'M001',
                'foto'=>'storage/image/Courses/kalkulus1.jpg',
                'deskripsi'=>'Kalkulus I adalah cabang matematika yang mempelajari konsep dasar limit, turunan, dan integral. Materi ini digunakan untuk menganalisis perubahan, menghitung laju perubahan fungsi, serta menentukan akumulasi nilai atau luas di bawah kurva.',
                'isi'=> 'Kalkulus I adalah salah satu cabang matematika yang berfokus pada studi perubahan dan akumulasi, memberikan dasar yang sangat penting dalam memahami berbagai fenomena alam maupun buatan. Materi ini mencakup tiga konsep utama, yaitu limit, turunan, dan integral dasar, yang masing-masing saling terkait dan mendasari berbagai aplikasi praktis dalam kehidupan sehari-hari maupun dalam sains dan teknik. Limit, sebagai konsep fundamental, digunakan untuk menganalisis perilaku fungsi saat mendekati nilai tertentu, terutama ketika fungsi tidak terdefinisi pada titik tertentu atau memiliki nilai yang sulit dihitung secara langsung. Misalnya, limit memungkinkan kita untuk memahami bagaimana nilai suatu fungsi mendekati nol, tak hingga, atau nilai lainnya, serta memberikan dasar untuk mendefinisikan kontinuitas fungsi, yang penting dalam banyak teorema kalkulus. Selanjutnya, turunan berperan sebagai alat untuk mengukur laju perubahan suatu fungsi terhadap variabelnya, memberikan cara untuk memahami perubahan dinamis dalam sistem. Turunan sering digunakan dalam berbagai aplikasi, seperti menghitung kecepatan dalam fisika, menganalisis pertumbuhan ekonomi dalam ekonomi, atau memahami perubahan dalam sistem biologi. Dalam konteks geometris, turunan merepresentasikan kemiringan garis singgung suatu kurva pada titik tertentu, memberikan gambaran visual mengenai perubahan fungsi. Berbagai aturan dalam turunan, seperti aturan penjumlahan, perkalian, pembagian, dan rantai, membantu mempermudah perhitungan turunan untuk fungsi-fungsi kompleks. Selain itu, turunan juga digunakan untuk menemukan nilai maksimum dan minimum fungsi, yang berguna dalam optimasi, baik dalam pengelolaan sumber daya maupun perencanaan bisnis. Sebagai kebalikan dari turunan, integral digunakan untuk menghitung akumulasi atau luas di bawah kurva suatu fungsi. Integral memiliki dua jenis utama, yaitu integral tak tentu, yang digunakan untuk menemukan fungsi asal dari suatu turunan, dan integral tentu, yang digunakan untuk menghitung nilai total dalam suatu interval tertentu. Dalam fisika, integral sering diterapkan untuk menghitung jarak tempuh berdasarkan grafik kecepatan terhadap waktu, sementara dalam teknik, integral digunakan untuk menganalisis tekanan, volume, dan energi. Konsep integral juga sering diterapkan dalam statistik, untuk menghitung distribusi probabilitas, atau dalam ekonomi, untuk memahami akumulasi pendapatan atau biaya. Limit, turunan, dan integral saling terhubung dalam Teorema Fundamental Kalkulus, yang menghubungkan perhitungan turunan dan integral, memungkinkan solusi masalah yang melibatkan perubahan dinamis dan akumulasi secara simultan. Konsep-konsep ini tidak hanya berguna secara teoretis, tetapi juga memiliki aplikasi luas dalam berbagai bidang, mulai dari analisis pergerakan benda dalam fisika, prediksi tren dalam ekonomi, desain infrastruktur dalam teknik sipil, hingga pengembangan teknologi canggih seperti kecerdasan buatan. Pemahaman mendalam tentang kalkulus I membantu dalam memodelkan dan memecahkan masalah dunia nyata, membuatnya menjadi alat esensial dalam ilmu pengetahuan dan teknologi.',
                'durasi'=>'180',
                'link'=>'Wqrr2ba3dU0?si=75jh2bV5WazQKwiq',
            ],
            [
                'nama'=>'Ilmu Data',
                'kode'=>'M002',
                'foto'=>'storage/image/Courses/datascience.jpg',
                'deskripsi'=>'Ilmu Data adalah disiplin interdisipliner yang berfokus pada pengumpulan, pengolahan, analisis, dan interpretasi data untuk memperoleh wawasan yang bermanfaat, yang telah menjadi salah satu bidang paling penting dalam era digital saat ini, dengan aplikasi yang mencakup hampir semua aspek kehidupan modern.',
                'isi'=> 'Ilmu Data adalah disiplin interdisipliner yang berfokus pada pengumpulan, pengolahan, analisis, dan interpretasi data untuk memperoleh wawasan yang bermanfaat, yang telah menjadi salah satu bidang paling penting dalam era digital saat ini, dengan aplikasi yang mencakup hampir semua aspek kehidupan modern. Dalam dunia yang semakin dipenuhi oleh data, ilmu data memainkan peran sentral dalam mengubah informasi mentah menjadi pengetahuan yang dapat diakses dan diterapkan. Bidang ini menggabungkan berbagai disiplin ilmu, termasuk statistik, matematika, pemrograman komputer, pembelajaran mesin, dan visualisasi data, untuk memahami pola, tren, dan hubungan yang kompleks dalam data. Ilmu data tidak hanya terbatas pada pengolahan data terstruktur yang ditemukan dalam basis data tradisional, tetapi juga mampu menangani data tidak terstruktur seperti teks, gambar, video, dan data yang dihasilkan oleh perangkat Internet of Things (IoT). Dalam praktiknya, ilmu data melibatkan beberapa tahap penting, mulai dari pengumpulan data, baik dari sumber internal organisasi maupun dari sumber eksternal seperti media sosial atau sensor, hingga proses pembersihan data untuk memastikan kualitas dan konsistensi informasi yang akan dianalisis. Setelah itu, data diolah menggunakan teknik eksplorasi data dan analisis statistik untuk mengidentifikasi pola awal sebelum diterapkan model pembelajaran mesin yang lebih kompleks untuk prediksi atau klasifikasi. Pemahaman mendalam tentang teknik pembelajaran mesin, seperti regresi, klasifikasi, clustering, dan analisis jaringan saraf, merupakan inti dari ilmu data, karena teknik ini memungkinkan komputer untuk belajar dari data historis dan membuat keputusan atau rekomendasi cerdas. Selain itu, ilmu data memanfaatkan alat visualisasi seperti diagram, grafik, dan dasbor interaktif untuk menyajikan temuan secara intuitif dan mendukung pengambilan keputusan berbasis data oleh pemangku kepentingan. Dalam bidang bisnis, ilmu data diterapkan untuk memahami perilaku pelanggan, mengoptimalkan operasi, meningkatkan pengalaman pengguna, dan mendorong inovasi produk. Di sektor kesehatan, ilmu data digunakan untuk menganalisis data medis untuk diagnosis penyakit, prediksi epidemi, atau pengembangan pengobatan yang dipersonalisasi. Dalam teknologi informasi, ilmu data memainkan peran penting dalam pengembangan sistem rekomendasi, algoritma pencarian, serta pengenalan suara dan gambar. Tidak hanya itu, bidang ini juga menjadi inti dalam pengembangan kecerdasan buatan yang semakin memperluas cakupan aplikasi teknologi modern. Ilmu data juga penting dalam pemerintahan dan kebijakan publik, di mana analisis data dapat membantu dalam perencanaan kota, pemantauan lingkungan, dan pengambilan keputusan berbasis bukti untuk kepentingan masyarakat luas. Namun, terlepas dari manfaat besar yang ditawarkan, ilmu data menghadapi tantangan, termasuk masalah privasi data, etika, dan keamanan, yang menuntut tanggung jawab yang besar dari para praktisi. Dengan data yang terus bertambah secara eksponensial setiap hari, ilmu data menjadi semakin relevan, dan kebutuhan akan para ahli data yang terampil menjadi semakin mendesak di berbagai sektor. Dengan pemahaman dan penerapan yang tepat, ilmu data memiliki potensi untuk mendorong kemajuan signifikan di berbagai bidang, membantu organisasi dan individu untuk membuat keputusan yang lebih baik, lebih cepat, dan lebih efektif, serta menjembatani kesenjangan antara data mentah dan wawasan yang bermakna.',
                'durasi'=>'200',
                'link'=>'RBSUwFGa6Fk?si=BRoVKJC8GO8QrbG4',
            ],
            [
                'nama'=>'Kecerdasan Buatan (AI)',
                'kode'=>'M003',
                'foto'=>'storage/image/Courses/AI.jpg',
                'deskripsi'=>'Kecerdasan Buatan (Artificial Intelligence/AI) adalah cabang ilmu komputer yang berfokus pada pengembangan sistem atau mesin yang dapat melakukan tugas-tugas yang biasanya membutuhkan kecerdasan manusia.',
                'isi'=> 'Kecerdasan Buatan (Artificial Intelligence/AI) adalah cabang ilmu komputer yang berfokus pada pengembangan sistem atau mesin yang dapat melakukan tugas-tugas yang biasanya membutuhkan kecerdasan manusia. AI dirancang untuk meniru kemampuan kognitif manusia seperti pembelajaran, penalaran, pengambilan keputusan, pemecahan masalah, dan bahkan kreativitas. Dengan menggunakan algoritma dan model matematika, AI memungkinkan mesin untuk menganalisis data, mengenali pola, dan membuat keputusan berdasarkan informasi yang diperoleh. Dalam praktiknya, AI mencakup berbagai teknik dan pendekatan, termasuk pembelajaran mesin (machine learning), yang memungkinkan sistem belajar dari data tanpa diprogram secara eksplisit; pembelajaran mendalam (deep learning), yang menggunakan jaringan saraf tiruan untuk memproses data kompleks; serta pemrosesan bahasa alami (natural language processing), yang memungkinkan mesin memahami dan menghasilkan bahasa manusia. AI memiliki aplikasi luas di berbagai bidang, seperti pengenalan wajah dan suara, sistem rekomendasi, kendaraan otonom, chatbot, analisis data medis, hingga penciptaan konten. Teknologi ini telah merevolusi cara kita bekerja, berinteraksi, dan memecahkan masalah, menjadikannya salah satu inovasi terpenting di era modern. Namun, AI juga menghadirkan tantangan etis dan sosial, seperti masalah privasi, bias algoritma, dan dampaknya terhadap lapangan kerja, sehingga pengembangannya memerlukan keseimbangan antara inovasi teknis dan tanggung jawab sosial.',
                'durasi'=>'250',
                'link'=>'X6Tj2PT41v8?si=l1i40gJu4ZQR2FZS',
            ],
            [
                'nama'=>'Machine Learning',
                'kode'=>'M004',
                'foto'=>'storage/image/Courses/machinelearning.jpg',
                'deskripsi'=>'Machine learning adalah cabang dari kecerdasan buatan yang berfokus pada pengembangan algoritma yang memungkinkan komputer untuk belajar dan membuat keputusan atau prediksi berdasarkan data tanpa harus diprogram secara eksplisit.',
                'isi'=> 'Machine learning adalah cabang dari kecerdasan buatan (artificial intelligence, AI) yang memungkinkan komputer belajar dari data dan membuat keputusan tanpa pemrograman eksplisit. Salah satu cara untuk memahami machine learning adalah dengan membaginya menjadi beberapa pendekatan berdasarkan bagaimana data digunakan dalam proses pelatihan. Dua pendekatan utama adalah supervised learning dan unsupervised learning, yang masing-masing memiliki karakteristik unik, tujuan spesifik, serta kelebihan dan kekurangan.

                Supervised learning adalah metode di mana algoritma dilatih pada dataset yang telah diberi label. Dalam pendekatan ini, setiap contoh dalam dataset memiliki pasangan input-output yang jelas, sehingga algoritma dapat mempelajari hubungan atau pola antara keduanya. Misalnya, dalam sebuah dataset untuk klasifikasi gambar, setiap gambar (input) memiliki label kategori tertentu (output) seperti "kucing," "anjing," atau "burung." Tujuan dari supervised learning adalah untuk memprediksi label untuk data baru yang belum pernah dilihat berdasarkan pola yang telah dipelajari dari data pelatihan. Metode ini sangat populer dan digunakan secara luas dalam berbagai aplikasi, termasuk pengenalan wajah, deteksi email spam, dan diagnosis penyakit berdasarkan data medis.
                
                Di sisi lain, unsupervised learning bekerja dengan data yang tidak memiliki label. Artinya, algoritma tidak diberi tahu apa yang harus dicari atau bagaimana mengklasifikasikan data. Sebagai gantinya, algoritma bertugas untuk menemukan pola, struktur, atau hubungan tersembunyi dalam data itu sendiri. Contoh umum dari unsupervised learning adalah clustering, di mana data dikelompokkan ke dalam cluster berdasarkan kesamaan tertentu, seperti algoritma K-Means. Pendekatan ini sering digunakan dalam analisis pasar untuk segmentasi pelanggan, analisis data biologis, atau bahkan dalam deteksi anomali seperti identifikasi aktivitas mencurigakan dalam sistem keamanan.
                
                Kedua metode ini memiliki perbedaan mendasar dalam cara mereka menangani data dan tujuan akhir yang ingin dicapai. Supervised learning mengandalkan label untuk membimbing proses pembelajaran, sementara unsupervised learning lebih eksploratif, mencoba mengungkap informasi baru dari data yang tidak terstruktur. Meski begitu, keduanya memiliki tantangan serupa, seperti kebutuhan akan dataset berkualitas tinggi, potensi overfitting, dan ketergantungan pada algoritma yang sesuai untuk tugas tertentu.
                ',
                'durasi'=>'250',
                'link'=>'mEwoAV5_dcA?si=O5irfMLrGLil3ays',
            ],
            [
                'nama'=>'Statistika Dasar',
                'kode'=>'M005',
                'foto'=>'storage/image/Courses/statdasar.jpg',
                'deskripsi'=>'Statistika dasar adalah cabang ilmu yang mempelajari pengumpulan, analisis, interpretasi, dan penyajian data. Statistika membantu memahami pola dalam data dan membuat keputusan berdasarkan data tersebut.',
                'isi'=> 'Statistika dasar adalah cabang ilmu matematika yang fokus pada pengumpulan, pengolahan, analisis, interpretasi, dan penyajian data. Sebagai alat ilmiah yang kuat, statistika membantu manusia memahami dunia melalui pola, hubungan, dan tren dalam data. Di dunia modern, statistika dasar digunakan secara luas dalam berbagai disiplin ilmu, mulai dari penelitian ilmiah hingga pengambilan keputusan dalam bisnis, kebijakan publik, dan teknologi. Pemahaman mendalam tentang statistika dasar sangat penting untuk memastikan pengambilan keputusan yang tepat berdasarkan informasi yang ada.

                Statistika dasar terbagi menjadi dua kategori utama: statistika deskriptif dan statistika inferensial. Statistika deskriptif berkaitan dengan cara menggambarkan dan meringkas data menggunakan ukuran seperti rata-rata (mean), median, modus, variansi, dan standar deviasi. Dengan pendekatan ini, data yang besar dan kompleks dapat diringkas menjadi informasi yang lebih sederhana dan mudah dipahami. Sebagai contoh, ketika menganalisis hasil survei kepuasan pelanggan, statistika deskriptif membantu menghitung persentase pelanggan yang puas, rata-rata skor kepuasan, dan pola respons pelanggan.
                
                Sebaliknya, statistika inferensial bertujuan untuk membuat generalisasi atau kesimpulan tentang populasi yang lebih besar berdasarkan sampel yang diambil. Dengan menggunakan konsep probabilitas, statistika inferensial memungkinkan peneliti untuk mengestimasi parameter populasi, menguji hipotesis, dan membuat prediksi. Sebagai contoh, sebuah perusahaan mungkin ingin mengetahui rata-rata pendapatan pelanggan mereka di seluruh negeri berdasarkan sampel kecil dari data pelanggan di beberapa kota. Pendekatan ini memungkinkan pengambilan keputusan yang lebih efisien tanpa harus mengumpulkan data dari seluruh populasi, yang sering kali tidak praktis atau mahal.
                
                Konsep utama dalam statistika dasar meliputi data, populasi, sampel, dan variabel. Data adalah informasi yang dikumpulkan untuk dianalisis, yang bisa berupa angka (data kuantitatif) atau kategori (data kualitatif). Populasi mengacu pada keseluruhan kumpulan elemen yang menjadi fokus penelitian, sedangkan sampel adalah subset dari populasi yang diambil untuk dianalisis. Variabel adalah karakteristik atau atribut yang diukur dalam penelitian, seperti usia, pendapatan, atau tingkat kepuasan pelanggan.',
                'durasi'=>'300',
                'link'=>'el7Ezn9PpWU?si=TUVeAQlS2B4qPaKt',
            ],
            [
                'nama'=>'Web Programming',
                'kode'=>'M006',
                'foto'=>'storage/image/Courses/webprog.jpg',
                'deskripsi'=>'Web programming adalah proses pengembangan aplikasi atau situs web dengan menggunakan bahasa pemrograman yang berfungsi untuk menciptakan antarmuka pengguna (frontend) dan fungsionalitas sistem (backend).',
                'isi'=> '
                Web programming adalah proses pengembangan situs atau aplikasi web yang mencakup frontend, backend, dan terkadang full-stack development untuk menyediakan antarmuka pengguna yang interaktif serta logika server yang andal. Frontend development melibatkan HTML, CSS, dan JavaScript untuk menciptakan tampilan dan interaktivitas yang menarik, sering kali didukung oleh framework seperti React atau Angular untuk pengelolaan komponen yang lebih efisien. Backend development menggunakan bahasa seperti Python, PHP, atau Java untuk mengelola data dan logika aplikasi, didukung oleh database seperti MySQL atau MongoDB untuk menyimpan informasi. Dalam praktiknya, web programming melahirkan berbagai jenis aplikasi, mulai dari situs statis sederhana hingga aplikasi web progresif (PWA) yang mampu bekerja secara offline dan memberikan pengalaman layaknya aplikasi native. Dengan kemajuan teknologi seperti API-first development, serverless architecture, dan cloud integration, web programming terus berkembang menjadi lebih canggih dan fleksibel, memungkinkan pengembang menciptakan solusi inovatif untuk berbagai kebutuhan. Namun, tantangan seperti keamanan, optimasi performa, kompatibilitas perangkat, serta pengelolaan skala besar tetap memerlukan perhatian khusus. Dalam dunia digital yang semakin kompleks dan terkoneksi, web programming memainkan peran penting dalam menghubungkan pengguna dengan layanan, informasi, dan teknologi secara efisien, memastikan pengalaman yang mulus dan bermanfaat.',
                'durasi'=>'300',
                'link'=>'t8Nxs7F4qEM?si=Fwk1HLlx2o_JzoUl',
            ]
            ];
            DB::table('courses')->insert($courses);
    }
}