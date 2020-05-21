<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 500)->create()->each(function ($user) {
            $user->events()->save(factory(App\Model\Event::class)->make());
        });
    }
}
