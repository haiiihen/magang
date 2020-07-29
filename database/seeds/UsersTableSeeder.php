<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        //
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'gender' =>'gender',
            'tanggalLahir' => '2020-03-01',
            'alamat' =>'alamat',
            'instansi' =>'instansi',
            'instagram' => 'instagram',
            'noHandphone' => '081123123123',
            'avatar' => 'user',
        ]);

        $author = User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => bcrypt('author'),
            'gender' =>'gender',
            'tanggalLahir' => '2020-03-01',
            'alamat' =>'alamat',
            'instansi' =>'instansi',
            'instagram' => 'instagram',
            'noHandphone' => '081123123123',
            'avatar' => 'user',
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'gender' =>'gender',
            'tanggalLahir' => '2020-03-01',
            'alamat' =>'alamat',
            'instansi' =>'instansi',
            'instagram' => 'instagram',
            'noHandphone' => '081123123123',
            'avatar' => 'user',
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

        factory(App\User::class, 100)->create();
    }
}
