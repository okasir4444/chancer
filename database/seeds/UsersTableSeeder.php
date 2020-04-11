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
        DB::table('users')->insert([
            ['name' => 'test4',
            'email' => 'user4@example.com',
            'sex' => '0',
            'self_introduction' => 'test4です',
            'img_name' => 'sample004.jpeg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'test5',
            'email' => 'user5@example.com',
            'sex' => '1',
            'self_introduction' => 'test5です',
            'img_name' => 'sample005.jpeg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'test6',
            'email' => 'user6@example.com',
            'sex' => '0',
            'self_introduction' => 'test6です',
            'img_name' => 'sample006.jpeg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'test7',
            'email' => 'user7@example.com',
            'sex' => '0',
            'self_introduction' => 'test7です',
            'img_name' => 'sample007.jpeg',
            'password' => Hash::make('password123'),
            ],
        ]);
    }
}
