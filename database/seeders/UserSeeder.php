<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        // Init the first user
        $user = User::find(1);
        $user->name = 'Gary';
        $user->email = 'gary@larabnb.com';
        $user->save();
    }
}
