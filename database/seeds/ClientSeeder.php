<?php

use App\User;
use App\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::first() ?? factory(User::class)->create();

        factory(Client::class, 150)->create([
            // 'user_id' => $user->id,
        ]);
    }
}
