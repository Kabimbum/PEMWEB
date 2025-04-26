<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Seo::count()==0){
            Seo::create([
                'title' => 'Kebakaran',
                'description' => 'Kebakaran rumah panggung',
                'keyword' => 'bakar',
                'cannonical_url' => 'kebakaran.com',
                'robots' => 'gundam ',
                'og_image' => '',
            ]);
        }
    }
}
