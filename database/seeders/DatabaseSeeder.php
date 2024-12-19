<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Position;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $posits = Position::factory(15)->create();
        $empls = Employee::factory(25)->create();
        
        foreach ($empls as $empl) {
            $random = random_int(1, 3);
            $posit_id = $posits->random($random)->pluck('id');
            $empl->positions()->attach($posit_id);
        }
    }
}
