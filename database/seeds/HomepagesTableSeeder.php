<?php

use App\Homepage;
use Illuminate\Database\Seeder;

class HomepagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homepage::create([
            'judul' => 'Maksimalkan Potensimu, Daftarkan Kelasmu Sekarang!',
            'caption' => 'Jika kamu adalah para pelatih, instruktur, maupun mentor, Uniqlass akan membantu kamu untuk menjangkau pasar yang lebih luas',
            'tombol' => 'Bergabung bersama Kami!',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSexlwW1ccXEzWaSeb6_way7s2Mp83EbAel3rnJgma1U1t2XYg/viewform',
            'deskripsi' => 'Uniqlass adalah sebuah platform yang menjembatani peserta dengan pemilik kelas melalui fitur yang akan datang yaitu fitur booking kelas secara online. Uniqlass juga menyediakan wadah untuk peningkatan skill, healing, maupun socializing melalui event tematik dan berbagai jenis kelas yang tersedia',
            'ig1' => 'https://www.instagram.com/p/CbJmViBrTz1/?igshid=YmMyMTA2M2Y=',
            'ig2' => 'https://www.instagram.com/p/CbFRoWOrIo5/?utm_source=ig_web_copy_link',
            'ig3' => 'https://www.instagram.com/p/CZMRNnFh0nN/?utm_source=ig_web_button_share_sheet',
            'yt1' => 'FE0MlF7tvec',
            'yt2' => '26lKjC6L7OY',
            'yt3' => '0hUDqO14DYk',
            'inputer' => 'uniqlass',
        ]);
    }
}
