<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tweet Seeder 1
        DB::table('tweets')->insert([
            'name' => 'Laura Johnson',
            'handle' => '@laurajohnson',
            'image' => 'https://randomuser.me/api/portraits/women/43.jpg',
            'tweet' => 'Just finished reading "To Kill a Mockingbird" for the third time. Such a classic. What are some of your favorite books?',
            'file' => null,
            'is_video' => false,
            'comments' => '16',
            'retweets' => '23',
            'likes' => '45',
            'analytics' => '62',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

// Tweet Seeder 2
        DB::table('tweets')->insert([
            'name' => 'David Kim',
            'handle' => '@davidkim',
            'image' => 'https://randomuser.me/api/portraits/men/32.jpg',
            'tweet' => 'I just tried making my own sushi for the first time. It was a bit of a disaster but still tasted good! Anyone have any tips for making sushi at home?',
            'file' => null,
            'is_video' => false,
            'comments' => '9',
            'retweets' => '12',
            'likes' => '33',
            'analytics' => '44',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

// Tweet Seeder 3
        DB::table('tweets')->insert([
            'name' => 'Sophie Lee',
            'handle' => '@sophielee',
            'image' => 'https://randomuser.me/api/portraits/women/19.jpg',
            'tweet' => 'Just watched the latest episode of "Game of Thrones" and I am SHOOK. Who else is a fan of the show? What did you think of the latest episode?',
            'file' => null,
            'is_video' => false,
            'comments' => '25',
            'retweets' => '39',
            'likes' => '71',
            'analytics' => '86',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

// Tweet Seeder 4
        DB::table('tweets')->insert([
            'name' => 'Alex Rodriguez',
            'handle' => '@arod',
            'image' => 'https://randomuser.me/api/portraits/men/12.jpg',
            'tweet' => 'Had an amazing time at the Yankees game last night. The energy in the stadium was electric! Who else loves going to baseball games?',
            'file' => null,
            'is_video' => false,
            'comments' => '42',
            'retweets' => '68',
            'likes' => '123',
            'analytics' => '156',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

// Tweet Seeder 5
        DB::table('tweets')->insert([
            'name' => 'Emily Chen',
            'handle' => '@emilychen',
            'image' => 'https://randomuser.me/api/portraits/women/21.jpg',
            'tweet' => 'Just got back from a trip to Hawaii and I am already missing the beach. What are some of your favorite vacation spots?',
            'file' => null,
            'is_video' => false,
            'comments' => '7',
            'retweets' => '13',
            'likes' => '27',
            'analytics' => '33',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

// Tweet Seeder 6
        DB::table('tweets')->insert([
            'name' => 'Justin Park',
            'handle' => '@justinpark',
            'image' => 'https://randomuser.me/api/portraits/men/8.jpg',
            'tweet' => 'I just finished training for my first half marathon and it was one of the most challenging things I have ever done. But the sense of accomplishment was worth it. Who else has completed a big fitness goal recently?',
            'file' => null,
            'is_video' => false,
            'comments' => '14',
            'retweets' => '19',
            'likes' => '42',
            'analytics' => '51',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
