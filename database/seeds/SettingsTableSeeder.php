<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Setting::create([
            'site_name' => "Laravel's blog",
            'address' => 'Russia, Petersburg',
            'contact_number' => ' 0 512 1234 2412',
            'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
