<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Packet;

class PacketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $packet_object = new Packet();
        $packet_object->packet_name = $faker->bothify('??????-###');
        $packet_object->location = $faker->state();
        $packet_object->description = $faker->paragraph();
        $packet_object->tour_included = $faker->boolean();;
        $packet_object->date = $faker->dateTimeBetween('+1 week', '+10 week');
        $packet_object->duration = $faker->numberBetween(5, 15);
        $packet_object->price = $faker->randomFloat(1, 150, 5000);
        $packet_object->save();
      }
    }
}
