<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = App\User::create([
            'name' => 'Pajtim Selimi',
            'email' => 'pajtim@selimi.com',
            'password' => bcrypt('12345678'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/imagessd.png',
            'about' => 'Lorem ipsum dolor sit amet, ajkasd djgasdjthe dhewhdasdh4rf , hdhadhhewahdhawhdaw',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'

        ]);
    }
}
