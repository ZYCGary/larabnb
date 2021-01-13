<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedRentalTypesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $types = [
            ['name' => 'Whole property for rent'],
            ['name' => 'Room(s) in a sharehouse'],
            ['name' => 'Student accommodation'],
            ['name' => 'Homestay'],
            ['name' => 'Share room'],
        ];

        DB::table('rental_types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('rental_types')->truncate();
    }
}
