<?php

use App\Tentang;
use Illuminate\Database\Seeder;

class TentangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::create([
            'deskripsi' => 'Uniqlass merupakan platform rintisan yang bergerak di bidang kelas dan pelatihan akademik dan non-akademik. Platform Uniqlass bertujuan untuk membantu menjembatani mitra pemilik kelas atau pelatihan dengan pemilik gedung/ruangan yang dapat disewa untuk pelaksanaan kelas dan pelatihan dengan biaya terjangkau. Saat ini, Uniqlass berfokus untuk meningkatkan jaringan mitra khususnya yang berlokasi di Kabupaten dan Kota Madiun. Serta sedang mengembangkan website dengan fitur booking kelas/pelatihan secara online; booking ruang; dan fitur pendaftaran event tematik/trial class.',
            'visi' => 'Membantu meningkatkan kapasitas dan gaya hidup sehat masyarakat melalui penyediaan layanan cari dan pesan berbagai jenis kelas secara online serta turut meningkatkan kesejahteraan pemilik kelas (tenaga pendidik Indonesia baik guru, pelatih, instruktur maupun mentor pada bidang akademik dan/atau non akademik) di Indonesia kedepannya.',
            'misi' => 'Berorientasi pada kebutuhan konsumen dan mitra. Membantu konsumen agar dapat lebih menikmati hidup melalui penyediaan berbagai jenis kelas yang dapat dengan mudah ditemukan dan diikuti guna meningkatkan kapasitas diri, kesehatan mental dan fisik. Membantu pemilik kelas/pelatih di Indonesia untuk dapat menyalurkan ilmu yang dimilikinya dan meningkatkan kesejahteraan hidupnya. Mampu beradaptasi dan berinovasi dalam berbisnis yang memungkinkan untuk terus bertumbuh dan meraih masa depan yang lebih baik',
        ]);
    }
}
