<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
      Usuarios::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'date' => $request->date,
    ]);

    }
}
