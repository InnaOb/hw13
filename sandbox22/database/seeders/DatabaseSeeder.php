<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Card;
use App\Models\Column;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Subscription;
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
        Card::factory(5)->create();
        Board::factory(5)->create();
        Column::factory(5)->create();
        Comment::factory(5)->create();
        Notification::factory(5)->create();
        Subscription::factory(5)->create();
        User::factory(5)->create();

    }
}
