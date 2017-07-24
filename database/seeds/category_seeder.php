<?php

use Illuminate\Database\Seeder;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category')->delete();

      $category = [
        ['category_name' => 'BanG Dream!', 'category_folder' => 'LedakaN Impian! (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Fate kaleid liner Prisma Illya 2wei! Herz', 'category_folder' => 'Takdir Tongkat Kaleid Prisma Illya 2! Inti (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Grisaia no Rakuen', 'category_folder' => 'Nirwana Kelabu (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Rio - Rainbow Gate', 'category_folder' => 'Rio - Gerbang Pelangi! (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'HUNTERxHUNTER 2011', 'category_folder' => 'PEMBURUxPEMBURU 2011 (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'ReLIFE', 'category_folder' => 'Mengulang Kehidupan (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Yozakura Quartet - Hoshi no Umi', 'category_folder' => 'Kuartet Yozakura - Bintang dari Laut (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Yozakura Quartet - Hana no Uta', 'category_folder' => 'Kuartet Yozakura - Lagu Bunga (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Zutto Mae Kara Suki Deshita - Kokuhaku Jikko Inkai', 'category_folder' => 'Sudah Sejak Lama Aku Mencintaimu (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Tasogare Otome x Amnesia', 'category_folder' => 'Gadis Senja x Hilang Ingatan (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Taboo Tattoo', 'category_folder' => 'Tato Tabu (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Shiki', 'category_folder' => 'Mayat Iblis (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Sengoku Basara', 'category_folder' => 'Era Perang Basara (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Sekai Seifuku - Bouryaku no Zvezda', 'category_folder' => 'PLOT Zvezda - Penaklukan Dunia (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Red Data Girl', 'category_folder' => 'Gadis Data Merah (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Ore no Kanojo to Osananajimi ga Shuraba Sugiru', 'category_folder' => 'Medan Perang Pacarku dan Teman Kecilku (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Ore no Kanojo to Osananajimi ga Shuraba Sugiru', 'category_folder' => 'Medan Perang Pacarku dan Teman Kecilku (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Ore no Imouto ga Konna ni Kawaii Wake ga Nai', 'category_folder' => 'Tidak Mungkin Adik Perempuanku Seimut Ini (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Alderamin on the Sky', 'category_folder' => 'Alderamin di Surga (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Nerawareta Gakuen', 'category_folder' => 'Akademi Supernatural (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Mitsudomoe Zouryouchuu!', 'category_folder' => 'Kembar 3 Yang Semakin Rusuh (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Medaka Box', 'category_folder' => 'Kotak Medaka (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Mayo Chiki!', 'category_folder' => 'Ayam Nyasar! (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Fate kaleid liner Prisma Illya 3rei!', 'category_folder' => 'Takdir Tongkat Kaleid Prisma Illya 3! (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Unbreakable Machine-Doll', 'category_folder' => 'Boneka yang Mustahil Hancur (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Level E', 'category_folder' => 'Level E (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Kotonoha no Niwa', 'category_folder' => 'Taman Harfiah (BD)', 'category_type' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Kono Bijutsubu ni haMondai ga Aru!', 'category_folder' => 'Ada Masalah di Klub Seni! (TV)',  'category_type' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['category_name' => 'Kokoro Connect', 'category_folder' => 'Kokoro Connect',  'category_type' => 1,  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ];

      DB::table('category')->insert($category);
    }
}
