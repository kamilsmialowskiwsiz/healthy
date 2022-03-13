<?php

namespace Database\Seeders;

use App\Models\Diet;
use Illuminate\Database\Seeder;

class DietsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diet::create([
            'name' => 'Odchudzanie',
            'filepath' => 'https://drive.google.com/file/d/1Z0iVmo_wnB8yiHI-09VNiTmuIXMQItFX/view',
        ]);
        Diet::create([
            'name' => 'Utrzymanie wagi',
            'filepath' => 'https://drive.google.com/file/d/1zzGo_0AFmRpcYWt6mLIQP8VDVIgtjN1_/view',
        ]);
        Diet::create([
            'name' => 'Przytycie',
            'filepath' => 'https://drive.google.com/file/d/1MJZNGULSkXgCvmZHJaZ3iIG6hoiMLJnk/view',
        ]);
    }
}
