<?php

namespace Database\Seeders\Auth;

use App\Events\Backend\UserCreated;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = [
            [
                'id' => 1,
                'username' => 'superadmin',
                'name' => 'Super Admin',
                'email' => 'super@j18challenge.com',
                'password' => 'firstkicker',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'username' => 'lee',
                'name' => 'Lee Ibrahim',
                'email' => 'lee@resavi.com',
                'password' => 'desparado',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'username' => 'baraza',
                'name' => 'Stephen baraza',
                'email' => 'baraza@j18challenge.com',
                'password' => 'baraza@#$12',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'username' => 'melissa',
                'name' => 'Melissa Green',
                'email' => 'melissa@j18challenge.com',
                'password' => 'melissa',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'username' => 'user',
                'name' => 'General User',
                'email' => 'user@user.com',
                'password' => 'secret',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($users as $user_data) {
            $user = User::create($user_data);

            event(new UserCreated($user));
        }
    }
}
