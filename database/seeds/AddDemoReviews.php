<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Review;

class AddDemoReviews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('review')->count() === 0) {
            Review::firstOrCreate([
                'imdb_id' => 'tt0096895',
                'user_id' => '1',
                'content' => 'Great Movie',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Review::firstOrCreate([
                'imdb_id' => 'tt0094895',
                'user_id' => '1',
                'content' => 'Perfect 5/7',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            Review::firstOrCreate([
                'imdb_id' => 'tt0096595',
                'user_id' => '1',
                'content' => 'Could be better',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}


