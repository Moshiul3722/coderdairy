<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Problem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              =>  'Gazi Moshiul',
            'userName'          =>  'Moshiul',
            'email'             =>  'gazimoshiul@gmail.com',
            'email_verified_at' =>  now(),
            'image'             =>  'https://random.imagecdn.app/100/100',
            'password'          =>  bcrypt('123')
        ]);

        Category::factory(10)->create();
        Problem::factory(20)->create();
    }
}
