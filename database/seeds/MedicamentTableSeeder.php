<?php

use Illuminate\Database\Seeder;
use App\Entity\Medicament\Medicament;

class MedicamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Medicament::class, 25000)->create();
    }
}
