<?php

use Illuminate\Database\Seeder;

class PengalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Bidang::class, 2)->create();
        factory(\App\Models\Industri::class, 2)->create();
        factory(\App\Models\Jabatan::class, 2)->create();

    }
}
