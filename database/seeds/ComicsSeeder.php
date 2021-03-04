<?php

use App\Comics;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 2; $i++) { 
            # code...
            $newComics = new Comics();
            $newComics->title = $faker->sentence();
            $newComics->description = $faker->text(200);
            $newComics->cover = $faker->imageUrl(640, 480, true);

            $newComics->available = $faker->boolean();
            $newComics->US_price = $faker->randomFloat(2, 0, 10);
            $newComics->on_sale_date = $faker->dateTime();
            $newComics->volume_issue = $faker->numberBetween(0, 1000);
            $newComics->trim_size = $faker->word();
            $newComics->page_count = $faker->numberBetween(0, 100);
            $newComics->rated = $faker->word();
            $newComics->save();
        }
    }
}
