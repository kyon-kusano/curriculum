<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'たきじい',
                'email' => 'takiji@gmail.com',
                'password' => Hash::make('takijitakiji'),
            ],
            [
                'name' => 'そうしのまくら',
                'email' => 'soshino@gmail.com',
                'password' => Hash::make('soshisoshi'),
            ],
            [
                'name' => 'あくたの龍ちゃん',
                'email' => 'akutano@gmail.com',
                'password' => Hash::make('akutaakuta'),
            ],
        ]);
    }
}
